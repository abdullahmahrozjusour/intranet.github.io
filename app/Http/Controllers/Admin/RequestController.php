<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Audit;
use App\Models\Role;
use App\Models\Request;
use App\Repositories\Request\RequestInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Permission;

class RequestController extends Controller
{
    protected $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
        $this->middleware('auth');
        $this->middleware('permission:view-request', ['only' => ['index']]);
        $this->middleware('permission:edit-request', ['only' => ['edit','update']]);
        $this->middleware('permission:audit-request', ['only' => ['audit']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->request->paginateWithOrder('created_at','DESC',12);
        foreach($data as $key => $value) {
            $meta = json_decode($value->meta, true)[0];
            foreach( $meta as $key2 => $value2) {
                $data[$key][$key2] = $value2;
            }
        }
        return view('admin.pages.request.request.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        $data = $this->request->show($id);
        $meta = json_decode($data->meta, true)[0];
        foreach( $meta as $key2 => $value2) {
            $data[$key2] = $value2;
        }
        // echo "<pre>";
        // print_r($data);die();

        return view('admin.pages.request.request.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $this->request->show($id);
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
            'email'=>'required|max:255|email|unique:requests,email,'.$id,
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
        $data = $this->request->update($id,$requestData);
        $data->syncRoles($request->roles);
        if ($request->permissions) {
            $permissions = Permission::whereIn('id', $request->permissions)->select('name')->get()->pluck('name')->toArray();
            $data->syncPermissions($permissions);
        }
        else
        {
            $data->syncPermissions([]);
        }
        return redirect()->route('admin.request.request.index')->with('success','request updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $request = $this->request->show($id);

        if($request->hasRole('Super Admin')){
            return back()->with('error','Super Admin request role cannot be deleteable');
        }

        $request->syncRoles([]);
        $request->syncPermissions([]);
        $this->request->destroy($id);
        return redirect()->route('admin.request.request.index')->with('success','request deleted successfully.');
    }

    public function audit($id)
    {
        $data = Audit::with('request:id,nameEn,nameAr,lnameEn,lnameAr')
        ->orWhere(function ($query) use ($id) {
            $query->where('auditable_id', $id)
            ->where('auditable_type',request::class);
        })
        ->orderBy('created_at','DESC')
        ->paginate(10);

        $name = 'request';

        return view('admin.pages.request.audit.index', compact('data','name'));
    }
}
