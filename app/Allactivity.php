<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allactivity extends Model
{
    protected $talbe='allactivities';
    protected $fillable=['aaname','aatype','aascope','aastatus','aalink','aadesc'];

}
