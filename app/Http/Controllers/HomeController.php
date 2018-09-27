<?php

namespace App\Http\Controllers;

use Auth;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // switch (Auth::user()->role) {
        //     case 2:
        //         return view('home.admin');
        //         break;
        //     case 1:
        //         return view('home.app');
        //         break;
        //     default:
        //         return view('home.default');
        //         break;
        // }
        return view('home.default');
    }
}
