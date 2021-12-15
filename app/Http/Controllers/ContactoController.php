<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function index(){
      return view('Contacto');
    }
    
    public function store(Request $request){
        
        $request->validate([
            'name' =>'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);
         
        $correo = new ContactanosMailable($request->all());
        Mail::to('c.coyant@gmail.com')->send($correo);
        
        return redirect()->route('Contacto')->with('info' , 'Gracias por confiar en mi trabajo a la brevedad le respondere');
    }
}
