<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    public $timestamps = false;
    protected $table = 'farmers';
<<<<<<< HEAD
    protected $fillable = ['name', 'role'];
    protected $hidden = ['age', 'address', 'detail'];
    public function crops()
    {
        return $this->hasMany(Crop::class, 'crop_farmer');
    }
=======
    protected $fillable = ['name', 'age', 'address'];
    protected $hidden = ['detail'];
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
}