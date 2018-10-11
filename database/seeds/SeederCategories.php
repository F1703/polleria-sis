<?php

use Illuminate\Database\Seeder;
use polleria\Categoria;

class SeederCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            Categoria::create([
                'nombre'      => 'categoria ' . $i,
                'descripcion' => 'categoriaDes ' . $i,
                'condicion'   => true,
            ]);
        }

    }
}
