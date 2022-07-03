<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_transactions')->insert([
            [
                'name' => 'Belum Dibayar'
            ], [
                'name' => 'Menunggu Konfirmasi'
            ], [
                'name' => 'Sudah Dibayar'
            ], [
                'name' => 'Diproses'
            ], [
                'name' => 'Selesai'
            ], [
                'name' => 'Dibatalkan'
            ]
        ]);
    }
}
