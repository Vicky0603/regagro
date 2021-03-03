<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tabs extends Model
{
    protected $fillable = ['name','latitude', 'longitude', 'population'];
    public $timestamps = false;
}
