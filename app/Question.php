<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";

    public function type()
    {
        return $this->hasOne('App\TypeQuestion');
    }

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}