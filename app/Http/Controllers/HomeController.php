<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 3) {
            return redirect()->route('admin');
        }elseif (Auth::user()->role == 2) {
            return redirect()->route('home');
        }else {
            return redirect()->route('payment');
        }
    }
    public function home()
    {
        return view('dashboard/store');
    }
    public function payment()
    {
        return view('payment');
    }
}
