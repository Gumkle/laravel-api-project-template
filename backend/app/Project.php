<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //TODO make sure that related pivot key is set correctly
    public function users(){
        return $this->belongsToMany('App\User', 'assigned_roles', 'user_id', 'object_id');
    }

    public function threads(){
        return $this->hasMany('App\Thread');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    // TODO see if below solution is correct
    public function tasks(){
        $tasks = $this->tasks;
        return $tasks->map(function($item, $key){
            return $item->tasks;
        });
    }

    public function logs(){
        // TODO set the relation to get all logs pointing at $this
//        return;
    }
}
