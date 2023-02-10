<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    //
    public function index(){
        $houses = House::limit(20)->get();
        return view('houses.index', compact('houses')); // [ 'houses' => $houses]
    }
}
