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
    	Mail::send('contact',$request->all(), function($msj){
    		$msj->subject('correo de contacto');
    		$msj->to('ingsistemasjf@gmail.com');
    	});
    	Session::flash('message','Mensaje enviado correctamente');
    	return Redirect::to('/contact');
    }




}
