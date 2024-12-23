<?php

namespace App\Services;

use App\Models\Setting;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class SettingService
{
    use ResponseTrait ;
    public function updateSetting($request)
    {
        $data = json_decode($request['changedData'], true);

        foreach ($data as $key => $value) {
            if ($value['value'] == "") {
                throw new \Exception(__('setting.No_data'));
            }
            $parts = explode('-', $value['key']);
            $id = (int)$parts[0];

            $setting = Setting::find($id);
            if (!$setting) {
                throw new \Exception(__('messages.NOT_FOUND'));
            }
            switch ($setting->type) {
                case 'json':
                    if (count($parts) == 3) {
                        if ($parts[2] == 'image') {
                            if ($request->hasFile($value['key'])) {
                                $image = $request->file($value['key']);
                                $imageUnqName = $setting->key . time() + rand(1, 10000000);
                                $path = 'uploads/images/settings/';
                                $nameImage = $imageUnqName . '.' . $image->getClientOriginalExtension();
                                Storage::disk('public')->put($path . $nameImage, file_get_contents($image));
                                $image->move('storage/' . ($path), $nameImage);

                                $absolutePath = storage_path('app/public/' . $path . $nameImage);
                                if (file_exists($absolutePath)) {
                                    chmod($absolutePath, 0775);
                                } else {
                                    throw new \Exception('File not found: ' . $absolutePath);
                                }
                                $arrayItem = json_decode($setting->value, true);
                                $index = (int)$parts[1];
                                $arrayItem[$index][$parts[2]] = Storage::url($path . $nameImage);
                                $setting->value = json_encode($arrayItem);
                            }

                        }
                        if ($parts[2] == 'title') {
                            $arrayItem = json_decode($setting->value, true);
                            $index = (int)$parts[1];
                            $arrayItem[$index][$parts[2]] = $value['value'];
                            $setting->value = json_encode($arrayItem);
                        }
                        if ($parts[2] == 'body') {
                            $arrayItem = json_decode($setting->value, true);
                            $index = (int)$parts[1];
                            $arrayItem[$index][$parts[2]] = $value['value'];
                            $setting->value = json_encode($arrayItem);
                        }
                        if ($parts[2] == 'name') {
                            $arrayItem = json_decode($setting->value, true);
                            $index = (int)$parts[1];
                            $arrayItem[$index][$parts[2]] = $value['value'];
                            $setting->value = json_encode($arrayItem);
                        }
                        if ($parts[2] == 'code') {
                            $pattern = '/^\+\d+$/'; // Matches "+number" like +2, +100, +970

                            // Validate using regex
                            if (!preg_match($pattern, $value['value'])) {
                                // Throw an exception if validation fails
                                throw ValidationException::withMessages([
                                    'code' => __('setting.format_code'),
                                ]);
                            }
                            $arrayItem = json_decode($setting->value, true);
                            $index = (int)$parts[1];
                            $arrayItem[$index][$parts[2]] = $value['value'];
                            $setting->value = json_encode($arrayItem);
                        }
                    } else {
                        if ($setting->base_term == 'app contact us') {
                            $arrayItem = json_decode($setting->value, true);
                            $arrayItem[$parts[1]] = $value['value'];
                            $setting->value = json_encode($arrayItem);

                        }
                        if ($setting->base_term == 'problem suggestions') {
                            $arrayItem = json_decode($setting->value, true);
                            $index = (int)$parts[1];
                            $arrayItem[$index] = $value['value'];
                            $setting->value = json_encode($arrayItem);
                        }

                    }


                    break;

                case 'image':
                    if ($request->hasFile($id)) {
                        $image = $request->file($id);
                        $imageUnqName = $setting->key . time() + rand(1, 10000000);
                        $path = 'uploads/images/settings/';
                        $nameImage = $imageUnqName . '.' . $image->getClientOriginalExtension();
                        Storage::disk('public')->put($path . $nameImage, file_get_contents($image));
                        $absolutePath = storage_path('app/public/' . $path . $nameImage);
                        $image->move('storage/' . ($path), $nameImage);

                        if (file_exists($absolutePath)) {
                            chmod($absolutePath, 0775);
                        } else {
                            throw new \Exception('File not found: ' . $absolutePath);
                        }
                        $setting->value = Storage::url($path . $nameImage);
                    }
                    break;

                case 'string':
                    $setting->value = $value['value'];
                    break;
                default:
                    break;

            }

            // Save the updated setting
            $setting->updated_at = now();
            $setting->save();


        }
        return $setting;


    }
}
