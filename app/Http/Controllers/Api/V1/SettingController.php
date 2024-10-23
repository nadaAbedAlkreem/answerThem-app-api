<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSettingRequest;
use App\Http\Resources\Api\NotificationResource;
use App\Http\Resources\Api\SettingResource;
use App\Models\Setting;
use App\Services\SettingService;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SettingController extends Controller
{

    use ResponseTrait;
    /**
     * Display a listing of the resource.
     */
    protected $settingService;

    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }

    public function index(Request $request)
    {

        $settings = Setting::where('lang', App::getLocale())->get();
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', SettingResource::collection($settings) , 200,  App::getLocale());

    }
    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',[new SettingResource($setting) ], 200,  App::getLocale());

    }

    public function update(Request $request , $id)
    {

        try {

            $setting = $this->settingService->updateSetting($id, $request);
             return $this->successResponse('UPDATE_SUCCESS', [new SettingResource($setting)] , 200,  App::getLocale());

        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), [] ,  404 , app()->getLocale());

         }
    }
}
