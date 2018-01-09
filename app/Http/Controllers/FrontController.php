<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        //return "Page d'accueil";
        return view("front.home");//retourne une vue dans le dossier vue
    }
}
