<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use Redirect;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request) {

        Mail::send('emails.contact', $request->all(), function($msj){
                $msj->subject('correo de contacto');
                $msj->to('infowesternlimex@gmail.com');
        });

            Session::flash('message','Mensaje enviado correctamente');
        return view('page.es.contactenos');

    }
}
