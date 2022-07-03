<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            [
                'kode' => 'ABC112',
                'user_id' => 2,
                'destination_id' => 1,
                'status_id' => 1,
                'departure_date' => Carbon::now(),
                'return_date' => Carbon::now(),
                'quantity' => 1,
                'total' => 12000000,
                'img_transaction_original' => 'foto-transaction',
                'img_transaction_encrypted' => 'foto-transaction'
            ],
        ]);
    }
}
