<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    public function thread(){
        return $this->belongsTo('App\Thread');
    }

    public function project(){
        // TODO see if below solution is correct. Requires tests
        return $this->thread->project;
    }

    public function users(){
        return $this->morphMany('App\AssignedRole', 'object');
    }

    public function logs(){
        return $this->morphMany('App\Log', 'logged');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }
}
