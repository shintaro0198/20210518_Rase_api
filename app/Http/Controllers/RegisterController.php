<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register(Request $request)
    {   
        $now = Carbon::now()->format('Y/m/d H:i');
        $item = new User;
        $item->name = $request->name;
        $item->email = $request->email;
        $item->hashed_password = Hash::make($request->password);
        $item->created_at = $now;
        $item->updated_at = $now;
        $item->save();
        if ($item) {
            return response()->json([
                'message' => 'Account was created successfully',
                'data' => $item,
                'now' => $now
            ]);
        } else {
            return response()->json([
                'message' => 'Request failed'
            ], 404);
        }
    }
}
