<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Repositories\Organization\OrganizationInterface;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    protected $organization;

    public function __construct(OrganizationInterface $organization)
    {
        $this->organization = $organization;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->organization->getAllDataWithRelation('parent','created_at','DESC',12);
        return view('admin.pages.configuration.organization.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $collection = $this->organization->index();
        return view('admin.pages.configuration.organization.create',compact('collection'));
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
            'parentName'=>'required',
            'designationEn'=>'required|max:255', //|alpha_num
            'designationAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'image'=>'required|max:2048|mimes:jpg,svg,webp,png,jpeg', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'nameAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'designationAr.regex'=>'The designation ar field must only contain arabic letters and numbers.'
        // ]
        );
        $file = NULL;
        if($request->hasFile('image')){
            $file = ImageHelper::uploadDocument($request->file('image'),"uploads/picture");
        }
        $requestData = [
            'nameEn'=>$request->nameEn,
            'nameAr'=>$request->nameAr,
            'status'=>$request->status,
            'parentId'=>$request->parentName,
            'designationEn'=>$request->designationEn,
            'designationAr'=>$request->designationAr,
            'image'=>$file
        ];
        $data = $this->organization->store($requestData);
        return redirect()->route('admin.configuration.organization.index')->with('success','Organization created successfully.');
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
        $data = $this->organization->show($id);
        $collection = $this->organization->index();
        return view('admin.pages.configuration.organization.edit',compact('data','collection'));
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
            'parentName'=>'required',
            'designationEn'=>'required|max:255', //|alpha_num
            'designationAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'image'=>'required|max:2048|mimes:jpg,svg,webp,png,jpeg', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'nameAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'designationAr.regex'=>'The designation ar field must only contain arabic letters and numbers.'
        // ]
        );
        $file = NULL;
        if($request->hasFile('image')){
            $file = ImageHelper::uploadDocument($request->file('image'),"uploads/picture");
        }
        $requestData = [
            'nameEn'=>$request->nameEn,
            'nameAr'=>$request->nameAr,
            'status'=>$request->status,
            'parentId'=>$request->parentName,
            'designationEn'=>$request->designationEn,
            'designationAr'=>$request->designationAr,
            'image'=>$file
        ];
        $data = $this->organization->update($id,$requestData);
        return redirect()->route('admin.configuration.organization.index')->with('success','Organization updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->organization->destroy($id);
        return redirect()->route('admin.configuration.organization.index')->with('success','Organization deleted successfully.');
    }
}
