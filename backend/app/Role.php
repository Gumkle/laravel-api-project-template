<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function assigned_roles(){
        return $this->hasMany('App\AssignedRoles');
    }
}
