<?php

namespace Database\Seeders;
use App\Models\Murid;
use App\Models\Kelas;
use App\Models\Teacher;
use App\Models\Mapel;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        User::factory(10)->create();
        // Murid::factory(6)->create();
        // Teacher::factory(6)->create();
        Mapel::create([
            'name'=>' Matematika '
        ]);
        Mapel::create([
            'name'=>' Bahasa Indonesia '
        ]);
        Kelas::create([
            'name'=>' 1 '
        ]);
        Kelas::create([
            'name'=>' 2 '
        ]);
        Kelas::create([
            'name'=>' 3 '
        ]);
        Kelas::create([
            'name'=>' 4 '
        ]);
        Kelas::create([
            'name'=>' 5 '
        ]);
        Kelas::create([
            'name'=>' 6 '
        ]);
    }
}
