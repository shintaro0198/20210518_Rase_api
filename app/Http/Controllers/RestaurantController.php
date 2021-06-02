<?php

namespace App\Http\Controllers;

use App\Models\CourseMenu;
use App\Models\Evaluation;
use App\Models\Favorite;
use App\Models\Genre;
use App\Models\Location;
use App\Models\Map;
use App\Models\Restaurant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function index()
    {
        $items = DB::select(DB::raw(file_get_contents(database_path('Sql/restaurant/index.sql'))));
        foreach($items as $item){
            $evaluations = Evaluation::where('restaurant_id',$item->id)->get();
            $item->rating = $evaluations->avg('rating');
            if($item->rating == null){
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
        $items = DB::select(DB::raw(file_get_contents(database_path('Sql/restaurant/show.sql'))."{$restaurant->id};"));
        $item = $items[0];
        $item->course_menu = CourseMenu::where('restaurant_id',$restaurant->id)->first();
        $evaluations = Evaluation::where('restaurant_id', $restaurant->id)->get();
        foreach($evaluations as $evaluation){
            $evaluation->user_name = User::where('id',$evaluation->user_id)->first()->name;
        }
        $item->review = $evaluations;
        $item->rating = $evaluations->avg('rating');
        if ($item->rating == null) {
            $item->rating = 0;
        }
        return response()->json([
            'data' => $item,
        ]);
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
