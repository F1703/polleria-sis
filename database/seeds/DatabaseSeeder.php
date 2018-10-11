<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SeederUsers::class);
        $this->call(SeederCategories::class);
        $this->call(SeederArticulos::class);
        $this->call(SeederProveedores::class);
        $this->call(SeederClientes::class);
        // $this->call();

    }
}
