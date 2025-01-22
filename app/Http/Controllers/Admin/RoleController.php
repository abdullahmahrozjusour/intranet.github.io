<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Audit;
use App\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public $arr = [
        'ceo-message',
        'mission-and-vision',
        'board-of-director',
        'announcement',
        'link',
        'event',
        'modal-page',
        'download-center',
        'organization',
        'user',
        'role',
        'useful-contact',
        // 'contact',
    ];

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:view-role', ['only' => ['index']]);
        $this->middleware('permission:create-role', ['only' => ['create','store']]);
        $this->middleware('permission:edit-role', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-role', ['only' => ['destroy']]);
        $this->middleware('permission:audit-role', ['only' => ['audit']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        return view('admin.pages.administration.role.index', [
            'roles' => Role::orderBy('id','DESC')
            ->where(function ($q) use ($request){
                $q->where('name','LIKE','%'.$request->s.'%');
            })
            ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $permissions = [];
        foreach($this->arr as $key => $value)
        {
            $permissions[$value] = Permission::where('value',$value)->get()->toArray();
        }
        return view('admin.pages.administration.role.create', compact(
            'permissions'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:250|unique:roles,name',
        ]);

        $role = Role::create(['name' => $request->name]);

        if ($request->permissions) {
            $permissions = Permission::whereIn('id', $request->permissions)->select('name')->get()->pluck('name')->toArray();
            $role->givePermissionTo($permissions);
//            $role->syncPermissions($permissions);
        }

        return redirect()->route('admin.administration.role.index')
                ->withSuccess('New role is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role): View
    {
        $rolePermissions = Permission::join("role_has_permissions","permission_id","=","id")
            ->where("role_id",$role->id)
            ->select('name')
            ->get();
        return view('admin.pages.administration.role.show', [
            'role' => $role,
            'rolePermissions' => $rolePermissions
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        if($role->name=='Super Admin'){
            return back()->with('success','Super Admin role cannot be editable');
        }

        $rolePermissions = DB::table("role_has_permissions")->where("role_id",$role->id)
        ->get()
        ->pluck('permission_id')
        ->toArray();
        $permissions = [];
        foreach($this->arr as $key => $value)
        {
            $permissions[$value] = Permission::where('value',$value)->get()->toArray();
        }

        return view('admin.pages.administration.role.edit', compact(
            'role',
            'rolePermissions',
            'permissions',
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role): RedirectResponse
    {
        $input = $request->only('name');

        $role->update($input);

        if ($request->permissions) {
            $permissions = Permission::whereIn('id', $request->permissions)->select('name')->get()->pluck('name')->toArray();
            $role->syncPermissions($permissions);
        }
        else
        {
            $role->syncPermissions([]);
        }
        return redirect()->route('admin.administration.role.index')
                ->withSuccess('Role is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role): RedirectResponse
    {
        if($role->name=='Super Admin'){
            return back()->with('success','Super Admin role cannot be deleteable');
        }
        // if(auth()->user()->hasRole($role->name)){
        //     abort(403, 'CAN NOT DELETE SELF ASSIGNED ROLE');
        // }
        $role->delete();
        $role->syncPermissions([]);
        return redirect()->route('admin.administration.role.index')
                ->withSuccess('Role is deleted successfully.');
    }

    public function audit($id)
    {
        $data = Audit::with('user:id,nameEn,nameAr')
        ->orWhere(function ($query) use ($id) {
            $query->where('auditable_id', $id)
            ->where('auditable_type',Role::class);
        })
        ->orderBy('created_at','DESC')
        ->paginate(10);

        $name = 'Role';

        return view('admin.pages.administration.audit.index', compact('data','name'));
    }
}
