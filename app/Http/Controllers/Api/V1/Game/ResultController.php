<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreResultRequest;
use App\Http\Requests\UpdateResultRequest;
use App\Http\Resources\Api\ResultResource;
use App\Models\Result;
use App\Repositories\IResultRepositories;
use App\Traits\ResponseTrait;

class ResultController extends Controller
{
    use ResponseTrait ;

    protected $ResultRepository   ;
    public function __construct(IResultRepositories $ResultRepository)
    {
        $this->ResultRepository = $ResultRepository;
    }
    /**
     * Display a listing of the resource.


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreResultRequest $request)
    {
        try {
           $resultOfGaming = $this->ResultRepository->create($request->getData());
           $challenge = $resultOfGaming->challenge;
           $challenge->status = 'end';
           $challenge->save();
           $resultOfGaming->load(['challenge','firstCompetitor' ,'secondCompetitor', 'winner']);

           return $this->successResponse('CREATE_ITEM_SUCCESSFULLY', new ResultResource($resultOfGaming), 202, app()->getLocale());
        } catch (\Exception $e) {
            return $this->errorResponse('ERROR_OCCURRED', ['error' => $e->getMessage()], 500, app()->getLocale());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResultRequest $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        //
    }
}
