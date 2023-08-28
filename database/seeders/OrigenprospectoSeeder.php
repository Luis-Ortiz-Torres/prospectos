<?php

namespace Database\Seeders;

use App\Models\Origenprospecto;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class OrigenprospectoSeeder extends Seeder
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
            Origenprospecto::create([
                'nombre' => $faker->company,
            ]);
        }
    }
}
