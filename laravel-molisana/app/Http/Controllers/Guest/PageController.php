<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
     /**
     * Returns the guest home page
     *
     * @return void
     */
    public function home(){
        return view('guest.home');
    }
}
