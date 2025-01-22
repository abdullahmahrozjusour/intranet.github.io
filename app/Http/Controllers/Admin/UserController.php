<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Audit;
use App\Models\Role;
use App\Models\User;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
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
    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
        $this->middleware('auth');
        $this->middleware('permission:view-user', ['only' => ['index']]);
        $this->middleware('permission:create-user', ['only' => ['create','store']]);
        $this->middleware('permission:edit-user', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-user', ['only' => ['destroy']]);
        $this->middleware('permission:audit-user', ['only' => ['audit']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->user->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.administration.user.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = [];
        foreach($this->arr as $key => $value)
        {
            $permissions[$value] = Permission::where('value',$value)->get()->toArray();
        }
        return view('admin.pages.administration.user.create',['roles' => Role::pluck('name')->all(),'permissions'=>$permissions]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameEn'=>'required|max:255', //|alpha_num
            'nameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'lnameEn'=>'required|max:255', //|alpha_num
            'lnameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'email'=>'required|email|unique:users,email|max:255',
            'phone'=>'required|max:255',
            'status'=>'required',
            'password'=>['required','confirmed',
                Password::min(8)
                ->max(255)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
            ],
        ],
        // [
        //     'nameAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        // ]
        );
        $requestData = [
            'nameEn'=>$request->nameEn,
            'nameAr'=>$request->nameAr,
            'lnameEn'=>$request->lnameEn,
            'lnameAr'=>$request->lnameAr,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'status'=>$request->status,
            'password'=>Hash::make($request->password)
        ];
        $data = $this->user->store($requestData);
        $data->assignRole($request->roles);
        if ($request->permissions) {
            $permissions = Permission::whereIn('id', $request->permissions)->select('name')->get()->pluck('name')->toArray();
            $data->givePermissionTo($permissions);
        }
        return redirect()->route('admin.administration.user.index')->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->user->show($id);

        if($data->hasRole('Super Admin')){
            return back()->with('error','Super Admin user role cannot be editable');
        }

        $userPermissions = DB::table("model_has_permissions")->where("model_id",$data->id)
        ->get()
        ->pluck('permission_id')
        ->toArray();
        $permissions = [];
        foreach($this->arr as $key => $value)
        {
            $permissions[$value] = Permission::where('value',$value)->get()->toArray();
        }
        return view('admin.pages.administration.user.edit', [
            'data' => $data,
            'roles' => Role::get()->pluck('name')->toArray(),
            'userRoles' => $data->roles()->get()->pluck('name')->toArray(),
            'permissions' => $permissions,
            'userPermissions'=> $userPermissions
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $this->user->show($id);
        $password = '';
        if($request->password){
            $password = ['sometimes','confirmed',
                Password::min(8)
                ->max(255)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
            ];
        }
        $request->validate([
            'nameEn'=>'required|max:255', //|alpha_num
            'nameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'lnameEn'=>'required|max:255', //|alpha_num
            'lnameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'email'=>'required|max:255|email|unique:users,email,'.$id,
            'phone'=>'required|max:255',
            'status'=>'required',
            'password'=>$password
        ],
        // [
        //     'nameAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        // ]
        );
        $requestData = [
            'nameEn'=>$request->nameEn,
            'nameAr'=>$request->nameAr,
            'lnameEn'=>$request->lnameEn,
            'lnameAr'=>$request->lnameAr,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'status'=>$request->status,
            'password'=>$request->password ? Hash::make($request->password) : $data->password
        ];
        $data = $this->user->update($id,$requestData);
        $data->syncRoles($request->roles);
        if ($request->permissions) {
            $permissions = Permission::whereIn('id', $request->permissions)->select('name')->get()->pluck('name')->toArray();
            $data->syncPermissions($permissions);
        }
        else
        {
            $data->syncPermissions([]);
        }
        return redirect()->route('admin.administration.user.index')->with('success','User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = $this->user->show($id);

        if($user->hasRole('Super Admin')){
            return back()->with('error','Super Admin user role cannot be deleteable');
        }

        $user->syncRoles([]);
        $user->syncPermissions([]);
        $this->user->destroy($id);
        return redirect()->route('admin.administration.user.index')->with('success','User deleted successfully.');
    }

    public function audit($id)
    {
        $data = Audit::with('user:id,nameEn,nameAr')
        ->orWhere(function ($query) use ($id) {
            $query->where('auditable_id', $id)
            ->where('auditable_type',User::class);
        })
        ->orderBy('created_at','DESC')
        ->paginate(10);

        $name = 'User';

        return view('admin.pages.administration.audit.index', compact('data','name'));
    }
}
