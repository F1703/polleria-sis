<?php

use Illuminate\Database\Seeder;
use DB as DB;
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

        \DB::table('users')->insert([
          'name' => 'franco',
          // 'email' => $faker->safeEmail,
          'email' => 'franco@gmail.com',
          'password' => bcrypt('franco'),
          'remember_token' => str_random(10),
        ]);
    }
}
