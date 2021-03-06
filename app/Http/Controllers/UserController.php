<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Hash;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Country;
use App\User;

class UserController extends Controller
{
    public function register(){
    	$countries = Country::orderBy('name', 'ASC')->pluck('name');
    	return view('register')->with('countries', $countries);
    }

    public function save(Request $request){
    	$validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'country' => 'required|exists:countries,name',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }

    	$user = new User;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->country = $request->country;
    	$user->save();

    	return redirect('/')->with('message', 'User successfully created!');
    }

}


