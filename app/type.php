<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $table = "type";
    public function getType(){
        return $this->hasMany('App\product','idType','id'); //ô cê. rồi bây giờ qua bên season đi.
    }
}
