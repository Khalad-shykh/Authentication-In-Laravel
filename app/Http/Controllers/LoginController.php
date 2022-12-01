<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login_view()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        $attributes = $request->validate(
            [
                "email"=>"required|email",
                "password"=>"required|min:8"
            ]
            );
            if(auth()->attempt($attributes))
            {
                return redirect("/")->with("success","Welcome Back.");
            }
            
            return back()->withInput()->withErrors(["password" => "Provided email or password incorrect !"]);
    }

    public function logout()
    {
        $user = new User;
        auth()->logout($user);
        return redirect("/")->with('success','Good Bye.');
    }
}
