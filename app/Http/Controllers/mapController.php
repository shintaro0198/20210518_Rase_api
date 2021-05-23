<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Carbon\Carbon;
use Illuminate\Http\Request;

class mapController extends Controller
{
    public function index(){
        $item = Map::all();
        return response()->json([
            'data' => $item
        ]);
    }
    public function store(Request $request){
        $now = Carbon::now()->format('Y/m/d H:i');
        $item = new Map;
        $item->restaurant_id = $request->restaurant_id;
        $item->lat = $request->lat;
        $item->ing = $request->ing;
        $item->created_at = $now;
        $item->updated_at = $now;
        $item->save();
        return response()->json([
            'data' => $item,
            'message' => 'Stored successfully'
        ]);
    }
    public function show($restaurant_id){
        $item = Map::where('restaurant_id',$restaurant_id)->first();
        return response()->json([

            'data' => $item
        ]);
    }
    public function update(Request $request,$id){
        $now = Carbon::now()->format('Y/m/d H:i');
        $item = Map::where('id',$id)->first();
        $item->restaurant_id = $request->restaurant_id;
        $item->lat = $request->lat;
        $item->ing = $request->ing;
        $item->updated_at = $now;
        $item->save();
        return response()->json([
            'data' => $item,
            'message' => 'Updated successfully'
        ]);
    }
    public function destroy($id){
        Map::where('id',$id)->first()->delete();
        return response()->json([
            'message' => 'Deleted successfully'
        ]);
    }
}

