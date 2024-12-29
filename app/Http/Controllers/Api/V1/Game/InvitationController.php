<?php

namespace App\Http\Controllers\Api\V1\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvitationRequest;
use App\Http\Requests\UpdateInvitationRequest;
use App\Http\Resources\Api\InvitationResource;
use App\Models\Invitation;
use App\Repositories\IChallengeRepositories;
use App\Repositories\IInvitationRepositories;
use App\Traits\ResponseTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class InvitationController extends Controller
{
    use ResponseTrait ;
    protected  $invitationRepo , $challengeRepository;
    public function __construct(IInvitationRepositories $invitationRepo   , IChallengeRepositories $challengeRepository )
    {

        $this->middleware('auth:sanctum');
        $this->invitationRepo = $invitationRepo;
        $this->challengeRepository = $challengeRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function currentInvitationJoinChallenge(Request $request)
    {
          $invitations = Invitation::with('challenge' , 'challenge.user2' , 'challenge.category' , 'challenge.category.parent'  ,  'challenge.category.questions','challenge.user1' )
            ->withActiveChallenges()
           ->where('created_at', '>=', Carbon::now()->subMinutes(5))
            ->get();
             return $this->successResponse('DATA_RETRIEVED_SUCCESSFULLY',
             InvitationResource::collection($invitations), 200, App::getLocale());

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
    public function store(StoreInvitationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Invitation $invitation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invitation $invitation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvitationRequest $request, Invitation $invitation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invitation $invitation)
    {
        //
    }
}
