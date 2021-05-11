<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Carbon\Carbon;
use Facade\Ignition\QueryRecorder\Query;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Evaluation::all();
        return response()->json([
            'data' => $item
        ]);
    }

    public function store(Request $request)
    {
        $now = Carbon::now()->format('Y/m/d H:i');
        $query = Evaluation::query();
        $query->where('user_id',$request->user_id);
        $query->where('restaurant_id',$request->restaurant_id);
        $item = $query->first();
        $item = new Evaluation;
        if($item){
            $item->rating = $request->rating;
            $item->content = $request->content;
            $item->updated_at = $now;
            $item->save();
            return response()->json([
                'data' => $item,
                'message' => 'Updated successfully'
            ]);
        }   else{
            $item->user_id = $request->user_id;
            $item->restaurant_id = $request->restaurant_id;
            $item->rating = $request->rating;
            $item->content = $request->content;
            $item->created_at = $now;
            $item->updated_at = $now;
            $item->save();
            return response()->json([
                'data' => $item,
                'message' => 'Created successfully'
            ]);
        }        
    }

    public function show(Evaluation $evaluation)
    {
        $item = Evaluation::where('user_id',$evaluation->id)->first();
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

    public function update(Request $request, Evaluation $evaluation)
    {   
        $now = Carbon::now()->format('Y/m/d H:i');
        $item = Evaluation::where('id',$evaluation->id)->first();
        $item->rating = $request->rating;
        $item->content = $request->content;
        $item->updated_at = $now;
        if($item){
            return response()->json([
                'data' => $item,
                'message' => 'Updated successfully'
            ]);
        }   else{
            return response()->json([
                'message' => 'Not found'
            ]);
        }
    }

    public function destroy(Evaluation $evaluation)
    {
        $item = Evaluation::where('id',$evaluation->id)->first()->delete();
        return response()->json([
            'message' => 'Deleted successfully'
        ]);
    }
}
