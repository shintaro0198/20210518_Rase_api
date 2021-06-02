<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use App\Models\Genre;
use App\Models\Location;
use App\Models\Restaurant;
use Doctrine\DBAL\Query;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $query = Restaurant::query();
        if($request->location==='All area'){
            $query->get();
        }   else{
            $query->where('location_id',Location::where('name',$request->location)->first()->id)->get();
        }
        if($request->genre==='All genre'){
            $query->get();
        }   else{
            $query->where('genre_id',Genre::where('name',$request->genre)->first()->id)->get();
        }
        $items = $query->get();
        foreach ($items as $item) {
            $item->location =
                Location::where('id', $item->location_id)->first()->name;
            $item->genre =
                Genre::where('id', $item->genre_id)->first()->name;
            $evaluations = Evaluation::where('restaurant_id', $item->id)->get();
            $item->rating = $evaluations->avg('rating');
            if($item->rating==null){
                $item->rating = 0;
            }
        }
        if(!$items->isEmpty()){
            return response()->json([
                'data' => $items
            ]);
        }   else{
            return response()->json([
                'message' => 'Not found'
            ]);
        }
    }
}
