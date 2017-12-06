<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Message;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{

    /**
       Show About Page
    **/
    public function index() {
        return view('about');
    }


}
