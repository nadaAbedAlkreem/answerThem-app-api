<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Http\Resources\Api\QuestionResource;
use App\Models\Question;
use App\Repositories\IQuestionRepositories;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    use ResponseTrait ;
    protected $questionRepo;
    public function __construct(IQuestionRepositories $questionRepo  )
    {
        $this->middleware('auth:sanctum');
        $this->questionRepo = $questionRepo;

    }
    /*
    /**
     * Display a listing of the resource.
     */
    function  tryChallengeAlone(Request $request)
    {
        $user =  $request->user();
        if (!$user) {
            return $this->errorResponse('UNAUTHENTICATED', [], 401, app()->getLocale());
        }
      $randomQuestion = $this->questionRepo->getRandom();
      return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',QuestionResource::collection($randomQuestion) , 202, app()->getLocale());

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
