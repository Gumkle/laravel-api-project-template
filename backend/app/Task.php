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

    //TODO make sure that related pivot key is set correctly
    public function users(){
        return $this->belongsToMany('App\User', 'assigned_roles', 'user_id', 'object_id');
    }

    public function logs(){
        // TODO return all the logs related to $this
//        return;
    }
}
