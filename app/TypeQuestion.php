<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeQuestion extends Model
{
    /**
     * Get the phone record associated with the user.
     */
    public function question()
    {
        return $this->hasMany('App\Question');
    }
}