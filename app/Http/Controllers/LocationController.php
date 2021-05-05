<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Location::all();
        return response()->json([
            'data' => $item
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $now = Carbon::now()->format('Y/m/d H:i');
        $item = new Location();
        $item->location_name = $request->location_name;
        $item->created_at = $now;
        $item->updated_at = $now;
        $item->save();
        return response()->json([
            'data' => $item,
            'message' => 'Stored successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        $item = Location::where('id', $location->id)->first();
        return response()->json([
            'data' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $now = Carbon::now()->format('Y/m/d H:i');
        $item = Location::where('id', $location->id)->first();
        $item->location_name = $request->loation_name;
        $item->updated_at = $now;
        return response()->json([
            'data' => $item,
            'message' => 'Updated sucessfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        Location::where('id',$location->id)->first()->delete();
        return response()->json([
            'message' => 'Deleted successfully'
        ]);
    }
}
