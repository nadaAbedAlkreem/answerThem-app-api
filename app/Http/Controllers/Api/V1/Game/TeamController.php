<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Http\Resources\Api\TeamResource;
use App\Models\Team;
use App\Models\TeamMember;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');

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
    public function create( )
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {

         $team = Team::create([
            'name' => $request['name'],
            'user_id' => $request->user()->id,
        ]);
         foreach ($request['members'] as $memberId) {
            TeamMember::create([
                'team_id' => $team->id,
                'user_id' => $memberId,
            ]);
        }
         $team->load(['user','teamMembers.user']);
        return $this->successResponse('CREATE_SUCCESS', new TeamResource($team) , 202, app()->getLocale());




    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
