<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * show contact page
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('pages.contact');
    }
}
