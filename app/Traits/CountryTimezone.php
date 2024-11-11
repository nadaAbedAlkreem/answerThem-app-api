<?php

namespace App\Traits;
use Carbon\Carbon;

trait CountryTimezone
{
    protected $countryTimezones = [
        'PS' => 'Asia/Gaza',
        'EG' => 'Africa/Cairo',
        'KW' => 'Asia/Kuwait',
        'SA' => 'Asia/Riyadh',
        'AE' => 'Asia/Dubai',
        // Add other countries as needed
    ];

    /**
     * Map country name to ISO code.
     */
    public function mapCountryNameToCode(string $countryName): string
    {
        $countryCodes = [
            'Palestine' => 'PS',
            'Egypt' => 'EG',
            'Kuwait' => 'KW',
            'Saudi Arabia' => 'SA',
            'United Arab Emirates' => 'AE',
            // Add other mappings as needed
        ];

        return $countryCodes[$countryName] ?? 'default';
    }

    /**
     * Get the current time based on country timezone.
     */
    public function getCountryTimezone(string $countryCode): string
    {
        $timezone = $this->countryTimezones[$countryCode] ?? config('app.timezone');
        return Carbon::now($timezone);
    }

}
