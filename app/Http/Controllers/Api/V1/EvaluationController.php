<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEvaluationRequest;
use App\Http\Requests\UpdateEvaluationRequest;
use App\Http\Resources\Api\EvaluationResource;
use App\Models\Evaluation;
use App\Repositories\IEvaluationRepositories;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\App;

class EvaluationController extends Controller
{
   use  ResponseTrait ;
    protected $evaluationRepository;

    public function __construct(IEvaluationRepositories $evaluationRepository )
    {
        $this->evaluationRepository = $evaluationRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreEvaluationRequest $request)
    {

        try {
            $evaluationItem = $this->evaluationRepository->create($request->getData());
            return $this->successResponse('CREATE_ITEM_SUCCESSFULLY',[], 201, App::getLocale())  ;
        } catch (\Illuminate\Validation\ValidationException $e) {
            return $this->errorResponse('VETIFICATION_ERRORS', ['error' => $e->errors()], 422  ,App::getLocale()); // Return validation errors
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Evaluation $evaluation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evaluation $evaluation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluationRequest $request, Evaluation $evaluation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluation $evaluation)
    {
        //
    }
}
