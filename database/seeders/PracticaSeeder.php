<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PracticaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fechas_inicio = ['2023-10-11 7:00:00', '2023-10-11 8:00:00', '2023-10-11 9:00:00', '2023-10-11 10:00:00', '2023-10-11 11:00' ];
       

        foreach($fechas_inicio as $fecha_inicio){
            DB::table('practicas')->insert([
                'titulo' => 'Practica 1',
                'descripcion' => 'Practica 1',
                'fecha_inicio' => $fecha_inicio
            ]);
        }
    }
}
