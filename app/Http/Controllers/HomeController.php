<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\OcCountries;
use App\OcZones;
use Illuminate\Http\Request;
use Auth;
use App\Customer;

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
        $user = Customer::where('id', Auth::user()->id)->first();
        $user->username = Auth::user()->username;
        $user->email = Auth::user()->email;
        $user->country = OcCountries::where('country_id', '=', $user->country)->select('name')->first();
        $user->zone = OcZones::where('zone_id', '=', $user->state_line1)->select('name')->first();

        $countries = OcCountries::select('country_id', 'name', 'iso_code_3')->orderBy('name')->get();
        $zones = OcZones::select('zone_id', 'name', 'code', 'country_id')->orderBy('name')->get();

        return view('customer_profile.profile')
            ->with('user', $user)
            ->with('countries', $countries)
            ->with('zones', $zones);
    }

    public function editProfile()
    {
        return view('edit-profile');
    }
}
