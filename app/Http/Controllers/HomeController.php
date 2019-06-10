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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function cart(){
        return view('user.pages.cart');
    }

    public function register(){
        return view('user.pages.register');
    }

    public function checkout(){
        return view('user.pages.checkout');
    }

    public function catalog(){
        return view('user.pages.catalog');
    }

    public function fashion(){
        return view('user.categories.fashions');
    }
    public function babytoys(){
        return view('user.categories.babytoys');
    }
    public function electronics(){
        return view('user.categories.electronics');
    }
    public function fitness(){
        return view('user.categories.fitness');
    }
    public function supermkt(){
        return view('user.categories.supermkt');
    }
    public function logout(Request $request){
        Auth::guard()->logout();
        $request->session()->invalidate();
        return view('auth.login');
    }
    
}
