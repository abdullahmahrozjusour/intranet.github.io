<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Audit;
use App\Models\Subscriber;
use App\Repositories\Subscriber\SubscriberInterface;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    protected $Subscriber;

    public function __construct(SubscriberInterface $Subscriber)
    {
        $this->Subscriber = $Subscriber;
        $this->middleware('auth');
        $this->middleware('permission:view-subscriber', ['only' => ['index']]);
        // $this->middleware('permission:create-Subscriber', ['only' => ['create','store']]);
        // $this->middleware('permission:edit-Subscriber', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-subscriber', ['only' => ['destroy']]);
        $this->middleware('permission:audit-subscriber', ['only' => ['audit']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->Subscriber->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.administration.subscriber.index',compact('data'));
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
        $this->Subscriber->destroy($id);
        return redirect()->route('admin.administration.subscriber.index')->with('success','Subscriber deleted successfully.');
    }

    public function audit($id)
    {
        $data = Audit::with('user:id,nameEn,nameAr,lnameEn,lnameAr')
        ->orWhere(function ($query) use ($id) {
            $query->where('auditable_id', $id)
            ->where('auditable_type',Subscriber::class);
        })
        ->orderBy('created_at','DESC')
        ->paginate(10);

        $name = 'Subscriber';

        return view('admin.pages.administration.audit.index', compact('data','name'));
    }
}
