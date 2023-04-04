<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MataKuliah::create([
            'nama_mk' => 'Pemograman Citra',
            'Dosen' => 'MUHAMMAD QURHANUL RIZQIE, S.KOM,. M.T., PH.D.',
            'hari' => 2,
            'jam_masuk' => '10:30:00',
            'jam_selesai' => '13:00:00'
        ]);

        MataKuliah::create([
            'nama_mk' => 'Data warehouse',
            'Dosen' => 'OSVARI ARSALAN, S.KOM., M.T.',
            'hari' => 2,
            'jam_masuk' => '13:30:00',
            'jam_selesai' => '16:00:00'
        ]);

        MataKuliah::create([
            'nama_mk' => 'Kecerdasan buatan',
            'Dosen' => 'OSVARI ARSALAN, S.KOM., M.T.',
            'hari' => 3,
            'jam_masuk' => '08:00:00',
            'jam_selesai' => '10:30:00'
        ]);

        MataKuliah::create([
            'nama_mk' => 'PPLBO',
            'Dosen' => 'DESTY RODIAH, S.KOM., M.T.',
            'hari' => 3,
            'jam_masuk' => '13:30:00',
            'jam_selesai' => '16:00:00'
        ]);

        MataKuliah::create([
            'nama_mk' => 'Praktikum PPLBO',
            'Dosen' => 'DESTY RODIAH, S.KOM., M.T.',
            'hari' => 4,
            'jam_masuk' => '08:00:00',
            'jam_selesai' => '10:00:00'
        ]);

        MataKuliah::create([
            'nama_mk' => 'Etika Profesi',
            'Dosen' => 'SAMSURYADI, M.KOM., PH.D.',
            'hari' => 4,
            'jam_masuk' => '13:30:00',
            'jam_selesai' => '16:00:00'
        ]);

        MataKuliah::create([
            'nama_mk' => 'Pemograman Web II',
            'Dosen' => 'OSVARI ARSALAN, S.KOM., M.T.',
            'hari' => 5,
            'jam_masuk' => '10:30:00',
            'jam_selesai' => '13:00:00'
        ]);

        MataKuliah::create([
            'nama_mk' => 'Teori bahasa dan otomata',
            'Dosen' => 'YUNITA, S.SI, M.CS.',
            'hari' => 5,
            'jam_masuk' => '13:30:00',
            'jam_selesai' => '16:00:00'
        ]);

        MataKuliah::create([
            'nama_mk' => 'Rekayasa perangkat lunak',
            'Dosen' => 'OSVARI ARSALAN, S.KOM., M.T.',
            'hari' => 6,
            'jam_masuk' => '08:00:00',
            'jam_selesai' => '10:30:00'
        ]);
    }
}