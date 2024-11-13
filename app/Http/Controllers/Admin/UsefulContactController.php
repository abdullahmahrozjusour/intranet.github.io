<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Repositories\UsefulContact\UsefulContactInterface;
use Illuminate\Http\Request;

class UsefulContactController extends Controller
{
    protected $usefulContact;

    public function __construct(UsefulContactInterface $usefulContact)
    {
        $this->usefulContact = $usefulContact;
        $this->middleware('auth');
        $this->middleware('permission:view-useful-contact', ['only' => ['index']]);
        $this->middleware('permission:create-useful-contact', ['only' => ['create','store']]);
        $this->middleware('permission:edit-useful-contact', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-useful-contact', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->usefulContact->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.administration.usefulContact.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.administration.usefulContact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameEn'=>'required|max:255', //|alpha_num
            'nameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'email'=>'required|max:255|email',
            'phone'=>'required|max:255',
            'addressEn'=>'required', //|alpha_num
            'addressAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'nameAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'addressAr.regex'=>'The address ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->usefulContact->store($request->all());
        return redirect()->route('admin.administration.usefulContact.index')->with('success','Useful Contact created successfully.');
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
        $data = $this->usefulContact->show($id);
        return view('admin.pages.administration.usefulContact.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nameEn'=>'required|max:255', //|alpha_num
            'nameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'email'=>'required|max:255|email',
            'phone'=>'required|max:255',
            'addressEn'=>'required', //|alpha_num
            'addressAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'nameAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'addressAr.regex'=>'The address ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->usefulContact->update($id,$request->all());
        return redirect()->route('admin.administration.usefulContact.index')->with('success','Useful Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->usefulContact->destroy($id);
        return redirect()->route('admin.administration.usefulContact.index')->with('success','Useful Contact deleted successfully.');
    }
}
