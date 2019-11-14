<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = "social_accounts";
    protected $primaryKey = 'id';
    public $timestamps=false;

    protected $fillable = [
        'id','name','email','password','provider_id','provider',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
