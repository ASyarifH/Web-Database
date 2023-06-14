<?php

namespace Database\Seeders;

use App\Models\Farmer;
use Illuminate\Database\Seeder;

class FarmersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Farmer::create([
            'name' => 'Yoga',
            'age' => '20',
            'address' => 'Jember Patrang',
            'detail' => 'Meneliti dalam penanaman apel untuk mendapatkan cara penanaman, waktu penanaman, hasil dan manfaat dari hasil dari penanaman tersebut'
        ]);
    }
}
