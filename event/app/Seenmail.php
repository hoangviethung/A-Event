<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seenmail extends Model
{
    protected $table = "seenmail";
    protected $primaryKey = 'id';
    public $timestamps=false;
}
