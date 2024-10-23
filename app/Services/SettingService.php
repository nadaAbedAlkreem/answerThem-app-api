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




                        $imageUnqName = (!empty($setting->key))?  $setting->key.time()+rand(1,10000000) :  time()+rand(1,10000000)  ;
                        $path = 'uploads/images/settings/';
                        $nameImage = $imageUnqName . '.' . $request->file('value_image')->getClientOriginalExtension();
                        Storage::disk('public')->put($path . $nameImage, file_get_contents($request->file('value_image')));
                        $absolutePath = storage_path('app/public/' . $path . $nameImage);
                        if (file_exists($absolutePath)) {
                            chmod($absolutePath, 0775);
                        } else {
                            throw new \Exception('File not found: ' . $absolutePath);
                        }
                        dd( Storage::url($path . $nameImage));
//                        $valueArray = [
//                            'image' =>  Storage::url($path . $nameImage),
//                            'title' => $request->input('value_title'),
//                            'description' =>  $request->input('value_title'),
//                        ];








//                $jsonValue = json_encode($valueArray);

                $currentValue = json_decode($setting->value, true);
                $newData = array_merge($currentValue, $request->input('value'));

                $setting->value = json_encode($newData);
                break;

            case 'image':
                if ($request->hasFile('value')) {

                    $imageUnqName = (!empty($setting->key))?  $setting->key.time()+rand(1,10000000) :  time()+rand(1,10000000)  ;
                    $path = 'uploads/images/settings/';
                    $nameImage = $imageUnqName . '.' . $request->file('value')->getClientOriginalExtension();
                    Storage::disk('public')->put($path . $nameImage, file_get_contents($request->file('value')));
                    $absolutePath = storage_path('app/public/' . $path . $nameImage);
                    if (file_exists($absolutePath)) {
                        chmod($absolutePath, 0775);
                    } else {
                        throw new \Exception('File not found: ' . $absolutePath);
                    }
                     $setting->value =  Storage::url($path . $nameImage);

                 }
                break;

            case 'string':
                $setting->value = $request->input('value');
                break;
            default:
                 break;

        }

        // Save the updated setting
        $setting->updated_at = now();
        $setting->save();

        return $setting;
    }
}
