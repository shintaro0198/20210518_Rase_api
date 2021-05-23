<?php

namespace App\Http\Controllers;

use App\Models\CourseMenu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class courseMenuController extends Controller
{
    public function index(){
        $item = CourseMenu::all();
        return response()->json([
            'data' => $item
        ]);
    }
    public function store(Request $request){
        $now = Carbon::now()->format('Y/m/d H:i');
        $item = new CourseMenu;
        $item->restaurant_id = $request->restaurant_id;
        $item->title = $request->title;
        $item->detail = $request->detail;
        $item->created_at = $now;
        $item->updated_at = $now;
        $item->save();
        return response()->json([
            'data' => $item,
            'message' => 'Stored successfully'
        ]);
    }
    public function show($restaurant_id){
        $item = CourseMenu::where('restaurant_id',$restaurant_id)->first();
        return response()->json([
            'data' => $item
        ]);
    }
    public function update(Request $request,$id){
        $now = Carbon::now()->format('Y/m/d H:i');
        $item = CourseMenu::where('id',$id)->first();
        $item->restaurant_id = $request->restaurant_id;
        $item->title = $request->title;
        $item->detail = $request->detail;
        $item->updated_at = $now;
        $item->save();
        return response()->json([
            'data' => $item,
            'message' => 'Updated successfully'
        ]);
    }
    public function destroy($id){
        CourseMenu::where('id',$id)->delete();
        return response()->json([
            'message' => 'Deleted successfully'
        ]);
    }
}
