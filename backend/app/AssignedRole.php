<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignedRole extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function object(){
        // todo read about and set polymorphic association to project, task and thread
//        return $this->morphOne();
    }
}
