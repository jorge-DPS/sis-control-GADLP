<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'user_type_id' => 1, // Administrador
                'name' => 'Admin',
                'last_name' => 'Principal',
                'email' => 'admin@admin.com',
                'identity_card' => '123456789',
                'phone' => '700000001',
                'password' => Hash::make('admin123456'),
                // 'state' => ,
                'photo' => null,
                'cod_user' => 'AP',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
