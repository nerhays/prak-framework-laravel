<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class dosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosen')->insert(
            array(
                ['nama' => 'Dedy Wicaksono', 'nip' => '167243', 'alamat' => 'Rungkut Tengah', 'created_at' => '2024-05-28 07:00:00'],
                ['nama' => 'Fikri Hermawan', 'nip' => '167244', 'alamat' => 'Mejoyo Selatan', 'created_at' => '2024-05-28 07:00:00']
            )
            );
    }
}
