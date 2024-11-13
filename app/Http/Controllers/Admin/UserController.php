<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Repositories\User\UserInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
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
        return view('admin.pages.administration.user.create');
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
        return view('admin.pages.administration.user.edit',compact('data'));
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
        return redirect()->route('admin.administration.user.index')->with('success','User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->user->destroy($id);
        return redirect()->route('admin.administration.user.index')->with('success','User deleted successfully.');
    }
}
