<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Resources\Api\ContactUsResource;
use App\Models\ContactUs;
use App\Repositories\IContactUsRepositories;
use App\Services\ContactUsDatatableService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Throwable;

class ContactUsController extends Controller
{

    use ResponseTrait  ;

    protected $contactUsRepository;

    public function __construct(IContactUsRepositories $contactUsRepository)
    {
        $this->middleware('auth:sanctum');
        $this->contactUsRepository = $contactUsRepository; // Inject the repository
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, ContactUsDatatableService $contactUsDatatableService)
    {
        $this->lang($request);

        if ($request->ajax()) {
            $dataNative = ContactUs::with('sender')->select('*')
                ->orderBy('created_at', 'desc')
                ->orderBy('status', 'asc')->get();

            try {
                return $contactUsDatatableService->handle($request, $dataNative);
            } catch (Throwable $e) {
                return response([
                    'message' => $e->getMessage(),
                ], 500);
            }
        }

        return view('dashboard.pages.contact_us' , ['lang' => app::getLocale()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactUsRequest $request)
    {
        try {
            $contactUsItem = $this->contactUsRepository->create($request->validationData());
            return $this->successResponse('CREATE_ITEM_SUCCESSFULLY', new ContactUsResource($contactUsItem->load('sender')), 201, App::getLocale());
        } catch (\Illuminate\Validation\ValidationException $e) {
            return $this->errorResponse('VETIFICATION_ERRORS', ['error' => $e->errors()], 422, App::getLocale()); // Return validation errors
        }
    }
    public function updateStatus(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'id' => 'required|exists:contact_us,id',  // Validate that the ID exists in your table
            'status' => 'required|in:important,middle,not_important',  // Validate the status
        ]);
        $record = ContactUs::find($request->id);
        $record->status = $request->status;
        $record->save();
        return $this->successResponse('UPDATE_SUCCESS',  [], 201, App::getLocale());
    }

    public function destroy($id)
    {
        try {
            $this->contactUsRepository->delete($id);
            return $this->successResponse('DELETE_SUCCESS',[], 202, App::getLocale())  ;

        }catch (Throwable $e){
            return response([
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    private  function  lang($request){
        $lang = $request->route('lang');
        if ($lang) {
            $validLanguages = ['en','ar'];
            if (in_array($lang, $validLanguages)) {
                app()->setLocale($lang);
            } else {
                app()->setLocale('en');
            }
        }
    }
}
