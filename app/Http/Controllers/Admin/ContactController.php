<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Repositories\Contact\ContactInterface;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contact;

    public function __construct(ContactInterface $contact)
    {
        $this->contact = $contact;
        $this->middleware('auth');
        $this->middleware('permission:view-contact', ['only' => ['index']]);
        // $this->middleware('permission:create-contact', ['only' => ['create','store']]);
        // $this->middleware('permission:edit-contact', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-contact', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->contact->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.pages.contact.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->contact->destroy($id);
        return redirect()->route('admin.pages.contact.index')->with('success','Contact deleted successfully.');
    }
}
