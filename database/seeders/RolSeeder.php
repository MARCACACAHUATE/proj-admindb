<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Administrador', 'Maestro', 'Alumno'];

        foreach($roles as $rol){
            DB::table('roles')->insert([
                'tipo' => $rol
            ]);
        }
    }
}
