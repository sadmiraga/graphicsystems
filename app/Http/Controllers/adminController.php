<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{




    public function dashboard()
    {
        return 'admin';
    }

    public function test()
    {
        return view('layouts.adminDashboard');
    }
}
