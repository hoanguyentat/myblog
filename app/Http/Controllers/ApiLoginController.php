<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Socialite;

class ApiLoginController extends Controller
{
    public function facebook()
	{
	    return Socialite::with('facebook')->redirect();
	}


	public function fbCallback()
	{
	    $user = Socialite::with('facebook')->user();

	    // $user->token;
	}
}
