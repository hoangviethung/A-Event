<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $table = "events";
    public function product_type(){
        return $this->belongsTo('App\Type_events','id_loai','id');
    }

    public $timestamps = false;
}

