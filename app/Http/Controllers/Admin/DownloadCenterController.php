<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Repositories\DownloadCenter\DownloadCenterInterface;
use Illuminate\Http\Request;

class DownloadCenterController extends Controller
{
    protected $downloadCenter;

    public function __construct(DownloadCenterInterface $downloadCenter)
    {
        $this->downloadCenter = $downloadCenter;
        $this->middleware('auth');
        $this->middleware('permission:view-download-center', ['only' => ['index']]);
        $this->middleware('permission:create-download-center', ['only' => ['create','store']]);
        $this->middleware('permission:edit-download-center', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-download-center', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->downloadCenter->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.configuration.downloadCenter.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.configuration.downloadCenter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameEn'=>'required|max:255', //|alpha_num
            'nameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'usernameEn'=>'required|max:255', //|alpha_num
            'usernameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'document'=>'required|max:2048',
            'status'=>'required',
        ],
        // [
        //     'nameAr.regex'=>'The name ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );

        if($request->hasFile('document')){
            $file = ImageHelper::uploadDocument($request->file('document'),"uploads/document-center");
            $extension = $request->file('document')->getClientOriginalExtension();
            $url = url("storage/uploads/document-center/".$file);
            $requestData = [
                'nameEn'=>$request->nameEn,
                'nameAr'=>$request->nameAr,
                'usernameEn'=>$request->usernameEn,
                'usernameAr'=>$request->usernameAr,
                'document'=>$file,
                'url'=>$url,
                'extension'=>$extension,
                'status'=>$request->status,
            ];
            $data = $this->downloadCenter->store($requestData);
            return redirect()->route('admin.configuration.downloadCenter.index')->with('success','Download Center created successfully.');
        }
        return back()->with('error','No document found');
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
        $data = $this->downloadCenter->show($id);
        return view('admin.pages.configuration.downloadCenter.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nameEn'=>'required|max:255', //|alpha_num
            'nameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'usernameEn'=>'required|max:255', //|alpha_num
            'usernameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'document'=>'required|max:2048',
            'status'=>'required',
        ],
        // [
        //     'nameAr.regex'=>'The name ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );

        if($request->hasFile('document')){
            $file = ImageHelper::uploadDocument($request->file('document'),"uploads/document-center");
            $extension = $request->file('document')->getClientOriginalExtension();
            $url = url("storage/uploads/document-center/".$file);
            $requestData = [
                'nameEn'=>$request->nameEn,
                'nameAr'=>$request->nameAr,
                'usernameEn'=>$request->usernameEn,
                'usernameAr'=>$request->usernameAr,
                'document'=>$file,
                'url'=>$url,
                'extension'=>$extension,
                'status'=>$request->status,
            ];
            $data = $this->downloadCenter->update($id,$requestData);
            return redirect()->route('admin.configuration.downloadCenter.index')->with('success','Download Center updated successfully.');
        }
        return back()->with('error','No document found');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->downloadCenter->destroy($id);
        return redirect()->route('admin.configuration.downloadCenter.index')->with('success','Download Center deleted successfully.');
    }
}
