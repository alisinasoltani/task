<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function inputForm() {
        return view('inputForm');
    }
}
