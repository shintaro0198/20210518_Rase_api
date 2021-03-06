<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $item = User::where('email', $request->email)->first();
        if (Hash::check($request->password,$item->hashed_password )) {
            return response()->json([
                'auth' => true,
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'auth' => false
            ], 404);
        }
    }
}
