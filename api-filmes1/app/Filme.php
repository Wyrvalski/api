<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model{
    public $timestamps = false;
    protected $fillable = ['nome'];

}