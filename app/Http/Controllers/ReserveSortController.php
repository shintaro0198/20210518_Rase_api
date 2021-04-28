<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReserveSortController extends Controller
{   
    public function show($user_id){
        $item = Reservation::where('user_id', $user_id)->get();
        if ($item) {
            return response()->json([
                'data' => $item
            ]);
        } else {
            return response()->json([
                'message' => 'Not found'
            ]);
        }
    }
    public function sort(Request $request)
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
