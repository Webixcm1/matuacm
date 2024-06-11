<?php

namespace App\Http\Controllers\Drive;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Trajet;

class AccueilController extends Controller
{
     /**
     * home page drive
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $countTrajet = Trajet::with('conducteurs')->count();
        $trajets = Trajet::with('conducteurs')->get();
        return view('drive.home', compact(['countTrajet', 'trajets']));
    }
}
