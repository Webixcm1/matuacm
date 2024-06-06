<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * About page
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('pages.about');
    }
}
