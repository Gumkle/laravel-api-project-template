<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    public function assigned_roles(){
        return $this->hasMany('App\AssignedRoles');
    }
}
