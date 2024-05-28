<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matakuliah')->insert(
            array(
                ['nama_mk' => 'Pemrograman Web Berbasis Framework'],
                ['nama_mk' => 'Basis Data']
            )
            );
    }
}
