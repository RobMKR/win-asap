<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('after_login');
    }

    public function centers()
    {
        return view('centers');
    }

    public function gifts()
    {
        return view('gifts');
    }

    public function rules()
    {
        return view('rules');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
