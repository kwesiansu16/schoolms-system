<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
       
        $scholar = DB::table('scholars')->count();
        $instructor = DB::table('instructors')->count();
        $program = DB::table('programs')->count();
        $sum_fees = DB::table('fees')->sum('amount');
        return view('dashboard1.dashboard',compact('scholar','instructor','program','sum_fees'));
    }
}
