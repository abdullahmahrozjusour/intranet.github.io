<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Event\EventInterface;
use Illuminate\Http\Request;

class EventController extends Controller
{
    protected $event;

    public function __construct(EventInterface $event)
    {
        $this->event = $event;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->event->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.configuration.event.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.configuration.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameEn'=>'required', //|alpha_num
            'nameAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'date'=>'required',
            'time'=>'required',
            'descAr'=>'nullable', //|alpha_num
            'descAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'nameAr.regex'=>'The name ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->event->store($request->all());
        return redirect()->route('admin.configuration.event.index')->with('success','Event created successfully.');
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
        $data = $this->event->show($id);
        return view('admin.pages.configuration.event.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nameEn'=>'required', //|alpha_num
            'nameAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'date'=>'required',
            'time'=>'required',
            'descAr'=>'nullable', //|alpha_num
            'descAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'nameAr.regex'=>'The name ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->event->update($id,$request->all());
        return redirect()->route('admin.configuration.event.index')->with('success','Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->event->destroy($id);
        return redirect()->route('admin.configuration.event.index')->with('success','Event deleted successfully.');
    }
}
