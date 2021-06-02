<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReserveSortController extends Controller
{   
    public function userSort($user_id){
        $items = DB::select(DB::raw(file_get_contents(database_path('Sql/reservation/userSort.sql'))."{$user_id};"));
        if ($items) {
            $now = Carbon::now()->format('Y-m-d');
            foreach($items as $item){
                if($item->date<$now){
                    $param = [
                        'user_id' => $item->user_id,
                        'restaurant_id' => $item->restaurant_id,
                        'date' => $item->date,
                        'created_at' => $now,
                        'updated_at' => $now
                    ];
                    DB::table('expired_reservations')->insert($param);
                    $item->delete();
                }
                $item->showCancel = false;
            }
            return response()->json([
                'data' => $items
            ]);
        } else {
            return response()->json([
                'message' => 'Not found'
            ]);
        }
    }
    public function restaurantSort(Request $request)
    {
        $query = Reservation::query();
        $query->where('user_id', $request->user_id);
        $query->where('restaurant_id', $request->restaurant_id);
        $item = $query->first();
        if ($item) {
            return response()->json([
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }
}
