<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Cliente',
            'tipo' => '1',
            'email' => 'cliente@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Administrador',
            'tipo' => '2',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

    }
}
