<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AdminControlller extends Controller
{
    public function checkAdmin(){
    	if (auth()->user()->admin == 1) return true;
    	else return false;
    }
}
