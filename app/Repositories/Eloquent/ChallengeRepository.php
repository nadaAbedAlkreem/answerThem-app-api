<?php

namespace App\Repositories\Eloquent;

use App\Models\Challenge;
use App\Repositories\IChallengeRepositories;
use App\Traits\ResponseTrait;

class ChallengeRepository   extends BaseRepository implements IChallengeRepositories
{
    use ResponseTrait ;
    public function __construct()
    {
        $this->model = new Challenge();
    }



}
