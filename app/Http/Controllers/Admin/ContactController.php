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
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->contact->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.administration.contact.index',compact('data'));
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
        return redirect()->route('admin.administration.contact.index')->with('success','Contact deleted successfully.');
    }
}
