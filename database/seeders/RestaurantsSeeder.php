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
            'location_id' => '1',
            'genre_id' => '1',
            'detail' => 'detail',
            'img'=>'img'
        ];
        DB::table('restaurants')->insert($params);

        $params = [
            'name' => 'restaurant',
            'location_id' => '2',
            'genre_id' => '2',
            'detail' => 'detail',
            'img' => 'img'
        ];
        DB::table('restaurants')->insert($params);

        $params = [
            'name' => 'restaurant',
            'location_id' => '3',
            'genre_id' => '3',
            'detail' => 'detail',
            'img' => 'img'
        ];
        DB::table('restaurants')->insert($params);
    }
}
