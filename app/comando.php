<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comando extends Model
{
    public function oms(){
    	return $this->belongsToMany('App\om', 'comando_om', 'comando_id', 'om_id')->orderBy('om_id')->withPivot('omds');
    }
}
