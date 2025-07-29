<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Audit;
use App\Models\Role;
use App\Models\Request;
use App\Repositories\Request\RequestInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Validator;

class RequestController extends Controller
{
    protected $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
        $this->middleware('auth');
        // $this->middleware('permission:view-request', ['only' => ['index']]);
        // $this->middleware('permission:edit-request', ['only' => ['edit','update']]);
        // $this->middleware('permission:audit-request', ['only' => ['audit']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->request->paginateWithOrder('created_at', 'DESC', 12);
        foreach ($data as $key => $value) {
            $meta = json_decode($value->meta, true);
            foreach ($meta as $key2 => $value2) {
                $data[$key][$key2] = $value2;
            }
        }
        return view('admin.pages.request.request.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

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
        $data = $this->request->show($id);

        $meta = json_decode($data->meta, true) ?? [];

        foreach ($meta as $key2 => $value2) {
            $data[$key2] = $value2;
        }
        // dd($data);

        return view('admin.pages.request.request.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function requestFormSubmit(HttpRequest $request)
    {

        $request->validate([
            'requestDate' => 'required|max:255',
            'requestId' => 'nullable|max:255',
            'requestType' => 'required',
            'applicantName' => 'required',
            'applicantContactNumber' => 'nullable|max:255',
            'applicantEmail' => 'nullable|max:255',
            'department' => '',
            'newRequest' => '',
            'modificationRequestOfPreviousDesign' => '',
            'deliveryDate' => '',
            'justificationForTheUrgentRequest' => '',
            'purposeOfTheRequest' => '',
            'requestType' => '',
            'brief' => '',
            'areYouEmployee' => '',
        ],);
    }


    public function changRequestSubmit(HttpRequest $request)
    {
        $request->validate([
            'namechange' => 'required',
            'nameMaker' => 'required',
            'nameChecker' => 'required',
            'brief' => 'required',
            'risks' => 'required|in:1,2,3',
            'scenarios' => 'required',
            'process' => 'required',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'department' => 'required',
            'signature' => 'required',
            'aprDepartment' => 'required',
            'aprSignature' => 'required',
            'cancel' => 'required',
            'completed' => 'required',
            'postponed' => 'required',
            'fallBack' => 'required',
        ]);
    }


    public function itRequestSubmit(HttpRequest $request)
    {
        $request->validate([
            'fullname' => 'required',
            'empID' => 'required',
            'department' => 'required',
            'jobTitle' => 'required',
            'contact' => 'required',
            'administration' => 'required',
            'status' => '',
            'equipment' => '',
            'applications' => '',
            'communication' => '',
            'addtional' => '',
            's_name' => 'required',
            's_job' => 'required',
            's_sign' => 'required',
            's_date' => 'required',
            'supportSector' => '',
            'comments' => '',
            'date' => 'required|date',
            'signature' => '',
            'acknowledgment_name' => '',
            'acknowledgment_job' => '',
            'acknowledgment_management' => '',
            'acknowledgment_date' => '',
            'acknowledgment_Signature' => '',
            'IS_name' => '',
            'IS_title' => '',
            'IS_management' => '',
            'IS_date' => '',
            'IS_sign' => '',
            'infor_name' => '',
            'infor_job' => '',
            'infor_date' => '',
            'infor_sign' => '',
            'infor_comments' => '',
        ]);
    }



    public function update(HttpRequest $request, string $id)
    {
        try {
            $type = $request->input('tab');

            switch ($type) {
                case 'graphicDesing':
                    $this->requestFormSubmit($request);
                    break;
                case 'changeReq':
                    $this->changRequestSubmit($request);
                    break;
                case 'ItForm':
                    $this->itRequestSubmit($request);
                    break;
                default:
            }

            // $this->requestFormSubmit($request);

            // Fetch existing data
            $existing = $this->request->show($id);
            $existingMeta = json_decode($existing->meta ?? '{}', true);

            // Get new input and merge
            $newMeta = $request->except(['_token', '_method', 'requestId']);
            $mergedMeta = array_merge($existingMeta, $newMeta);

            $requestData = [
                'requestId' => $request->requestId,
                'meta' => json_encode($mergedMeta),
                'type' => $type,
            ];

            // Update logic
            $this->request->update($id, $requestData);

            return redirect()
                ->route('admin.request.request.index')
                ->with('success', 'Request updated successfully.');
        } catch (\Throwable $th) {
            return redirect()
                ->route('admin.request.request.index')
                ->with('error', $th->getMessage());
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $request = $this->request->show($id);

        if ($request->hasRole('Super Admin')) {
            return back()->with('error', 'Super Admin request role cannot be deleteable');
        }

        $request->syncRoles([]);
        $request->syncPermissions([]);
        $this->request->destroy($id);
        return redirect()->route('admin.request.request.index')->with('success', 'request deleted successfully.');
    }

    public function audit($id)
    {
        $data = Audit::with('request:id,nameEn,nameAr,lnameEn,lnameAr')
            ->orWhere(function ($query) use ($id) {
                $query->where('auditable_id', $id)
                    ->where('auditable_type', request::class);
            })
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $name = 'request';

        return view('admin.pages.request.audit.index', compact('data', 'name'));
    }
}
