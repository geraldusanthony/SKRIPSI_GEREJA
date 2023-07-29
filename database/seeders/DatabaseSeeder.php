<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('role')->insert([
            'role' => 'Admin',
        ]);
        DB::table('role')->insert([
            'role' => 'Umat',
        ]);
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('Alfonbotak'),
        ]);

    }
}
