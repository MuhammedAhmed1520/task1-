<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function slider(){
        return $this->belongsTo('App\Slider');
    }
}
