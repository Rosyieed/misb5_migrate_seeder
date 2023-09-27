<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;

class BanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ban')->insert([
            'id_supplier' => 3,
            'merk_ban' => 'Bridgestone',
            'ukuran_ban' => 25,
            'harga_ban' => random_int(100000,999999),
            'stok_ban' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('ban')->insert([
            'id_supplier' => 4,
            'merk_ban' => 'Hankook',
            'ukuran_ban' => 25,
            'harga_ban' => random_int(100000,999999),
            'stok_ban' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
