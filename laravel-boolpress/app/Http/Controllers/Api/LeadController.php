<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{

    public function store(Request $request){

        $data = $request->all();

        $validator = Validator::make($data,
            [
                'name' => 'string|required|min:2',
                'email' => 'email|required|min:3',
                'message' => 'required|string|min:10'
            ]
        );

        if ($validator->fails()){
            return response()->json([
                'success' => false,

                // ? un metodo che restituisce un array letterale di errori in cui
                // § la chiave è l'elemento della validazione convalidato
                // # e il valore è l'errore relativo a quell'elemento
                'errors' => $validator->errors(),
            ]);
        }

        $lead = new Lead();
        $lead->fill($data);
        $lead->save();

        Mail::to('rcpc.bool@gmail.com')->send(new NewContact($lead));

        return response()->json([
            'success' => true
        ]);

        // restituiamo una risposta json
        // restituire una risposta json errata se il dato non arriva bene
    }
}
