<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function landingPage()
    {
        return view("landing-page");
    }
}
