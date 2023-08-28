<?php

namespace Database\Seeders;

use App\Models\Convenio;
use App\Models\Origenprospecto;
use App\Models\Prospecto;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProspectoSeeder extends Seeder
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
            Prospecto::create([
                'tipoIdentificacion' => $faker->randomElement(['C.C.', 'C.E.']),
                'numeroIdentificacion' => $faker->unique()->numberBetween(1000, 9999), // Genera un código único entre 1000 y 9999
                'primerNombre' => $faker->name,
                'segundoNombre' => $faker->name,
                'primerApellido' => $faker->lastName,
                'segundoApellido' => $faker->lastName,
                'direccion' => $faker->word,
                'barrio' => $faker->word,
                'municipio' => $faker->city,
                'celular' => $faker->numberBetween(1000, 9999),
                'telefono' => $faker->numberBetween(1000, 9999),
                'correo' => $faker->email,
                'fechaIngreso' => $faker->dateTimeBetween('-2 years', '-1 years'),
                'fechaPrimerContacto' => $faker->dateTimeBetween('-2 years', '-1 years'),
                'estado' => $faker->word,
                'enteroBeneficios' => $faker->sentence,
                'nombreReferido' => $faker->name,
                'apellidoReferido' => $faker->lastName,
                'telefonoReferido' => $faker->numberBetween(1000, 9999),
                'convenio_id' => $faker->randomElement(Convenio::pluck('id')),
                'origenprospecto_id' => $faker->randomElement(Origenprospecto::pluck('id')),
            ]);
        }
    }
}
