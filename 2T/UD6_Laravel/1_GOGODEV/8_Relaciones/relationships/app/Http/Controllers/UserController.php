<?php

namespace App\Http\Controllers;


use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::find(1);
        return view('index', compact('user'));
    }
}
