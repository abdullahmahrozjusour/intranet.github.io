<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Link\LinkInterface;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    protected $link;

    public function __construct(LinkInterface $link)
    {
        $this->link = $link;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->link->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.configuration.link.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.configuration.link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titleEn'=>'required|max:255', //|alpha_num
            'titleAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'link'=>'required|url',
            'status'=>'required',
        ],
        // [
        //     'titleAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        // ]
        );
        $data = $this->link->store($request->all());
        return redirect()->route('admin.configuration.link.index')->with('success','Link created successfully.');
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
        $data = $this->link->show($id);
        return view('admin.pages.configuration.link.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titleEn'=>'required|max:255', //|alpha_num
            'titleAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'link'=>'required|url',
            'status'=>'required',
        ],
        // [
        //     'titleAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        // ]
        );
        $data = $this->link->update($id,$request->all());
        return redirect()->route('admin.configuration.link.index')->with('success','Link updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->link->destroy($id);
        return redirect()->route('admin.configuration.link.index')->with('success','Link deleted successfully.');
    }
}
