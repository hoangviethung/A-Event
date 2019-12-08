<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiEvent extends Model
{
    protected $table = "loaievent";
    public function type_events(){
        return $this->belongsTo('App\Type_events','danh_muc','id');
    }

}
