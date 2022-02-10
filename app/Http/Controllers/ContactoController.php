<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMailable;
use Illuminate\Http\Request;

class ContactoController extends Controller
{

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'correo' =>'required|email',
            'celular' =>'required|numeric',
            'asunto' => 'required',
            'mensaje' =>'required'
        ]);

        $correo = new ContactoMailable($request->all());
        Mail::to('jesus.ramirez9@unmsm.edu.pe')->send($correo);

        return redirect()->route('inicio')->with('info','Mensaje enviado');
    }
}
