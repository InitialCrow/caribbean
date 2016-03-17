<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function agence(){
        return view('front.agence');
    }

    public function formule(){
        return view('front.formule');
    }

    public function realisation(){
        return view('front.realisation');
    }

    public function temoignage(){
        return view('front.temoignage');
    }

    public function conciergerie(){
        return view('front.conciergerie');
    }

    public function evenement(){
        return view('front.evenement');
    }

    public function contact(){
        return view('front.contact');
    }

    public function superUser(){
        return view('admin.superUser');
    }

}
