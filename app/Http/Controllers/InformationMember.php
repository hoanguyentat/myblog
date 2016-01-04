<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InformationMember extends Controller
{
    public function aboutme(){
    	return view('professional/aboutme');
    }
}
