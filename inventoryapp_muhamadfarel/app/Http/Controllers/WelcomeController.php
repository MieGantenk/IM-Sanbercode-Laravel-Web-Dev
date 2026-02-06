<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(Request $request) {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        return view('src.template.welcome', [
            'firstName'=>$firstName,
            'lastName'=>$lastName
        ]);
    }
}
