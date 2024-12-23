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
        $this->lang($request);
        $settings = Setting::where('lang', App::getLocale())->get();
        $settingsData = $settings->reduce(function ($carry, $setting) use ($request) {
            return array_merge($carry, (new SettingResource($setting))->toArray($request));
        }, []);
        return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY', ['settings' => $settingsData], 200,  App::getLocale());
    }

    public function show(Request $request)
    {
        $settings = $this->settingRepositories->whereIn(['lang' => [app::getLocale(), '']]);
         $lang  = App::getLocale();
         return  view('dashboard.pages.setting', compact(['settings' , 'lang']));
    }

    public function update(Request $request)
    {
         app::setLocale($request->input('lang'));

        try {
            $setting = $this->settingService->updateSetting($request);
             return $this->successResponse('UPDATE_SUCCESS', ['success' => __('setting.Successfully updated changes.')] , 200,  App::getLocale());

        } catch (\Exception $e) {
              return $this->errorResponse('ERROR_OCCURRED',  ['error' =>  $e->getMessage()] ,  404 , app()->getLocale());
         }
    }

}
