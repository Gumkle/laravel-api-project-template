<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function objects(){
        // TODO set the relation to all the objects that are using status
//        return $this->morphMany();
    }
}
