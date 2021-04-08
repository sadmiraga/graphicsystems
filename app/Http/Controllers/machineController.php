<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class machineController extends Controller
{
    public function newMachine()
    {
        return view('admin.newMachine');
    }
}
