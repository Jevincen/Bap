<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table ('matakuliahs')->insert( [
            ['kodeMatakuliah' => 'MK001', 
            'namaMatakuliah' => 'Pemrograman Aplikasi Bisnis' ,
            'sks' => 4],
            ['kodeMatakuliah' => 'MK002', 
            'namaMatakuliah' => 'Audit SI' ,
            'sks' => 4],
            ['kodeMatakuliah' => 'MK003', 
            'namaMatakuliah' => 'Pemrograman Aplikasi Bisnis' ,
            'sks' => 4]
        ]
        );
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 50; $i++) {
            DB::table('mahasiswas')->insert([
                'studentID' => '03000811'&$i,
                'nama' =>$faker->name,
                'tahunMasuk' => '2021',
                'jurusan' => $faker->address
            ]);
        }
    }
}