<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([
            [
                'destination_id' => 1,
                'img_gallery_original' => 'foto-pantai-ora',
                'img_gallery_encrypted' => 'foto-pantai-ora'
            ],
        ]);
    }
}
