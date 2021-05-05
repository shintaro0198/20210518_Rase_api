<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class genresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'id' => 1,
            'genre_name' =>'居酒屋',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('genres')->insert($params);

        $params = [
            'id' => 2,
            'genre_name'=> 'イタリアン',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('genres')->insert($params);

        $params = [
            'id' => 3,
            'genre_name' => '寿司',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('genres')->insert($params);

        $params = [
            'id' => 4,
            'genre_name' => '焼肉',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('genres')->insert($params);

        $params = [
            'id' => 5,
            'genre_name' => 'ラーメン',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('genres')->insert($params);
    }
}
