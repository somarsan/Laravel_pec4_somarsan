<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Noticia;
use Faker\Factory as Faker;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Noticia::create([
                'titulo' => $faker->sentence,
                'contenido' => $faker->paragraph(10),
                'fecha_publicacion' => $faker->dateTimeBetween('-1 year', 'now'),
                'imagen' => $faker->imageUrl(),
                'autor' => $faker->name(),
            ]);
        }
    }
}
