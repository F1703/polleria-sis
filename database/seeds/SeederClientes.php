<?php

use Illuminate\Database\Seeder;
use polleria\Cliente;

class SeederClientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 30; $i++) {
            Cliente::create([
                'nombre'    => $faker->name,
                'documento' => $faker->randomNumber($nbDigits = 5, $strict = false),
                'direccion' => $faker->streetAddress,
                'telefono'  => $faker->phoneNumber,
                'email'     => $faker->freeEmail,
                'estado'    => 'activo',
            ]);
        }
    }
}
