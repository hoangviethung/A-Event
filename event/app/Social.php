<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = "social_accounts";
    protected $primaryKey = 'user_id';
    public $timestamps=false;

    protected $fillable = [
        'user_id', 'provider_user_id','provider',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
