<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Modal\ModalInterface;
use Illuminate\Http\Request;

class ModalController extends Controller
{
    protected $modal;

    public function __construct(ModalInterface $modal)
    {
        $this->modal = $modal;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->modal->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.configuration.modal.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.configuration.modal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titleEn'=>'required', //|alpha_num
            'titleAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'descAr'=>'nullable', //|alpha_num
            'descAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'titleAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->modal->store($request->all());
        return redirect()->route('admin.configuration.modal.index')->with('success','Modal Page created successfully.');
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
        $data = $this->modal->show($id);
        return view('admin.pages.configuration.modal.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titleEn'=>'required', //|alpha_num
            'titleAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'descAr'=>'nullable', //|alpha_num
            'descAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'titleAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->modal->update($id,$request->all());
        return redirect()->route('admin.configuration.modal.index')->with('success','Modal Page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->modal->destroy($id);
        return redirect()->route('admin.configuration.modal.index')->with('success','Modal Page deleted successfully.');
    }
}
