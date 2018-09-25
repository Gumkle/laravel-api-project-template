<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function logs(){
        return $this->morphMany('App\Log', 'logged');
    }

    public function users(){
        return $this->morphMany('App\AssignedRole', 'object');
    }

    public function tasks(){
        return $this->hasMany('App\Task');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }
}
