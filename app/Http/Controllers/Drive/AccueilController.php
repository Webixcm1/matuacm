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
        $countTrajet = Trajet::with('conducteur')->count();
        $trajets = Trajet::with('conducteur')->paginate(6);
        $avialableTrajet = Trajet::with('conducteur')->where('status', '=', true)->count();
        return view('drive.home', compact(['countTrajet', 'trajets', 'avialableTrajet']));
    }
}
