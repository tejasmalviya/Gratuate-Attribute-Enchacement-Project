<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $talbe='activities';
    protected $fillable=['aname','atype','ascope','sname','adate','image','id','astatus','alink','adesc'];
}
