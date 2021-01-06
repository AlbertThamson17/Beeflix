<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Movie extends Model
{
    public function genre(){
        return $this->hasOne('App\Genre','id','genre_id');
    }
}
