<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    public $timestamps = false;
    protected $table = 'crops';
    protected $fillable = ['name', 'alias'];
    protected $hidden = ['description', 'price', 'purpose', 'place'];
}
