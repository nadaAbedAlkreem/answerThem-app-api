<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingService
{
    public function updateSetting($id, Request $request)
    {
        // Find the existing setting by ID
        $setting = Setting::find($id);

        if (!$setting) {
            throw new \Exception('Setting not found');
        }

        // Determine the type of value and handle accordingly
        switch ($setting->type) {
            case 'json':
                $currentValue = json_decode($setting->value, true);
                dd($currentValue);
                $newData = array_merge($currentValue, $request->input('value'));

                $setting->value = json_encode($newData);
                break;

            case 'image':
                if ($request->hasFile('value')) {

                    $userName = (!empty($setting->key))?  $setting->key.time()+rand(1,10000000) :  time()+rand(1,10000000)  ;
                    $path = 'uploads/images/settings/';
                    $nameImage = $userName.'.'. $request->file('value')->getClientOriginalExtension();
                    Storage::disk('public')->put($path.$nameImage, file_get_contents( $request->file('value') ));
                    $setting->value =$path.$nameImage;

                 }
                break;

            case 'string':
            default:
                $setting->value = $request->input('value');
                break;
        }

        // Save the updated setting
        $setting->updated_at = now();
        $setting->save();

        return $setting;
    }
}
