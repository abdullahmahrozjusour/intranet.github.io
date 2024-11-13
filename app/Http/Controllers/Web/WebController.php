<?php

namespace App\Http\Controllers\Web;

use App\Constants\Type;
use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Repositories\MissionVision\MissionVisionInterface;
use App\Repositories\Announcement\AnnouncementInterface;
use App\Repositories\CeoMessage\CeoMessageInterface;
use App\Repositories\Contact\ContactInterface;
use App\Repositories\Director\DirectorInterface;
use App\Repositories\DownloadCenter\DownloadCenterInterface;
use App\Repositories\Event\EventInterface;
use App\Repositories\Link\LinkInterface;
use App\Repositories\Modal\ModalInterface;
use App\Repositories\UsefulContact\UsefulContactInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WebController extends Controller
{
    protected $modal;
    protected $link;
    protected $event;
    protected $announcement;
    protected $missionVision;
    protected $director;
    protected $useful;
    protected $contact;
    protected $download;
    protected $ceoMessage;

    public function __construct(
        ModalInterface $modal,
        LinkInterface $link,
        EventInterface $event,
        AnnouncementInterface $announcement,
        MissionVisionInterface $missionVision,
        DirectorInterface $director,
        UsefulContactInterface $useful,
        ContactInterface $contact,
        DownloadCenterInterface $download,
        CeoMessageInterface $ceoMessage
    )
    {
        $this->modal = $modal;
        $this->link = $link;
        $this->event = $event;
        $this->announcement = $announcement;
        $this->missionVision = $missionVision;
        $this->director = $director;
        $this->useful = $useful;
        $this->contact = $contact;
        $this->download = $download;
        $this->ceoMessage = $ceoMessage;
    }

    public function index()
    {
        $data = [];

        $modalType = [Type::TYPE_POLICIES, Type::TYPE_PROCEDURES];
        $columnType = 'type';
        foreach ($modalType as $key => $value) {
            $data[$value] = $this->modal->getModalPage($columnType,$value);
        }

        $data['ceoMessage'] = $this->ceoMessage->where(['type'=>Type::TYPE_CEO_MESSAGE]);

        $columnStatus = 'status';
        $statusActive = Status::STATUS_ACTIVE;
        $data['links'] = $this->link->where([$columnStatus=>$statusActive]);

        $columnDate = 'date';
        $columnTime = 'time';
        $currentDate = Carbon::now()->format('Y-m-d');
        $currentTime = Carbon::now()->format('H:i:s');
        $data['events'] = $this->event->getUpComingEvents($columnDate,$currentDate,$columnTime,$currentTime,$columnStatus,$statusActive);

        $data['announcements'] = $this->announcement->getUpComingAnnouncements($columnDate,$currentDate,$columnStatus,$statusActive,$columnType);

        return view('pages.index',compact('data'));
    }

    public function organization()
    {
        return view('pages.organization');
    }

    public function ourMission()
    {
        $relation = ['data'];
        $data = $this->missionVision->getOurMissionVisionData($relation);
        return view('pages.our-mission',compact('data'));
    }

    public function boardOfDirector()
    {
        $relation = ['data'];

        $data = $this->director->getOurDirectorDataWithCount($relation,'data')->toArray();

        $data['data'] = array_chunk($data['data'], 2);

        return view('pages.directors',compact('data'));
    }

    public function usefulContacts()
    {
        $columnStatus = 'status';
        $statusActive = Status::STATUS_ACTIVE;
        $data['useful'] = $this->useful->where([$columnStatus=>$statusActive]);
        $data['countries'] = Country::orderBy('name','ASC')->get()->toArray();
        return view('pages.usefull-contacts',compact('data'));
    }

    public function downloadCenter()
    {
        $columnStatus = 'status';
        $statusActive = Status::STATUS_ACTIVE;
        $data = $this->download->whereWithPaginateAndOrderByCreatedDESC([$columnStatus=>$statusActive],18);
        return view('pages.download-center',compact('data'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email|max:255',
            'phone'=>'required',
            'subject'=>'nullable|max:255',
            'message'=>'required'
        ]);

        $data = $this->contact->store($request->all());
        return back()->with('success','General Inquiry submitted successfully');
    }
}
