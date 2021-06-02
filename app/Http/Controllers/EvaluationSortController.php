<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EvaluationSortController extends Controller
{
    public function restaurantSort($restaurant_id){
        $items = DB::select(DB::raw(file_get_contents(database_path('Sql/evaluation/restaurantSort.sql'))."{$restaurant_id};"));
        if($items){
            return response()->json([
                'data' => $items
            ]);
        }   else{
            return response()->json([
                'message' => 'Not found'
            ]);
        }
    }
    public function userSort(Request $request){
        $items = DB::select(DB::raw(file_get_contents(database_path('Sql/evaluation/userSort.sql'))."{$request->user_id}"));
        if ($items) {
            foreach($items as $item){
                $item->showEdit = false;
                $item->showVerification = false;
            }
            return response()->json([
                'data' => $items
            ]);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }
}
