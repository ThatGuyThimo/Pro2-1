<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    public function register() {
        dd("kaas");
        return view("auth/register");
    }
}
