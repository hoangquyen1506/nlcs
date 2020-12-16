<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = "category";
    public function getType(){
        return $this -> hasMany('App\product','idProduct','id');
    }

}
