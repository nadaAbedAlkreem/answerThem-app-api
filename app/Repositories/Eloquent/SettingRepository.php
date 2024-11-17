<?php

namespace App\Repositories\Eloquent;

use App\Models\Setting;
use App\Repositories\ISettingRepositories;

class SettingRepository extends  BaseRepository implements  ISettingRepositories
{
    public function __construct()
    {
        $this->model = new Setting();
    }

}
