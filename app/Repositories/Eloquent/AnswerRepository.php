<?php

namespace App\Repositories\Eloquent;

use App\Models\Answer;
use App\Models\Category;
use App\Repositories\IAnswerRepositories;
use App\Repositories\ICategoryRepositories;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class AnswerRepository  extends BaseRepository implements IAnswerRepositories
{
    use ResponseTrait ;
    public function __construct()
    {
        $this->model = new Answer();
    }



}
