<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Type;
use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Repositories\Director\DirectorInterface;
use App\Repositories\PageData\PageDataInterface;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    protected $director;
    protected $pageData;

    public function __construct(DirectorInterface $director, PageDataInterface $pageData)
    {
        $this->director = $director;
        $this->pageData = $pageData;
        $this->middleware('auth');
        $this->middleware('permission:view-board-of-director', ['only' => ['index']]);
        $this->middleware('permission:create-board-of-director', ['only' => ['create','store']]);
        $this->middleware('permission:edit-board-of-director', ['only' => ['edit','update']]);
        $this->middleware('permission:update-board-of-director', ['only' => ['updateData']]);
        $this->middleware('permission:delete-board-of-director', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = $this->director->where(['type'=>Type::TYPE_DIRECTOR]);
        $collectionId = $collection[0]->id;
        $data = $this->pageData->paginateWithOrderWhere('created_at','DESC',12,'pageId',$collectionId);
        return view('admin.pages.operation.director.index',compact('data','collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageId = $this->director->where(['type'=>'Director'])[0]->id;
        return view('admin.pages.operation.director.create',compact('pageId'));
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
            'nameEn'=>'required|max:255', //|alpha_num
            'nameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'designationEn'=>'required|max:255', //|alpha_num
            'designationAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'descEn'=>'nullable', //|alpha_num
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
            'nameEn'=>$request->nameEn,
            'nameAr'=>$request->nameAr,
            'designationEn'=>$request->designationEn,
            'designationAr'=>$request->designationAr,
            'status'=>$request->status,
            'descEn'=>$request->descEn,
            'descAr'=>$request->descAr,
        ];
        $data = $this->pageData->store($requestData);
        return redirect()->route('admin.operation.director.index')->with('success','Board of Director Data created successfully.');
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
        $pageId = $this->director->where(['type'=>'Director'])[0]->id;
        return view('admin.pages.operation.director.edit',compact('data','pageId'));
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
            'nameEn'=>'required|max:255', //|alpha_num
            'nameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'designationEn'=>'required|max:255', //|alpha_num
            'designationAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'descEn'=>'nullable', //|alpha_num
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
            'nameEn'=>$request->nameEn,
            'nameAr'=>$request->nameAr,
            'designationEn'=>$request->designationEn,
            'designationAr'=>$request->designationAr,
            'status'=>$request->status,
            'descEn'=>$request->descEn,
            'descAr'=>$request->descAr,
        ];
        $data = $this->pageData->update($id,$requestData);
        return redirect()->route('admin.operation.director.index')->with('success','Board of Director Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->pageData->destroy($id);
        return redirect()->route('admin.operation.director.index')->with('success','Board of Director Data deleted successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateData(Request $request, $id)
    {

        $request->validate([
            'titleEn'=>'required', //|alpha_num
            'titleAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'shortDescEn'=>'required|max:255', //|alpha_num
            'shortDescAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'descEn'=>'required', //|alpha_num
            'descAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'titleAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->director->update($id,$request->all());
        return redirect()->route('admin.operation.director.index')->with('success','Board of Director updated successfully.');
    }
}
