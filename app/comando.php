<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comando extends Model
{
    public function oms(){
    	return $this->belongsToMany('App\om')->withPivot('omds');
    }
}
