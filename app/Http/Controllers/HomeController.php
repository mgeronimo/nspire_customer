<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Distributor;

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

    public function profile()
    {   
        $user = Distributor::where('id', Auth::user()->id)->first();
        $user->username = Auth::user()->username;
        $user->email = Auth::user()->email;
        return view('distributor_profile.profile')->with('user', $user);
    }

    public function editProfile()
    {
        return view('edit-profile');
    }
}
