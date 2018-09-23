<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //TODO make sure that related pivot key is set correctly
    public function users(){
        return $this->belongsToMany('App\User', 'assigned_roles', 'user_id', 'object_id');
    }

    public function logs(){
        // TODO return all the logs related to $this
//        return;
    }

    public function project(){
        return $this->belongsTo('App\Project');
    }

    public function tasks(){
        return $this->hasMany('App\Task');
    }
}
