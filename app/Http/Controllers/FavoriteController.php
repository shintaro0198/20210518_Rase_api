<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\Favorite;
use App\Models\Genre;
use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        $now = Carbon::now()->format('Y/m/d H:i');
        $query = Favorite::query();
        $query->where('user_id', $request->user_id);
        $query->where('restaurant_id', $request->restaurant_id);
        $item = $query->first();
        if ($item) {
            $item->delete();
            return response()->json([
                'message' => 'Deleted successfully'
            ], 200);
        } else {
            $item = new Favorite;
            $item->user_id = $request->user_id;
            $item->restaurant_id = $request->restaurant_id;
            $item->created_at = $now;
            $item->updated_at = $now;
            $item->save();
            return response()->json([
                'data' => $item,
                'now' => $now,
                'message' => 'Posted successfuly'
            ], 200);
        }
    }

    public function show($user_id)
    {
        $items = Favorite::where('user_id', $user_id)->get();
        if (!$items->isEmpty()) {
            foreach($items as $item){
                $item->location =
                Location::where('id', $item->location_id)->first()->name;
                $item->genre =
                Genre::where('id', $item->genre_id)->first()->name;
                $evaluations = Evaluation::where('restaurant_id', $item->id)->get();
                if (empty($evaluation)) {
                    $sum = 0;
                    $count = 0;
                    foreach ($evaluations as $evaluation) {
                        $sum += $evaluation->rating;
                        $count += 1;
                        $item->rating = $sum / $count;
                    }
                } else {
                    $item->rating = 0;
                }
            }
            return response()->json([
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 200);
        }
    }
    
    public function sort(Request $request)
    {
        $query = Favorite::query();
        $query->where('user_id', $request->user_id);
        $query->where('restaurant_id', $request->restaurant_id);
        $item = $query->first();
        if($item){
            return response()->json([
                'data' => $item,
                'favorite' => true
            ]);
        }   else{
            return response()->json([
                'favorite' => false
            ]);
        }
        
    }
}
