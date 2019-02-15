<?php

use Illuminate\Database\Seeder;

class tipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo')->insert([

            'id_ciudad' => '1',
            'nombre' => 'Parking',
            'plazas' => '20'

        ]);


        DB::table('tipo')->insert([

            'id_ciudad' => '1',
            'nombre' => 'Realidad Virtual'

        ]);

        DB::table('tipo')->insert([

            'id_ciudad' => '1',
            'nombre' => 'Sala Reuniones'

        ]);
        DB::table('tipo')->insert([

            'id_ciudad' => '1',
            'nombre' => 'Salon de actos'

        ]);
    }
}
