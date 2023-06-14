<?php

namespace Database\Seeders;

use App\Models\Crop;
use Illuminate\Database\Seeder;

class CropsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Crop::create([
            'name' => 'apel',
            'alias' => 'Malus domestica',
            'price' => '3500',
            'place' => 'Tanaman ini membutuhkan tanah yang baik dan subur untuk tumbuh dengan optimal. Tanah yang sering digunakan untuk menanam apel adalah tanah yang kaya akan bahan organik dan memiliki drainase yang baik. pH tanah yang ideal untuk pertumbuhan apel adalah antara 6,0 hingga 7,0.',
            'description' => 'Tanaman apel (Malus domestica) merupakan tanaman buah yang populer dan sering ditanam di berbagai belahan dunia.',
            'purpose' => 'Apel adalah sumber vitamin C, serat pangan, dan antioksidan yang penting untuk kesehatan tubuh. Mengonsumsi apel secara teratur dapat membantu meningkatkan sistem kekebalan tubuh, menjaga kesehatan jantung, dan meningkatkan fungsi pencernaan.',
        ]);
    }
}

