<?php

namespace App\Http\Controllers;

use App\Mail\NewContact;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LeadController extends Controller
{
    //

    public function create(){
        return view('guest.contacts');
    }

    public function store(Request $request){
        $data = $request->validate(
            [
                'name' => 'string|required|min:2',
                'email' => 'email|required|min:3',
                'message' => 'required|string|min:10'
            ]
        );

        $lead = new Lead();
        $lead->fill($data);
        $lead->save();

        Mail::to('rcpc.bool@gmail.com')->send(new NewContact($lead));
        // creare e inserire una nostra lead
        // passsiamo la lead ad un nuovo NewContact()
        // mandiamo la mail

        dd($data);
    }
}
