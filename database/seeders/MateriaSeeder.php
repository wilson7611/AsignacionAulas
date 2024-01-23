<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materia::create([
            'nombre' => 'Base de Datos I',
            'semestre' => 'Segundo Semestre',
        ]);
        Materia::create([
            'nombre' => 'Programacion Web I',
            'semestre' => 'Tercer Semestre',
        ]);
        Materia::create([
            'nombre' => 'Ingles I',
            'semestre' => 'Primer Semestre',
        ]);

    }
}
