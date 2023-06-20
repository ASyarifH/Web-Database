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
<<<<<<< HEAD
        $farmers = [
            [
                'name' => 'Yoga',
                'role' => 'Ahli Gizi',
                'age' => '20',
                'address' => 'Jember Patrang',
                'detail' => 'Meneliti Manfaat Dari Hasil yang diperoleh'
            ],
            [
                'name' => 'Fikri',
                'role' => 'Petani',
                'age' => '25',
                'address' => 'Jember Mastrip',
                'detail' => 'Menanam dan merawat tanaman'
            ],
            [
                'name' => 'Akbar',
                'role' => 'Ahli Agronomi',
                'age' => '27',
                'address' => 'Lumajang',
                'detail' => 'Melakukan studi dan menerapkan pengetahuan ilmiah dalam produksi tanaman dan pengelolaan lahan pertanian'
            ],
            [
                'name' => 'Septa',
                'role' => 'Ahli Hama dan Penyakit Tanaman',
                'age' => '22',
                'address' => 'Bondowoso',
                'detail' => 'Melakukan pengecekan dan memberikan nutrisi pada tanaman dan memeriksa untuk terhindar dari hama dan penyakit'
            ],
            [
                'name' => 'Markus',
                'role' => 'Ahli Kesuburan Tanah',
                'age' => '25',
                'address' => 'Probolinggo',
                'detail' => 'Melakukan penelitian dan pengecekan kelayakan tanah untuk tanaman yang ditanam'
            ],
            [
                'name' => 'Shinta',
                'role' => 'Ahli Ekonomi Pertanian',
                'age' => '24',
                'address' => 'Banyuwangi',
                'detail' => 'Meneliti Ekonomi dalam sektor pemasaran '
            ]
        ];
    
        Farmer::insert($farmers);
=======
        Farmer::create([
            'name' => 'Yoga',
            'age' => '20',
            'address' => 'Jember Patrang',
            'detail' => 'Meneliti dalam penanaman apel untuk mendapatkan cara penanaman, waktu penanaman, hasil dan manfaat dari hasil dari penanaman tersebut'
        ]);
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
    }
}
