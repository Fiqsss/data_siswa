<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        Siswa::create(
            [
                'lembaga' => 'latiseducation',
                'nis' => '1234567',
                'nama_siswa' => 'arofiq',
                'email' => 'sarofiqs@gmail.com',
                'foto' => '1.jpg',
            ],
        );
        Siswa::create(
            [
                'lembaga' => 'tutorindonesia',
                'nis' => '22345467',
                'nama_siswa' => 'wahyu',
                'email' => 'wahyu@gmail.com',
                'foto' => '2.jpg',
            ],
        );
        Siswa::create(
            [
                'lembaga' => 'latiseducation',
                'nis' => '454575443',
                'nama_siswa' => 'fadil',
                'email' => 'fadil@gmail.com',
                'foto' => '3.jpg',
            ],
        );
        Siswa::create(
            [
                'lembaga' => 'latiseducation',
                'nis' => '123423',
                'nama_siswa' => 'fadil',
                'email' => 'ita@gmail.com',
                'foto' => '4.jpg',
            ],
        );
        Siswa::create(
            [
                'lembaga' => 'tutorindonesia',
                'nis' => '789567456',
                'nama_siswa' => 'fadil',
                'email' => 'rina@gmail.com',
                'foto' => '5.jpg',
            ],
        );
        Siswa::create(
            [
                'lembaga' => 'tutorindonesia',
                'nis' => '6776565',
                'nama_siswa' => 'yoyok',
                'email' => 'yoyok@gmail.com',
                'foto' => '6.jpg',
            ],
        );
        User::create(
            [
                'name' => 'aro',
                'email' => 'sarofiqs@gmail.com',
                'password' => '$2y$10$DSWfAEuLoVYQD8ZOxw/jaOoLIZA1iVIj4YSITGauk4vmoZgOLcduG',
            ],
        );
        User::create(
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$DSWfAEuLoVYQD8ZOxw/jaOoLIZA1iVIj4YSITGauk4vmoZgOLcduG',
            ],
        );

    }
}
