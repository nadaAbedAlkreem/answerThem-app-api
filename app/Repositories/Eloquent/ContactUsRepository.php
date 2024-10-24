<?php

namespace App\Repositories\Eloquent;

use App\Models\ContactUs;
use App\Repositories\IContactUsRepositories;

class ContactUsRepository extends BaseRepository implements IContactUsRepositories
{

    public function __construct()
    {
        $this->model = new ContactUs();
    }

}
