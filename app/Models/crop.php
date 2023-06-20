<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crop extends Model
{
    public $timestamps = false;
    protected $table = 'crops';
    protected $fillable = ['name', 'alias'];
    protected $hidden = ['description', 'price', 'purpose', 'place'];
<<<<<<< HEAD
    public function farmers()
    {
        return $this->belongsTo(Farmer::class, 'crop_farmer');
    }
=======
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
}
