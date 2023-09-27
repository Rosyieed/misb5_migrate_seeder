<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembelian')->insert([
            'id_pelanggan' => 3,
            'id_ban' => 2,
            'jumlah_ban' => 2,
            'tanggal_pembelian' => Carbon::parse('2021-01-01'),
            'total_pembelian' => 2000000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('pembelian')->insert([
            'id_pelanggan' => 4,
            'id_ban' => 3,
            'jumlah_ban' => 1,
            'tanggal_pembelian' => Carbon::parse('2021-01-01'),
            'total_pembelian' => 2000000,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
