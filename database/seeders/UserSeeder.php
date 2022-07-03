<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Pratama Ramadhani Wijaya',
                'email' => 'pratamaramadhani059@gmail.com',
                'password' => bcrypt('12345678'),
                'phone' => '085815554360',
                'address' => 'Jl Manyar Tegal 1-A',
                'city' => 'Surabaya',
                'roles' => 1,
                'img_user_original' => null,
                'img_user_encrypted' => null
            ], [
                'name' => 'Andhika Juliawan',
                'email' => 'andhikajuliawan@gmail.com',
                'password' => bcrypt('12345678'),
                'phone' => '081336376818',
                'address' => 'Jl Ngagel',
                'city' => 'Surabaya',
                'roles' => 2,
                'img_user_original' => null,
                'img_user_encrypted' => null
            ], [
                'name' => 'Haniyah Alkalimah',
                'email' => 'haniyah@gmail.com',
                'password' => bcrypt('12345678'),
                'phone' => '081334344571',
                'address' => 'Jl Sumatra',
                'city' => 'Sidoarjo',
                'roles' => 2,
                'img_user_original' => null,
                'img_user_encrypted' => null
            ]
        ]);
    }
}
