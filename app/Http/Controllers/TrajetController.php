<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class TrajetController extends Controller
{   
    /**
     * 
     */
    public function create(): View
    {
        return view('trajets.create');
    }
}