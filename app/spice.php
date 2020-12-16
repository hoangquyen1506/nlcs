<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spice extends Model
{
    protected $table = "spice";
    public function product(){
        return $this->belongsTo('App\product','idPD','id');
    }
}
