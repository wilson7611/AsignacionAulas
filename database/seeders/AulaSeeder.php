<?php

namespace Database\Seeders;

use App\Models\Aula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aula::create([
            'nombre' => 'Computo 2',
            'capacidad' => 5,
        ]);
        Aula::create([
            'nombre' => 'Computo 3',
            'capacidad' => 10,
        ]);
        Aula::create([
            'nombre' => 'Computo 2',
            'capacidad' => 20,
        ]);
    }
}
