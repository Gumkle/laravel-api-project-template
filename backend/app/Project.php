<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function users(){
        return $this->morphMany('App\AssignedRole', 'object');
    }

    public function threads(){
        return $this->hasMany('App\Thread');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function tasks(){
        $threads = $this->threads;
        return $threads->map(function($item){
            return $item->tasks;
        });
    }

    public function logs(){
        return $this->morphMany('App\Log', 'logged');
    }
}
