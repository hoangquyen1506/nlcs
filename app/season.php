<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class season extends Model
{
   protected $table = "season";
   public function getSeason(){
       return $this->hasMany('App\product','idSeason','id'); 
   }
   
}
