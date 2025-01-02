<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Http\Resources\Api\TeamResource;
use App\Models\Team;
use App\Models\TeamMember;
use App\Traits\ResponseTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    use ResponseTrait;
    public function __construct()
    {
        $this->middleware('auth:sanctum');

    }
    /**
     * Display a listing of the resource.
     */
    public function getUserTeams(Request $request)
    {
        $userId = $request->user()->id;

        $teamsUserIn = Team::whereHas('teamMembers', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();
        $teamsDifferent = Team::where('user_id', '!=', $userId)
            ->whereDoesntHave('teamMembers', function ($query) use ($userId) {
                $query->where('user_id', $userId);
            })->get();
        dd($teamsUserIn ."  ".$teamsDifferent);

        return [
            'teams_user_in' => $teamsUserIn,
            'teams_different' => $teamsDifferent,
        ];
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

        return $this->successResponse('CREATE_SUCCESS', new TeamResource($team->load(['user', 'teamMembers.user'])), 202, app()->getLocale());


    }

    /**
     * Display the specified resource.
     */
    public function getTeams()
    {

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
