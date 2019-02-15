<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ciudadSeeder::class);
        $this->call(tipoSeeder::class);
        $this->call(eventoSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
