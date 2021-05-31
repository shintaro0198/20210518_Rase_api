<?php

namespace App\Http\Controllers;

use App\Models\CourseMenu;
use App\Models\Evaluation;
use App\Models\Favorite;
use App\Models\Genre;
use App\Models\Location;
use App\Models\Map;
use App\Models\Restaurant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $items = Restaurant::all();
        foreach($items as $item){
            $item->location =
            Location::where('id', $item->location_id)->first()->name;
            $item->genre =
            Genre::where('id', $item->genre_id)->first()->name;
            $evaluations = Evaluation::where('restaurant_id',$item->id)->get();
            if(empty($evaluation)){
                $sum = 0;
                $count = 0;
                foreach($evaluations as $evaluation){
                    $sum += $evaluation->rating;
                    $count += 1;
                    $item->rating = $sum/$count;
                }
            } else{
                $item->rating = 0;
            }
        }
        return response()->json([
            'data' => $items,
        ], 200);
    }
    public function store(Request $request)
    {
        $now = Carbon::now()->format('Y/m/d H:i');
        $item = new Restaurant;
        $item->name = $request->name;
        $item->lat = $request->lat;
        $item->ing = $request->ing;
        $item->location_id = $request->location_id;
        $item->genre_id = $request->genre_id;
        $item->detail = $request->detail;
        $item->img = $request->img;
        $item->created_at = $now;
        $item->updated_at = $now;
        $item->save();
        if ($item) {
            return response()->json([
                'data' => $item,
                'message' => 'Stored successfully'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Request failed'
            ], 404);
        }
    }
    public function show(Restaurant $restaurant)
    {
        $item = Restaurant::where('id', $restaurant->id)->first();
        if ($item) {
            $item->location =
            Location::where('id', $item->location_id)->first()->name;
            $item->genre =
            Genre::where('id', $item->genre_id)->first()->name;
            if(CourseMenu::where('restaurant_id', $item->id)){
                $item->course_menu = CourseMenu::where('restaurant_id', $item->id)->first();
            }
            if(Evaluation::where('restaurant_id',$item->id)){
                $item->review = Evaluation::where('restaurant_id', $item->id)->get();
            }
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
            return response()->json([
                'data' => $item,
                'message' => 'Request is approved'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found'
            ], 404);
        }
    }
    public function update(Restaurant $restaurant,Request $request){
        $item = Restaurant::where('id',$restaurant->id)->first();
        $now = Carbon::now()->format('Y/m/d H:i');
        $item->kana_name = $request->kana_name;
        $item->updated_at = $now;
        $item->save();
        return response()->json([
            'data' => $item,
            'message' => 'Updated successfully'
        ]);
    }
    public function destroy(Restaurant $restaurant)
    {
        Restaurant::where('id', $restaurant->id)->first()->delete();
        return response()->json([
            'message' => 'Deleted successfully'
        ], 200);
    }
}
