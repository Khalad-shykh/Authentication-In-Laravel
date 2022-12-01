<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register_form()
    {
        return view("RegisterationForm");
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'name'=>'required|min:4',
                'email'=>'required|email',
                'password'=>'required|min:8',
                'confirm_pass'=>'required|same:password'
            ]
            );
            $user = new User;
            $user->name = $request["name"];
            $user->email = $request["email"];
            $user->password = bcrypt($request["password"]);
            $user->save();
            
            auth()->login($user);
            session()->flash('success','Registeration Succesfull.');
            return redirect("/home");
    }

    
}
