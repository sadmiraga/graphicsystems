<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class machineController extends Controller
{
    public function newMachine()
    {
        $categories = category::all();
        return view('admin.newMachine')->with('categories', $categories);
    }
}
