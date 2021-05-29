<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\User;
use Illuminate\Http\Request;

class EvaluationSortController extends Controller
{
    public function restaurantSort($restaurant_id){
        $items = Evaluation::where('restaurant_id',$restaurant_id)->get();
        if($items){
            foreach($items as $item){
                $item->user_name = User::where('id',$item->user_id)->first()->name;
            }
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
        $items = Evaluation::where('user_id', $request->user_id)->get();
        if ($items) {
            foreach($items as $item){
                $item->user_name = User::where('id',$item->user_id)->first()->name;
            }
            return response()->json([
                'data' => $item
            ]);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }
}
