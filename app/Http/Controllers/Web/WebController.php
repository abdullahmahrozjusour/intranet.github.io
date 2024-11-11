<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\Modal\ModalInterface;
use Illuminate\Http\Request;

class WebController extends Controller
{
    protected $modal;

    public function __construct(ModalInterface $modal)
    {
        $this->modal = $modal;
    }

    public function index(){

        $ceoMessage = $this->modal->getCeoMessage();
        return view('pages.index',compact('ceoMessage'));
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
