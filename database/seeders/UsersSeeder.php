<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'hashed_password' => Hash::make('hased_password'),
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('users')->insert($params);

        $params = [
            'name' => 'test2',
            'email' => 'test2',
            'hashed_password' => Hash::make('hased_password'),
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('users')->insert($params);

        $params = [
            'name' => 'test3',
            'email' => 'test3',
            'hashed_password' => Hash::make('hased_password'),
            'created_at' => Carbon::now()->format('Y/m/d H:i'),
            'updated_at' => Carbon::now()->format('Y/m/d H:i')
        ];
        DB::table('users')->insert($params);
    }
}
