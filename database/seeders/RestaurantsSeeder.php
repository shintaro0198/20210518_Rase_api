<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'name' => 'restaurant',
            'location' => 'location',
            'genre' => 'genre',
            'detail' => 'detail',
            'img'=>'img'
        ];
        DB::table('restaurants')->insert($params);

        $params = [
            'name' => 'restaurant',
            'location' => 'location',
            'genre' => 'genre',
            'detail' => 'detail',
            'img' => 'img'
        ];
        DB::table('restaurants')->insert($params);

        $params = [
            'name' => 'restaurant',
            'location' => 'location',
            'genre' => 'genre',
            'detail' => 'detail',
            'img' => 'img'
        ];
        DB::table('restaurants')->insert($params);
    }
}
