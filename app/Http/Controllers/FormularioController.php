<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactaMailable;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Mail;

class FormularioController extends Controller
{
 


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function formulario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:2',
            'apellido' => 'required|min:2',
            'email' => 'required|email',
            'telefono' => 'nullable',
            'mensaje' => 'required|min:10',
            'g-recaptcha-response' => 'required|captcha',
            
        ]);
        $consulta = new ContactaMailable($request->only(['nombre', 'apellido', 'email', 'telefono', 'mensaje']));
        Mail::to('gabriele16cangelli@gmail.com')->send($consulta);
        
        return back()->with('success', 'ok');

        
    }

}
