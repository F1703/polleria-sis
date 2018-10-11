<?php

use Illuminate\Database\Seeder;
use polleria\Proveedor;

class SeederProveedores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 15; $i++) {
            Proveedor::create([
                'razonsocial' => $faker->name,
                'cuit'        => $faker->randomNumber($nbDigits = 4, $strict = false),
                'direccion'   => $faker->streetAddress,
                'telefono'    => $faker->phoneNumber,
                'email'       => $faker->freeEmail,
                'estado'      => 'activo',
            ]);
        }
    }
}
