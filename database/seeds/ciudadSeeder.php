<?php

use Illuminate\Database\Seeder;

class ciudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()  {


        DB::table('ciudad')->insert([

            'nombre' => 'Salamanca',
            'semana_habil' => 'L-V',
            'limitacion_visualizacion' => '5',
            'hora_inicio' => '8:00',
            'hora_fin' => '18:00',
            'duracion_evento' => '1'

        ]);

        DB::table('ciudad')->insert([

            'nombre' => 'Madrid',
            'semana_habil' => 'L-J',
            'limitacion_visualizacion' => '4',
            'hora_inicio' => '8:00',
            'hora_fin' => '20:00',
            'duracion_evento' => '1'

        ]);

    }
}
