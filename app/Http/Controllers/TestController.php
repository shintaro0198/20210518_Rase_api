<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request){
        return response()->json([
            'data' => $request->content
        ]);
    }
}
