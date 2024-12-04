<?php

namespace App\Repositories\Eloquent;

use App\Models\Challenge;
use App\Models\Evaluation;
use App\Repositories\IChallengeRepositories;
use App\Repositories\IEvaluationRepositories;
use App\Traits\ResponseTrait;

class EvaluationRepository   extends BaseRepository implements IEvaluationRepositories
{
    use ResponseTrait ;
    public function __construct()
    {
        $this->model = new Evaluation();
    }



}
