<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class timecook extends Model
{
    protected $table = "timeCook";
    public function product(){
        return $this->belongsTo('App\product','idProD','id');
    }
}
