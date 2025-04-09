<?php

namespace App\Http\Controllers\Admin;

use App\Constants\Type;
use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Audit;
use App\Models\Page;
use App\Repositories\CeoMessage\CeoMessageInterface;
use Illuminate\Http\Request;

class CeoMessageController extends Controller
{
    protected $page;

    public function __construct(CeoMessageInterface $page)
    {
        $this->page = $page;
        $this->middleware('auth');
        $this->middleware('permission:view-ceo-message', ['only' => ['index']]);
        // $this->middleware('permission:create-ceo-message', ['only' => ['create','store']]);
        $this->middleware('permission:edit-ceo-message', ['only' => ['edit','update']]);
        // $this->middleware('permission:delete-ceo-message', ['only' => ['destroy']]);
        $this->middleware('permission:audit-ceo-message', ['only' => ['audit']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = $this->page->where(['type'=>Type::TYPE_CEO_MESSAGE]);
        return view('admin.pages.home.ceoMessage.index',compact('collection'));
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
        $request->validate([
            'titleEn'=>'required', //|alpha_num
            'titleAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'descEn'=>'required', //|alpha_num
            'descAr'=>'nullable', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        // [
        //     'titleAr.regex'=>'The title ar field must only contain arabic letters and numbers.',
        //     'descAr.regex'=>'The desc ar field must only contain arabic letters and numbers.'
        // ]
        );
        $data = $this->page->update($id,$request->all());
        return redirect()->route('admin.home.ceoMessage.index')->with('success','Ceo Message updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }

    public function audit($id)
    {
        $data = Audit::with('user:id,nameEn,nameAr,lnameEn,lnameAr')
        ->orWhere(function ($query) use ($id) {
            $query->where('auditable_id', $id)
            ->where('auditable_type',Page::class);
        })
        ->orderBy('created_at','DESC')
        ->paginate(10);

        $name = 'Ceo Message';

        return view('admin.pages.administration.audit.index', compact('data','name'));
    }
}
