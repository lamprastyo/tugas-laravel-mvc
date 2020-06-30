<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form() {
        return view('form');
    }

    public function sapa() {
        return "Halo";
    }

    public function sapa_post(Request $request) {
        // dd($request->all());
        $nama = $request['nama'];
        return "$nama";
    }
}
