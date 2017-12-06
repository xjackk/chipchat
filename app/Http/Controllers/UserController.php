<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;


class UserController extends Controller
{

    // GET: Profile page
    public function profile(){
    	return view('profile', array('user' => Auth::user()) );
    }

}
