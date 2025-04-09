<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Audit;
use App\Models\News;
use App\Repositories\News\NewsInterface;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $news;

    public function __construct(NewsInterface $news)
    {
        $this->news = $news;
        $this->middleware('auth');
        $this->middleware('permission:view-news', ['only' => ['index']]);
        $this->middleware('permission:create-news', ['only' => ['create','store']]);
        $this->middleware('permission:edit-news', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-news', ['only' => ['destroy']]);
        $this->middleware('permission:audit-news', ['only' => ['audit']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->news->paginateWithOrder('created_at','DESC',12);
        return view('admin.pages.home.news.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.home.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titleEn'=>'required|max:255', //|alpha_num
            'titleAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'date'=>'required',
            'link'=>'required|url',
            'image'=>'required|max:2048|mimes:jpg,jpeg,svg,webp,png', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        );
        $file = NULL;
        if($request->hasFile('image')){
            $file = ImageHelper::uploadDocument($request->file('image'),"uploads/news");
        }
        $requestData = [
            'titleEn'=>$request->titleEn,
            'titleAr'=>$request->titleAr,
            'date'=>$request->date,
            'link'=>$request->link,
            'status'=>$request->status,
            'image'=>$file
        ];
        $data = $this->news->store($requestData);
        return redirect()->route('admin.home.news.index')->with('success','News created successfully.');
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
        $data = $this->news->show($id);
        return view('admin.pages.home.news.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titleEn'=>'required|max:255', //|alpha_num
            'titleAr'=>'nullable|max:255', //|regex:/^[\p{Arabic}0-9\s-]+$/u
            'status'=>'required',
            'date'=>'required',
            'link'=>'required|url',
            'image'=>'required|max:2048|mimes:jpg,jpeg,svg,webp,png', //|regex:/^[\p{Arabic}0-9\s-]+$/u
        ],
        );
        $file = NULL;
        if($request->hasFile('image')){
            $file = ImageHelper::uploadDocument($request->file('image'),"uploads/news");
        }
        $requestData = [
            'titleEn'=>$request->titleEn,
            'titleAr'=>$request->titleAr,
            'date'=>$request->date,
            'link'=>$request->link,
            'status'=>$request->status,
            'image'=>$file
        ];
        $data = $this->news->update($id,$requestData);
        return redirect()->route('admin.home.news.index')->with('success','News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->news->destroy($id);
        return redirect()->route('admin.home.news.index')->with('success','News deleted successfully.');
    }

    public function audit($id)
    {
        $data = Audit::with('user:id,nameEn,nameAr,lnameEn,lnameAr')
        ->orWhere(function ($query) use ($id) {
            $query->where('auditable_id', $id)
            ->where('auditable_type',News::class);
        })
        ->orderBy('created_at','DESC')
        ->paginate(10);

        $name = 'News';

        return view('admin.pages.administration.audit.index', compact('data','name'));
    }
}
