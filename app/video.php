<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    //
public function getdata(){
    return $this->hasMany('App\videolist','video_id','id');
}
}
