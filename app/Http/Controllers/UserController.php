<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRegistration;

class UserController extends Controller
{

    //
    public function sigup(Request $request)
    {
        $request->validate([
            "name" => "required|min:3",
            "email"=>"required|email|unique:user_registration",
            "password" => "required|min:6|max:16",
            "confirm_password" => "required_with:password|same:password|min:6"
        ]);
        return $request;
    }
}
