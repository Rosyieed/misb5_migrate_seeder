<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('karyawan')->insert([
            'nama_karyawan' => 'Nama Supplier 1',
            'alamat_karyawan' => 'Alamat Supplier 1',
            'jabatan_karyawan' => 'Jabatan Supplier 1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('karyawan')->insert([
            'nama_karyawan' => 'Nama Supplier 2',
            'alamat_karyawan' => 'Alamat Supplier 2',
            'jabatan_karyawan' => 'Jabatan Supplier 2',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
