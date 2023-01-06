<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function ShowProfile()
    {
        $id = auth()->user()->id;
        $user = User::find($id);
        $data = compact('user');
        return view("ViewProfile")->with($data);
    }

    public function ProfileData($id)
    {
     
        $user = User::find($id);
        if(!is_null($user))
        {
            $data = compact('user');
            return view("UpdateProfile")->with($data);
        }
        return redirect("/");

    
    }

    public function UpdateProfile(Request $request , $id)
    {
        $request->validate(
            [
            "name" => "required",
            "email" => "required|email",
            "image"=> "image|mimes:png,jpg"
            ]
            );
            $user = User::find($id);
            $user->name = $request["name"];
            $user->email = $request["email"];
            if($request->hasfile("image"))
            {
                $destination = "uploads/".$user->image;
                if($user->image != "no-image.jpg")
                {
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
            }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().".".$ext;
                $file->move("uploads/",$filename);
                $user->image = $filename;
            }
            $user->save();
            return redirect("/profile");

    }
}
