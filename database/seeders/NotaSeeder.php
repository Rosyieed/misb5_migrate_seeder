<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nota')->insert([
            'id_karyawan' => 1,
            'id_pembelian' => 1,
            'tanggal_nota' => Carbon::parse('2023-9-27'),
            'total_pembelian' => 2000000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('nota')->insert([
            'id_karyawan' => 2,
            'id_pembelian' => 2,
            'tanggal_nota' => Carbon::parse('2023-9-28'),
            'total_pembelian' => 2000000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
    }
}
