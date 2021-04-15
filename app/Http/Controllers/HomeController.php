<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function test()
    {
        return 'gahahha';
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function mainLayout()
    {
        return view('mainLayout');
    }

    public function customIndex()
    {
        return view('index');
    }



    public function showMachine()
    {
        return view('showMachine');
    }

    public function references()
    {
        return view('references');
    }
}
