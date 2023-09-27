<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelanggan')->insert([
            'nama_pelanggan' => 'Nama Pelanggan 1',
            'alamat_pelanggan' => 'Alamat Pelanggan 1',
            'no_telp_pelanggan' => '08123456789',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('pelanggan')->insert([
            'nama_pelanggan' => 'Nama Pelanggan 2',
            'alamat_pelanggan' => 'Alamat Pelanggan 2',
            'no_telp_pelanggan' => '08234567890',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
