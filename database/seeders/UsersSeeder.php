<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $params = [
            'name' => 'test1',
            'email' => 'test1',
            'hashed_password' => 'test1'
        ];
        DB::table('users')->insert($params);

        $params = [
            'name' => 'test2',
            'email' => 'test2',
            'hashed_password' => 'test2'
        ];
        DB::table('users')->insert($params);

        $params = [
            'name' => 'test3',
            'email' => 'test3',
            'hashed_password' => 'test3'
        ];
        DB::table('users')->insert($params);
    }
}
