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

        User::create('users')([
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





    }
}
