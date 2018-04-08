<?php

use Illuminate\Database\Seeder;
use DB as DB;
use polleria\User;
use polleria\Articulo;
use polleria\Categoria;
use polleria\Persona;
use polleria\Venta;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call();
        $faker = Faker\Factory::create();

        User::create([
          'name' => 'franco',
          // 'email' => $faker->safeEmail,
          'email' => 'franco@gmail.com',
          'password' => bcrypt('franco'),
          'remember_token' => str_random(10),
        ]);

        User::create([
          'name' => 'elio',
          // 'email' => $faker->safeEmail,
          'email' => 'elio@gmail.com',
          'password' => bcrypt('elio'),
          'remember_token' => str_random(10),
        ]);

        for ($i=1; $i < 7; $i++) {
          Categoria::create([
            'nombre'=>'categoria '.$i,
            'descripcion'=>'categoria_'.$i,
            'condicion'=>1
          ]);
        }

        for ($i=0; $i <5 ; $i++) {
          Articulo::create([
            'codigo'=>$faker->randomNumber($nbDigits = 9, $strict = true),
            'nombre'=>'articulo_'.$i,
            'stock'=>$faker->randomDigitNotNull,
            'descripcion'=>'articulo_'.$i,
            'estado'=>'Activo',
            'idcategoria'=>3,
          ]);
        }
        for ($i=0; $i <15 ; $i++) {
          Persona::create([
            'tipo_persona'=>'cliente',
            'nombre'=>$faker->firstName($gender = null|'male'|'female'),
            'tipo_documento'=>'DNI',
            'num_documento'=>$faker->randomNumber($nbDigits = 8, $strict = true),
            'direccion'=> $faker->address,
            'telefono'=>$faker->e164PhoneNumber,
            'email'=>$faker->email,
          ]);
        }

        for ($i=0; $i <15 ; $i++) {
          Persona::create([
            'tipo_persona'=>'proveedor',
            'nombre'=>$faker->firstName($gender = null|'male'|'female'),
            'tipo_documento'=>'DNI',
            'num_documento'=>$faker->randomNumber($nbDigits = 8, $strict = true),
            'direccion'=> $faker->address,
            'telefono'=>$faker->e164PhoneNumber,
            'email'=>$faker->email,
          ]);
        }


    }
}
