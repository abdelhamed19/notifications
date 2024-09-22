<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where("email", $request->email)->first();
        if (!$user && Hash::check($request->password, $user->password)) {
            return redirect()->back()->with("error","");
        }
        Auth::login($user);
        session()->regenerate();
        return redirect()->route("home");
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route("home");
    }
}
