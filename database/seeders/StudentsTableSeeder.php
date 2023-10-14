<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;



class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Crear 10 estudiantes con datos de ejemplo
        for ($i = 1; $i <= 10; $i++) {
            Student::create([
                'document_Number' => 'Document' . $i,
                'name' => 'Estudiante ' . $i,
                'sex' => ($i % 2 == 0) ? 'M' : 'F', // Alternar entre masculino y femenino
                'marital_status' => ($i % 2 == 0) ? 'C' : 'S', // Alternar entre casado y soltero
                'date_of_birth' => '1990-05-' . (10 + $i),
                'residence_address' => 'Calle ' . (100 + $i) . ', Ciudad, País',
                'stratum' => rand(1, 6), // Generar un valor aleatorio entre 1 y 6 para el estrato
                'residence_type' => ($i % 2 == 0) ? 'Urbana' : 'Rural', // Alternar entre urbana y rural
                'height' => rand(150, 190), // Generar una altura aleatoria en cm
                'institutional_email' => 'estudiante' . $i . '@example.com',
                'cell_phone_number' => '123-456-789' . $i,
            ]);

        }

    }
}
