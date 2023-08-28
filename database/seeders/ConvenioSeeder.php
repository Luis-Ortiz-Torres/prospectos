<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Convenio;
use Faker\Factory as Faker;

class ConvenioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Convenio::create([
                'codigo' => $faker->unique()->numberBetween(1000, 9999), // Genera un código único entre 1000 y 9999
                'nombre' => $faker->company,
                'descripcion' => $faker->sentence,
            ]);
        }
    }
}
