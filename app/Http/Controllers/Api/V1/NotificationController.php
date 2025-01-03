<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateNotificationRequest;
use App\Http\Resources\Api\NotificationResource;
use App\Models\Notification;
use App\Repositories\INotificationRepositories  ;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    use ResponseTrait;
    protected $notificationRepo;
    public function __construct(INotificationRepositories  $NotificationRepo )
    {
        $this->middleware('auth:sanctum');
        $this->notificationRepo = $NotificationRepo;
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
    public function store(StoreNotificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNotificationRequest $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        //
    }
    public  function  getNotificationForCurrentUser(Request $request)
    {
        try {
            $notificationsForCurrentUser = $this->notificationRepo->getNotificationForCurrentUser($request);
             return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', NotificationResource::collection($notificationsForCurrentUser), 200, \Illuminate\Support\Facades\App::getLocale());
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), [] ,  $e->getCode()  , app()->getLocale());
        }

    }


}
