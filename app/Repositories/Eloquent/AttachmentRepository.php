<?php

namespace App\Repositories\Eloquent;

use App\Models\Attachment;
use App\Repositories\IAttachmentRepository;

class AttachmentRepository  extends BaseRepository implements IAttachmentRepository
{

    public function __construct()
    {
        $this->model = new Attachment();
    }

     
  
}