<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = "events";
    public function product_type(){
        return $this->belongsTo('App\Type_events','id_loai','id');
    }
    public function images_event(){
        return $this->hasMany('App\Images_events','id_event','id');
    }
}
