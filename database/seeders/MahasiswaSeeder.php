<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert(
            array(
                ['nama' => 'Doni Damada', 'nim' => '431672', 'no_wa' => '087283192834', 'created_at' => '2024-05-19 07:00:00'],
                ['nama' => 'Andi Riawan', 'nim' => '431673', 'no_wa' => '081234563723', 'created_at' => '2024-05-19 07:00:00']
            )
            );
    }
}
