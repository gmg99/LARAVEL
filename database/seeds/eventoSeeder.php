<?php

use Illuminate\Database\Seeder;

class eventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('evento')->insert([

            'hora' => '10:00',
            'fecha' => '16/02/2019',
            'descripcion' => 'Agus',
            'id_tipo' => '2'

        ]);

        DB::table('evento')->insert([

            'hora' => '12:00',
            'fecha' => '16/02/2019',
            'descripcion' => 'Guillermo',
            'id_tipo' => '1'

        ]);

    }
}
