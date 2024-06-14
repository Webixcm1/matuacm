<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @return Illuminate\Http\Request
     */
    public function index(): View
    {
        // Récupérer tous les trajets
        $trajets = Trajet::all();
    
        // Préparer les options uniques pour point de départ et destination
        $points_depart = $trajets->unique('point_depart')->pluck('point_depart');
        $destinations = $trajets->unique('destination')->pluck('destination');
    
        return view('welcome', compact('points_depart', 'destinations'));
    }
}
