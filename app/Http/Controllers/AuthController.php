<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function view_form() {
        return view('form');
    }

    public function view_welcome(Request $request) {
        $fnama = $request['fname'];
        $lnama = $request['lname'];
        return view('welcomes', compact('fnama','lnama'));
    }
}
