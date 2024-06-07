<?php

namespace App\Http\Controllers\Drive;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class AccueilController extends Controller
{
     /**
     * home page drive
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('drive.home');
    }
}
