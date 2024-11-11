<?php

namespace App\Repositories\Eloquent;

use App\Models\Invitation;
use App\Repositories\IInvitationRepositories;

class InvitationRepository extends BaseRepository implements  IInvitationRepositories
{
    public function __construct()
    {
        $this->model = new Invitation();
    }
}
