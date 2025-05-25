<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Jobs\SendNewsletterJob;
use App\Models\Audit;
use App\Models\UsefulContact;
use App\Repositories\UsefulContact\UsefulContactInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UsefulContactController extends Controller
{
    protected $usefulContact;

    public function __construct(UsefulContactInterface $usefulContact)
    {
        $this->usefulContact = $usefulContact;
        $this->middleware('auth');
        $this->middleware('permission:view-useful-contact', ['only' => ['index']]);
        $this->middleware('permission:create-useful-contact', ['only' => ['create','store']]);
        $this->middleware('permission:edit-useful-contact', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-useful-contact', ['only' => ['destroy']]);
        $this->middleware('permission:audit-useful-contact', ['only' => ['audit']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->usefulContact->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.pages.usefulContact.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.pages.usefulContact.create');
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
            'email'=>'required|max:255|email',
            'phone'=>'required|max:255',
            'addressEn'=>'required', //|alpha_num
            'addressAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'nameAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'addressAr.regex'=>'The address ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->usefulContact->store($request->all());
         try {
            // SendNewsletterJob::dispatch(
            //     $event->nameEn,
            //     route('home'),
                
            // );
            (new SendNewsletterJob( $data->nameEn. 'Contact', route('home')))->handle();
        } catch(\Exception $e) {
            Log::error($e->getMessage());
        }
        return redirect()->route('admin.pages.usefulContact.index')->with('success','Useful Contact created successfully.');
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
        $data = $this->usefulContact->show($id);
        return view('admin.pages.pages.usefulContact.edit',compact('data'));
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
            'email'=>'required|max:255|email',
            'phone'=>'required|max:255',
            'addressEn'=>'required', //|alpha_num
            'addressAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'nameAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'addressAr.regex'=>'The address ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->usefulContact->update($id,$request->all());
        try {
            // SendNewsletterJob::dispatch(
            //     $event->nameEn,
            //     route('home'),
                
            // );
            (new SendNewsletterJob( $data->nameEn. 'Contact', route('home')))->handle();
        } catch(\Exception $e) {
            Log::error($e->getMessage());
        }
        return redirect()->route('admin.pages.usefulContact.index')->with('success','Useful Contact updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->usefulContact->destroy($id);
        return redirect()->route('admin.pages.usefulContact.index')->with('success','Useful Contact deleted successfully.');
    }

    public function audit($id)
    {
        $data = Audit::with('user:id,nameEn,nameAr,lnameEn,lnameAr')
        ->orWhere(function ($query) use ($id) {
            $query->where('auditable_id', $id)
            ->where('auditable_type',UsefulContact::class);
        })
        ->orderBy('created_at','DESC')
        ->paginate(10);

        $name = 'Useful Contact';

        return view('admin.pages.administration.audit.index', compact('data','name'));
    }
}
