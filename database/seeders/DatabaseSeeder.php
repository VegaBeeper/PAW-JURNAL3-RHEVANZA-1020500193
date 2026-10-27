<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        User::updateOrCreate(
            ['email' => 'budi.santoso@celoe.test'],
            [
                'name' => 'Dr. Ir. Budi Santoso, M.T.',
                'password' => Hash::make('admin123'),
                'role' => 'dosen',
                'nomor_induk' => '0801012015041001',
            ],
        );

        User::updateOrCreate(
            ['email' => 'rhevanza.ramadiandra@celoe.test'],
            [
                'name' => 'Rhevanza Ramadiandra Djatmiko',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
                'nomor_induk' => '1302240143',
            ],
        );
    }
}
