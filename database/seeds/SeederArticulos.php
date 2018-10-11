<?php

use Illuminate\Database\Seeder;
use polleria\Articulo;

class SeederArticulos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            Articulo::create([
                'codigo'      => $faker->randomNumber($nbDigits = 8, $strict = false),
                'nombre'      => 'product ' . $faker->name,
                'stock'       => $faker->randomNumber($nbDigits = 2, $strict = false),
                'descripcion' => 'Descricion _ ' . $faker->text($maxNbChars = 100),
                'imagen'      => '',
                'estado'      => 'activo',
                'idcategoria' => $faker->numberBetween($min = 1, $max = 19),
            ]);
        }
    }
}
