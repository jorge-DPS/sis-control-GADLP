<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Insertar los tipos de usuario en la tabla 'user_types'
        DB::table('user_types')->insert([
            [
                'type_user' => 0, // 0 = admin
                'description' => 'Administrador',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'type_user' => 1, // 1 = technician
                'description' => 'Técnico de soporte',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
