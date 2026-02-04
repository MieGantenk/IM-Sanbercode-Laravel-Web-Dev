<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function signUp() {
        return view('signUp');
    }

    public function welcome(Request $request) {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        return view('welcome', [
            'firstName' => $firstName,
            'lastName' => $lastName
        ]);
    }
}
