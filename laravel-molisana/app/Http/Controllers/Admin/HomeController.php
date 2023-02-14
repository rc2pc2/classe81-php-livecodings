<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    /**
     * Returns the admin home page
     *
     * @return void
     */
    public function home(){
        return view('admin.home');
    }
}
