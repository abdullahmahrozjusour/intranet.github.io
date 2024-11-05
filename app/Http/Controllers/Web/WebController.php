<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function organization(){
        return view('pages.organization');
    }

    public function ourMission(){
        return view('pages.our-mission');
    }

    public function boardOfDirector(){
        return view('pages.directors');
    }

    public function usefulContacts(){
        return view('pages.usefull-contacts');
    }

    public function downloadCenter(){
        return view('pages.download-center');
    }
}
