<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcoe extends Model
{
 public function usuario(){
     return $this->hasMany('App\User');
 }
}
