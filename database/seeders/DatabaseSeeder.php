<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // administrador
        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@administrador.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'is_admin'=>1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
        // usuario
        User::create([
            'name' => 'Usuario',
            'email' => 'usuario@usuario.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
            'is_admin'=>0,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
    }
}
