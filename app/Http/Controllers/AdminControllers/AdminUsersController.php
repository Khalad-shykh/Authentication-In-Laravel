<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminUsersController extends Controller
{
    public function ShowUsers()
    {
        $users = User::all();
        $data = compact('users');
        return view("AdminDashboard.table")->with($data);
    }

}
