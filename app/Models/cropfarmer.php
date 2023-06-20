<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CropFarmer extends Model
{
    protected $table = 'crop_farmer';

    public function crop()
    {
        return $this->belongsTo(Crop::class);
    }

    public function petani()
    {
        return $this->belongsTo(Farmer::class, 'petani_id');
    }

    public function ahliAgronomi()
    {
        return $this->belongsTo(Farmer::class, 'ahli_agronomi_id');
    }

    public function ahliKesuburan()
    {
        return $this->belongsTo(Farmer::class, 'ahli_kesuburan_id');
    }

    public function ahliHama()
    {
        return $this->belongsTo(Farmer::class, 'ahli_hama_id');
    }

    public function ahliEkonomi()
    {
        return $this->belongsTo(Farmer::class, 'ahli_ekonomi_id');
    }

    public function ahliGizi()
    {
        return $this->belongsTo(Farmer::class, 'ahli_gizi_id');
    }
}
