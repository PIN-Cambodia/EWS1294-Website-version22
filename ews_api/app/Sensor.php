<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    //
    public function Datapoint(){
    	return $this->hasMany('App\Datapoint');
    }
}
