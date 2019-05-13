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
        $this->middleware('auth');
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
    
     public function ping()
    {
        return view('/pingtesting/pingtest');
    }
    
    public function pingresult(Request $request)
    {
       $packet=$request->packet;
       $address=$request->address;
       $output=shell_exec("ping $address -n $packet");
        //echo php_uname();
        //print_r ("<pre>$output</pre>");
        return view('/pingtesting/pingresult')->with('output',$output);
      
     
    }
}
