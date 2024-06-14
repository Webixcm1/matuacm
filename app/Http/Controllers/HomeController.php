<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //TODO:implementer la recherche des trajets a la page d'accueil
    /**
     * @return Illuminate\Http\Request
     */
    public function index(): View
    {
        return view('welcome');
    }
}
