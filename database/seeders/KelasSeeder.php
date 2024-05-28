<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert(
            array(
                ['nama_kelas' => 'TI A1'],
                ['nama_Kelas' => 'TI A2']
            )
            );
    }
}
