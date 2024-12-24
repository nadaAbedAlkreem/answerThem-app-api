<?php

namespace App\Repositories\Eloquent;

use App\Models\Question;
use App\Repositories\IQuestionRepositories;
use App\Traits\ResponseTrait;


class QuestionRepository  extends BaseRepository implements IQuestionRepositories
{
    use ResponseTrait ;
    public function __construct()
    {
        $this->model = new Question();
    }




}
