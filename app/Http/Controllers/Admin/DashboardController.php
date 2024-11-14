<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Audit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:audit-view', ['only' => ['audit']]);
    }

    public function index() {
        return view('admin.dashboard');
    }

    public function audit($id,$name){
        $data = Audit::find($id);

        $url = url()->previous();
        return view('admin.pages.administration.audit.show',compact('data','name','url'));
    }
}
