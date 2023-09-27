<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('supplier')->insert([
            'nama_supplier' => 'Nama Supplier 1',
            'alamat_supplier' => 'Alamat Supplier 1',
            'no_telp_supplier' => '08123456789',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('supplier')->insert([
            'nama_supplier' => 'Nama Supplier 2',
            'alamat_supplier' => 'Alamat Supplier 2',
            'no_telp_supplier' => '083464327432',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
