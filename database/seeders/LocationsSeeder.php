<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class locationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'id' =>  1 ,
            'location_name' => '北海道',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  2 ,
            'location_name' => '青森県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  3 ,
            'location_name' => '岩手県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  4 ,
            'location_name' => '宮城県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  5 ,
            'location_name' => '秋田県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   6,
            'location_name' => '山形県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  7 ,
            'location_name' => '福島県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  8 ,
            'location_name' => '茨城県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   9,
            'location_name' => '栃木県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   10,
            'location_name' => '群馬県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   11,
            'location_name' => '埼玉県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   12,
            'location_name' => '千葉県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   13,
            'location_name' => '東京都',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   14,
            'location_name' => '神奈川県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   15,
            'location_name' => '新潟県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   16,
            'location_name' => '富山県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  17 ,
            'location_name' => '石川県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  18 ,
            'location_name' => '福井県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   19,
            'location_name' => '山梨県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  20 ,
            'location_name' => '長野県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  21 ,
            'location_name' => '岐阜県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  22 ,
            'location_name' => '静岡県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);

        $params = [
            'id' =>  23 ,
            'location_name' => '愛知県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);

        $params = [
            'id' =>  24 ,
            'location_name' => '三重県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  25 ,
            'location_name' => '滋賀県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  26 ,
            'location_name' => '京都府',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   27,
            'location_name' => '大阪府',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   28,
            'location_name' => '兵庫県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   29,
            'location_name' => '奈良県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   30,
            'location_name' => '和歌山県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   31,
            'location_name' => '鳥取県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   32,
            'location_name' => '島根県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   33,
            'location_name' => '岡山県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   34,
            'location_name' => '広島県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   35,
            'location_name' => '山口県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   36,
            'location_name' => '徳島県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   37,
            'location_name' => '香川県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   38,
            'location_name' => '愛媛県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   39,
            'location_name' => '高知県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>   40,
            'location_name' => '福岡県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  41 ,
            'location_name' => '佐賀県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  42 ,
            'location_name' => '長崎県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  43 ,
            'location_name' => '熊本県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  44 ,
            'location_name' => '大分県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  45 ,
            'location_name' => '宮崎県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);

        $params = [
            'id' =>  46 ,
            'location_name' => '鹿児島県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
        
        $params = [
            'id' =>  47 ,
            'location_name' => '沖縄県',
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('locations')->insert($params);
    }
}
