<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
     public function index() {
        return view('imovie');
     }

     public function ação() {
        return view('Ação');
     }

     public function anime() {
        return view('home');
     }

     public function lançamentos() {
        return view('lancamento');
     }

     public function romance() {
        return view('Romance');
     }

     public function terror() {
        return view('Terror');
     }
     public function drama() {
        return view('drama');
     }

     public function comédia() {
        return view('comédia');
     }

}
