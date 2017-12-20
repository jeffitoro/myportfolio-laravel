<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $users = DB::table('contacts')->select('email')->distinct()->get();
        return view('home',compact('users'));
    }

    public function store(request $request)
    {
        dd($request);
    }

    public function selection(){
        echo request('selected');
    }
}
