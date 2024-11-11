<?php

namespace App\Repositories\Eloquent;

use App\Models\Result;
use App\Repositories\IResultRepositories;

class ResultRepository extends  BaseRepository implements IResultRepositories
{
    public function __construct()
    {
        $this->model = new Result();
    }


}
