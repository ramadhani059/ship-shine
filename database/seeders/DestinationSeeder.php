<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->insert([
            [
                'name' => 'Pantai Ora',
                'slug' => 'pantai-ora',
                'location' => 'Maluku, Indonesia',
                'duration' => '2 Hari 2 Malam',
                'description' => 'Pantai Ora memiliki karakteristik pantai yang berpasir putih dengan air yang sangat jernih dan tenang dengan kekayaan terumbu karang, ikan dan aneka ragam biota laut lainnya.',
                'facilities' => '2 Malam menginap sesuai pilihan hotel yang tersedia termasuk makan pagi',
                'prize' => 12000000,
                'img_destination_original' => 'foto-destinasi',
                'img_destination_encrypted' => 'foto-destinasi'
            ],
        ]);
    }
}
