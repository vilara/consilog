<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    public function usuarios(){
        return $this->hasOne('App\usuario', 'id');
        
    }
}
