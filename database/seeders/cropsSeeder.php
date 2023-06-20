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
<<<<<<< HEAD
        $crops = [
            [
                'name' => 'apel',
                'alias' => 'Malus domestica',
                'price' => '3500',
                'place' => 'Tanaman ini membutuhkan tanah yang baik dan subur untuk tumbuh dengan optimal. Tanah yang sering digunakan untuk menanam apel adalah tanah yang kaya akan bahan organik dan memiliki drainase yang baik. pH tanah yang ideal untuk pertumbuhan apel adalah antara 6,0 hingga 7,0.',
                'description' => 'Tanaman apel (Malus domestica) merupakan tanaman buah yang populer dan sering ditanam di berbagai belahan dunia.',
                'purpose' => 'Apel adalah sumber vitamin C, serat pangan, dan antioksidan yang penting untuk kesehatan tubuh. Mengonsumsi apel secara teratur dapat membantu meningkatkan sistem kekebalan tubuh, menjaga kesehatan jantung, dan meningkatkan fungsi pencernaan.',
            ],
            [
                'name' => 'mangga',
                'alias' => 'Mangifera indica',
                'price' => '5000',
                'place' => 'Tanaman mangga dapat tumbuh dengan baik di daerah yang memiliki iklim tropis atau subtropis. Tanah yang ideal untuk pertumbuhan mangga adalah tanah yang kaya akan bahan organik, memiliki kandungan air yang cukup, dan memiliki pH antara 6,0 hingga 7,5.',
                'description' => 'Mangga (Mangifera indica) adalah buah tropis yang populer dengan rasa manis dan aroma harum.',
                'purpose' => 'Mangga kaya akan vitamin C, vitamin A, dan serat pangan. Buah ini memiliki berbagai manfaat bagi kesehatan, seperti meningkatkan sistem kekebalan tubuh, menjaga kesehatan kulit, dan memperbaiki pencernaan.',
            ],
            [
                'name' => 'strawberry',
                'alias' => 'Fragaria x ananassa',
                'price' => '4500',
                'place' => 'Tanaman stroberi dapat tumbuh dengan baik di daerah yang memiliki iklim sedang hingga dingin. Tanah yang ideal untuk pertumbuhan stroberi adalah tanah yang subur, memiliki drainase yang baik, dan memiliki pH antara 5,5 hingga 6,5.',
                'description' => 'Stroberi (Fragaria x ananassa) adalah buah kecil berwarna merah yang memiliki rasa manis dan asam yang unik.',
                'purpose' => 'Stroberi mengandung vitamin C, vitamin K, dan serat pangan. Buah ini memiliki banyak manfaat bagi kesehatan, seperti meningkatkan sistem kekebalan tubuh, menjaga kesehatan jantung, dan membantu mengendalikan gula darah.',
            ]
        ];

        Crop::insert($crops);
=======
        Crop::create([
            'name' => 'apel',
            'alias' => 'Malus domestica',
            'price' => '3500',
            'place' => 'Tanaman ini membutuhkan tanah yang baik dan subur untuk tumbuh dengan optimal. Tanah yang sering digunakan untuk menanam apel adalah tanah yang kaya akan bahan organik dan memiliki drainase yang baik. pH tanah yang ideal untuk pertumbuhan apel adalah antara 6,0 hingga 7,0.',
            'description' => 'Tanaman apel (Malus domestica) merupakan tanaman buah yang populer dan sering ditanam di berbagai belahan dunia.',
            'purpose' => 'Apel adalah sumber vitamin C, serat pangan, dan antioksidan yang penting untuk kesehatan tubuh. Mengonsumsi apel secara teratur dapat membantu meningkatkan sistem kekebalan tubuh, menjaga kesehatan jantung, dan meningkatkan fungsi pencernaan.',
        ]);
>>>>>>> 7bc9d73bf754c40b2965e1f20151eaa1e9eff1a6
    }
}

