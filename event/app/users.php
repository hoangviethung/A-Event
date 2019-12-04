<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    
    protected $table = "user";
    public function type_events(){
        return $this->hasMany('App\events','id','name');
    }
    public $timestamps=false;
}
