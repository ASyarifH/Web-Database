<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    public $timestamps = false;
    protected $table = 'farmers';
    protected $fillable = ['name', 'age', 'address'];
    protected $hidden = ['detail'];
}