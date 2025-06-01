<?php

namespace App\Http\Controllers\Web;

use App\Constants\Type;
use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Modal;
use App\Repositories\MissionVision\MissionVisionInterface;
use App\Repositories\Announcement\AnnouncementInterface;
use App\Repositories\CeoMessage\CeoMessageInterface;
use App\Repositories\Contact\ContactInterface;
use App\Repositories\Director\DirectorInterface;
use App\Repositories\DownloadCenter\DownloadCenterInterface;
use App\Repositories\Event\EventInterface;
use App\Repositories\Link\LinkInterface;
use App\Repositories\Modal\ModalInterface;
use App\Repositories\News\NewsInterface;
use App\Repositories\Organization\OrganizationInterface;
use App\Repositories\Request\RequestInterface;
use App\Repositories\UsefulContact\UsefulContactInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    const REQUEST_NUMBER = 'FR-{YYMM}-{000000}';
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
    protected $organization;
    protected $news;
    protected $request;

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
        CeoMessageInterface $ceoMessage,
        OrganizationInterface $organization,
        NewsInterface $news,
        RequestInterface $request,
    ) {
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
        $this->organization = $organization;
        $this->news = $news;
        $this->request = $request;
    }

    public function index()
    {
        $data = [];

        $data['ceoMessage'] = $this->ceoMessage->where(['type' => Type::TYPE_CEO_MESSAGE]);
        $columnType = 'type';

        $columnStatus = 'status';
        $statusActive = Status::STATUS_ACTIVE;
        $data['links'] = $this->link->where([$columnStatus => $statusActive]);

        $columnDate = 'date';
        $columnTime = 'time';
        $currentDate = Carbon::now()->format('Y-m-d');
        $currentTime = Carbon::now()->format('H:i:s');
        $data['events'] = $this->event->getUpComingEvents($columnDate, $currentDate, $columnTime, $currentTime, $columnStatus, $statusActive);

        $data['announcements'] = $this->announcement->getUpComingAnnouncements($columnDate, $currentDate, $columnStatus, $statusActive, $columnType);

        $oneDayBefore = Carbon::now()->subDay()->format('Y-m-d');
        $data['news'] = $this->news->getAllNewNews($columnStatus, $statusActive, $columnDate, $oneDayBefore);

        return view('pages.index', compact('data'));
    }

    public function organization()
    {
        $organ = $this->organization->getSingleDataWithMultiRelation(['children.children.children.children.children.children.children.children.children.children'], 'id', 'DESC');
        $data = [];
        if ($organ) {
            $data = $this->populateData($organ);
        }
        // Define file path
        $filePath = 'public/json/org.json'; // Replace with actual path

        // Delete the existing JSON file if it exists
        if (Storage::exists($filePath)) {
            Storage::delete($filePath);
        }

        // Create a new JSON file and save the data
        Storage::put($filePath, json_encode($data));
        // echo '<pre>'; print_r($data); echo '</pre>'; die();

        return view('pages.organization');
    }

    public function ourMission()
    {
        $relation = ['data'];
        $data = $this->missionVision->getOurMissionVisionData($relation);
        return view('pages.our-mission', compact('data'));
    }

    public function boardOfDirector()
    {
        $relation = ['data'];

        $data = $this->director->getOurDirectorDataWithCount($relation, 'data')->toArray();

        $data['data'] = array_chunk($data['data'], 2);

        return view('pages.directors', compact('data'));
    }

    public function usefulContacts()
    {
        $columnStatus = 'status';
        $statusActive = Status::STATUS_ACTIVE;
        $data['useful'] = $this->useful->where([$columnStatus => $statusActive]);
        $data['countries'] = Country::orderBy('name', 'ASC')->get()->toArray();
        return view('pages.usefull-contacts', compact('data'));
    }

    public function downloadCenter()
    {
        $columnStatus = 'status';
        $statusActive = Status::STATUS_ACTIVE;
        $data = $this->download->whereWithPaginateAndOrderByCreatedDESC([$columnStatus => $statusActive], 18);
        return view('pages.download-center', compact('data'));
    }

    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required',
            'subject' => 'nullable|max:255',
            'message' => 'required'
        ]);

        $data = $this->contact->store($request->all());
        return back()->with('success', 'General Inquiry submitted successfully');
    }

    public function policy($type)
    {
        $modal = Modal::where('type', $type)->where('titleEn', 'Policies')->first();
        return view('pages.policy', compact('modal'));
    }

    public function procedure($type)
    {
        $modal = Modal::where('type', $type)->where('titleEn', 'Procedures')->first();
        return view('pages.procedure', compact('modal'));
    }

    private function populateData($organ)
    {
        $data = [];
        if (config('app.locale') == 'ar') {
            $data['name'] = $organ->nameAr;
            $data['positionName'] = $organ->designationAr;
        } else {
            $data['name'] = $organ->nameEn;
            $data['positionName'] = $organ->designationEn;
        }

        if (file_exists(public_path('storage/uploads/picture/' . $organ->image))) {
            $data['imageUrl'] = url('storage/uploads/picture/' . $organ->image);
        } elseif ($organ->id == 1) {
            $data['imageUrl'] = url('assets/imgs/ceo.png');
        } else {
            $data['imageUrl'] = url('assets/imgs/avatar.png');
        }

        $data['area'] = '';
        $data['profileUrl'] = $data['imageUrl'];
        $data['office'] = '';
        $data['tags'] = '';
        $data['isLoggedUser'] = '';
        $data['unit'] = [];

        // Recursively populate children
        if (isset($organ->children[0])) {
            $data['children'] = [];
            foreach ($organ->children as $child) {
                $data['children'][] = $this->populateData($child); // Recursive call
            }
        }

        return $data;
    }

    public function requestForm($slug = 'graphic-design')
    {
        $totalRequest = $this->request->getLastRequest();
        $requestId = 1001;
        if (isset($totalRequest->id)) {
            $requestId = $requestId + $totalRequest->id;
        }
        $requestIdNumber = str_replace(['{YYMM}', '{000000}'], [Carbon::now()->format('ym'), sprintf('%06d', $requestId)], self::REQUEST_NUMBER);
        if ($slug == 'graphic-design') {
            return view('pages.form', compact('requestIdNumber', 'slug'));
        }
    }

    public function requestFormSubmit(Request $request, $slug)
    {
        $request->validate([
            'requestDate'=>'required|max:255', 
            'requestId'=>'nullable|max:255',
            'requestType'=>'required',
            'applicantName'=>'required',
            'applicantContactNumber'=>'nullable|max:255',
            'applicantEmail'=>'nullable|max:255', 
            'department'=>'',
            'newRequest'=>'',
            'modificationRequestOfPreviousDesign'=>'',
            'deliveryDate'=>'',
            'justificationForTheUrgentRequest'=>'',
            'purposeOfTheRequest'=>'',
            'requestType'=>'',
            'brief'=>'',
            'areYouEmployee'=>'',
        ],);

        try {
            $requestMetaData = $request->except(['_token', 'requestId']);
            $requestData = [
                'requestId' => $request->requestId,
                'meta' => json_encode([$requestMetaData]),
                'type' => $slug,
            ];

            $data = $this->request->store($requestData);
            return back()->with('success', 'Request has submitted successfully');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }
}
