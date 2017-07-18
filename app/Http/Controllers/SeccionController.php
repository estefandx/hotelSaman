<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class SeccionController extends Controller
{

    public function index()
    {
        $photoHotel = Photo::where('seccion','hotel-saman')
            ->get();;
        return view('index',compact('photoHotel'));
    }

    public function eventos()
    {
        $photoEventos = Photo::where('seccion','eventos')
            ->get();;
        return view('index',compact('photoEventos'));
    }

    public function piscina()
    {
        $photoPiscinas = Photo::where('seccion','piscinas')
            ->get();;
        return view('piscinas',compact('photoPiscinas'));
    }

    public function restaurante()
    {
        $photoRestaurante = Photo::where('seccion','restaurante')
            ->get();;
        return view('restaurante',compact('photoRestaurante'));
    }
}
