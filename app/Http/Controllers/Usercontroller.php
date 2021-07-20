<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function validationEmail(Request $request)
    {
        $email = $request->email;
        $isEmail = true;
        if (empty($email)|| !filter_var($email,FILTER_VALIDATE_EMAIL)){
            $isEmail = true;
        }
        return view('index',compact('isEmail'));
    }
}
