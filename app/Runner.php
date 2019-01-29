<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    //
    protected $fillable = ['naam', 'email', 'afstand', 'aantal'];
}
