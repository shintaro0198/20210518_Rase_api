<?php

namespace App\Http\Controllers;

use App\Models\ExpiredReservation;
use Illuminate\Http\Request;

class ExpiredReservationController extends Controller
{
    public function index(){
        $items = ExpiredReservation::all();
        return response()->json([
            'data' => $items
        ]);
    }
}
