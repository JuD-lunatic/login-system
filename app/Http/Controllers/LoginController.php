<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $role = 'unknown';

            if ($user->role == 'student') {
                $role = 'student';
            } elseif ($user->role == 'college_poc') {
                $role = 'collegepoc';
            } elseif ($user->role == 'poc_head') {
                $role = 'pochead';
            }

            return response()->json(['role' => $role, 'message' => 'Login successful'], 200);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
