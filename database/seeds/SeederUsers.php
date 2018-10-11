<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use polleria\User;

class SeederUsers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        \DB::table('users')->insert([
            'name'           => 'franco',
            // 'email' => $faker->safeEmail,
            'email'          => 'franco@gmail.com',
            'password'       => bcrypt('franco'),
            'remember_token' => str_random(10),
        ]);

        for ($i = 0; $i < 20; $i++) {
            User::create([
                'name'           => $faker->name,
                'email'          => $faker->email,
                'password'       => bcrypt('franco'),
                'remember_token' => str_random(10),
            ]);
        }
    }
}
