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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $title = "Dashboard";
        $page = "";
        $msg = "";
        $status_msg = false;
        return view('index')->with(compact('title','msg','status_msg','page'));
        // return redirect("/");
    }
}
