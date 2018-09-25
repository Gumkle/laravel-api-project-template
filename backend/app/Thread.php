<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

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

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
}
