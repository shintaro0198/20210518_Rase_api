<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Genre::all();
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
        $item = new Genre;
        $item->genre_name = $request->genre_name;
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
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        $item = Genre::where('id',$genre->id)->first();
        return response()->json([
            'data' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genre $genre)
    {
        $now = Carbon::now()->format('Y/m/d H:i');
        $item = Genre::where('id',$genre->id)->first();
        $item->genre_name = $request->genre_name;
        $item->updated_at = $now;
        return response()->json([
            'data' => $item,
            'message' => 'Updated sucessfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        Genre::where('id',$genre->id)->first()->destroy();
        return response()->json([
            'message' => 'Deleted successfully'
        ]);
    }
}
