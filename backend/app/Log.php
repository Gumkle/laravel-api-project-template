<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function object(){

        // TODO set polymorphic relation to project, thread and task model
//        return $this->morphOne('');
    }
}
