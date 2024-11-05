<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Announcement\AnnouncementInterface;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    protected $announcement;

    public function __construct(AnnouncementInterface $announcement)
    {
        $this->announcement = $announcement;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->announcement->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.configuration.announcement.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.configuration.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titleEn'=>'required', //|alpha_num
            'titleAr'=>'required', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'descAr'=>'nullable', //|alpha_num
            'descAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'titleAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->announcement->store($request->all());
        return redirect()->route('admin.configuration.announcement.index')->with('success','Announcement created successfully.');
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
        $data = $this->announcement->show($id);
        return view('admin.pages.configuration.announcement.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titleEn'=>'required', //|alpha_num
            'titleAr'=>'required', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'descAr'=>'nullable', //|alpha_num
            'descAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'titleAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->announcement->update($id,$request->all());
        return redirect()->route('admin.configuration.announcement.index')->with('success','Announcement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->announcement->destroy($id);
        return redirect()->route('admin.configuration.announcement.index')->with('success','Announcement deleted successfully.');
    }
}
