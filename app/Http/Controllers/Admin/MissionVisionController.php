<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Repositories\MissionVision\MissionVisionInterface;
use App\Repositories\PageData\PageDataInterface;
use Illuminate\Http\Request;

class MissionVisionController extends Controller
{
    protected $missionVision;
    protected $pageData;

    public function __construct(MissionVisionInterface $missionVision, PageDataInterface $pageData)
    {
        $this->missionVision = $missionVision;
        $this->pageData = $pageData;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = $this->missionVision->where(['type'=>'Mission Vision']);
        $collectionId = $collection[0]->id;
        $data = $this->pageData->paginateWithOrderWhere('created_at','DESC',12,'pageId',$collectionId);
        return view('admin.pages.operation.missionVision.index',compact('data','collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageId = $this->missionVision->where(['type'=>'Mission Vision'])[0]->id;
        return view('admin.pages.operation.missionVision.create',compact('pageId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pageId'=>'required',
            'titleEn'=>'required|max:255', //|alpha_num
            'titleAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'descEn'=>'required', //|alpha_num
            'descAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'logo'=>'required|max:2048|mimes:jpg,svg,webp,png,jpeg', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'titleAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $file = NULL;
        if($request->hasFile('logo')){
            $file = ImageHelper::uploadDocument($request->file('logo'),"uploads/pages");
        }
        $requestData = [
            'pageId'=>$request->pageId,
            'logo'=>$file,
            'titleEn'=>$request->titleEn,
            'titleAr'=>$request->titleAr,
            'status'=>$request->status,
            'descEn'=>$request->descEn,
            'descAr'=>$request->descAr,
        ];
        $data = $this->pageData->store($requestData);
        return redirect()->route('admin.operation.missionVision.index')->with('success','Mission & Vision Data created successfully.');
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
        $data = $this->pageData->show($id);
        $pageId = $this->missionVision->where(['type'=>'Mission Vision'])[0]->id;
        return view('admin.pages.operation.missionVision.edit',compact('data','pageId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $logo = 'nullable|max:2048|mimes:jpg,svg,webp,png,jpeg';
        if(empty($request->logoVal)){
            $logo = 'required|max:2048|mimes:jpg,svg,webp,png,jpeg';
        }

        $request->validate([
            'pageId'=>'required',
            'titleEn'=>'required|max:255', //|alpha_num
            'titleAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'descEn'=>'required', //|alpha_num
            'descAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'logo'=>$logo, //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'titleAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $file = NULL;
        if($request->hasFile('logo')){
            $file = ImageHelper::uploadDocument($request->file('logo'),"uploads/pages");
        }
        $requestData = [
            'pageId'=>$request->pageId,
            'logo'=>$file ?? $request->logoVal,
            'titleEn'=>$request->titleEn,
            'titleAr'=>$request->titleAr,
            'status'=>$request->status,
            'descEn'=>$request->descEn,
            'descAr'=>$request->descAr,
        ];
        $data = $this->pageData->update($id,$requestData);
        return redirect()->route('admin.operation.missionVision.index')->with('success','Mission & Vision Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->pageData->destroy($id);
        return redirect()->route('admin.operation.missionVision.index')->with('success','Mission & Vision Data deleted successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateData(Request $request, $id)
    {

        $request->validate([
            'titleEn'=>'required', //|alpha_num
            'titleAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'descEn'=>'required', //|alpha_num
            'descAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'titleAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->missionVision->update($id,$request->all());
        return redirect()->route('admin.operation.missionVision.index')->with('success','Mission & Vision updated successfully.');
    }
}