<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Resources\Api\ContactUsResource;
use App\Models\ContactUs;
use App\Repositories\IContactUsRepositories;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\App;

class ContactUsController extends Controller
{

    use ResponseTrait  ;

    protected $contactUsRepository;

    public function __construct(IContactUsRepositories $contactUsRepository)
    {
        $this->contactUsRepository = $contactUsRepository; // Inject the repository
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
              return $this->successResponse('CREATE_ITEM_SUCCESSFULLY',new ContactUsResource($contactUsItem->load('sender')), 201, App::getLocale())  ;
        } catch (\Illuminate\Validation\ValidationException $e) {
        return $this->errorResponse('VETIFICATION_ERRORS', ['error' => $e->errors()], 422  ,App::getLocale()); // Return validation errors
        }

     }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the fIFriendsRepositoriesorm for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactUsRequest $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
