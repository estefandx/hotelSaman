<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
    public function store(Request $request)
    {
    	Mail::send('correo',$request->all(), function($msj){
    		$msj->subject('correo de contacto');
    		$msj->to('estefandx1991@gmail.com');
    	});
    	Session::flash('message','Mensaje enviado correctamente');
    	return Redirect::to('/contact');
    }




}
