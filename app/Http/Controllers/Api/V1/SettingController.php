<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\SettingResource;
use App\Models\Setting;
use App\Repositories\ISettingRepositories;
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
    protected $settingService  , $settingRepositories;

    public function __construct(SettingService $settingService   , ISettingRepositories $settingRepositories)
    {
        $this->settingService = $settingService;
        $this->settingRepositories = $settingRepositories;

    }


    public function index(Request $request)
    {
        $settings = Setting::where('lang', App::getLocale())->get();
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', SettingResource::collection($settings) , 200,  App::getLocale());
    }
    public function show()
    {
         $settings = $this->settingRepositories->whereIn(['lang' => [app::getLocale(), '']]);
         return  view('dashboard.pages.setting', compact('settings'));
    }

    public function update(Request $request)
    {
        try {
            $setting = $this->settingService->updateSetting($request);
             return $this->successResponse('UPDATE_SUCCESS', [new SettingResource($setting)] , 200,  App::getLocale());

        } catch (\Exception $e) {

            return $this->errorResponse('ERROR_OCCURRED',  ['error' =>  $e->getMessage()] ,  404 , app()->getLocale());

         }
    }
}
