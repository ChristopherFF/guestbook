<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    public function reply()
    {
        return $this->hasOne(Reply::class, 'message_id');
    }
}
