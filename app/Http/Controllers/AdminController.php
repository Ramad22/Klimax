<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view("Admin/dashboard");
    }
    public function dataWarga()
    {
        return view("Admin/data-warga");
    }
    public function jadwalRonda()
    {
        return view("Admin/jadwal-ronda");
    }
}
