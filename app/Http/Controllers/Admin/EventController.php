<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Audit;
use App\Models\Event;
use App\Repositories\Event\EventInterface;
use Illuminate\Http\Request;
use App\Jobs\SendNewsletterJob;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{
    protected $event;

    public function __construct(EventInterface $event)
    {
        $this->event = $event;
        $this->middleware('auth');
        $this->middleware('permission:view-event', ['only' => ['index']]);
        $this->middleware('permission:create-event', ['only' => ['create','store']]);
        $this->middleware('permission:edit-event', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-event', ['only' => ['destroy']]);
        $this->middleware('permission:audit-event', ['only' => ['audit']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->event->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.home.event.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.home.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nameEn'=>'required|max:255', //|alpha_num
            'nameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'date'=>'required',
            'time'=>'required',
            'descAr'=>'nullable|max:255', //|alpha_num
            'descAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'nameAr.regex'=>'The name ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $event = $this->event->store($request->all());
        try {
            // SendNewsletterJob::dispatch(
            //     $event->nameEn,
            //     route('home'),
                
            // );
            (new SendNewsletterJob( $event->nameEn. 'Event', route('home')))->handle();
        } catch(\Exception $e) {
            Log::error($e->getMessage());
        }
        return redirect()->route('admin.home.event.index')->with('success','Event created successfully.');
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
        return view('admin.pages.home.event.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nameEn'=>'required|max:255', //|alpha_num
            'nameAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'date'=>'required',
            'time'=>'required',
            'descAr'=>'nullable|max:255', //|alpha_num
            'descAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'nameAr.regex'=>'The name ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $event = $this->event->update($id,$request->all());
        try {
            // SendNewsletterJob::dispatch(
            //     $event->nameEn,
            //     route('home'),
                
            // );
            (new SendNewsletterJob( $event->nameEn. 'Event', route('home')))->handle();
        } catch(\Exception $e) {
            Log::error($e->getMessage());
        }
        return redirect()->route('admin.home.event.index')->with('success','Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->event->destroy($id);
        return redirect()->route('admin.home.event.index')->with('success','Event deleted successfully.');
    }

    public function audit($id)
    {
        $data = Audit::with('user:id,nameEn,nameAr,lnameEn,lnameAr')
        ->orWhere(function ($query) use ($id) {
            $query->where('auditable_id', $id)
            ->where('auditable_type',Event::class);
        })
        ->orderBy('created_at','DESC')
        ->paginate(10);

        $name = 'Event';

        return view('admin.pages.administration.audit.index', compact('data','name'));
    }
}
