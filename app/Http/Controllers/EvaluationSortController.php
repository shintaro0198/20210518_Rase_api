<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationSortController extends Controller
{
    public function restaurantSort($restaurant_id){
        $item = Evaluation::where('restaurant_id',$restaurant_id)->get();
        if($item){
            return response()->json([
                'data' => $item
            ]);
        }   else{
            return response()->json([
                'message' => 'Not found'
            ]);
        }
    }
    public function userSort(Request $request){
        $item = Evaluation::where('user_id', $request->user_id)->get();
        if ($item) {
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
