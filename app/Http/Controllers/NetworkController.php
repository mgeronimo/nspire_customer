<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class NetworkController extends Controller
{
    public function index(){
        $users = User::all();
        return view('network.network_list')
            ->with('users',$users);

    }
}
