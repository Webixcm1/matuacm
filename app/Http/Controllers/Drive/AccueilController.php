<?php

namespace App\Http\Controllers\Drive;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Trajet;
use Illuminate\Support\Facades\Auth;

class AccueilController extends Controller
{
    /**
     * Page d'accueil du conducteur
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $user = Auth::user();

        if ($user->conducteur) {
            $conducteurId = $user->conducteur->id;

            $countTrajet = Trajet::where('conducteur_id', $conducteurId)->count();
            $trajets = Trajet::with('conducteur', 'reservations')->where('conducteur_id', $conducteurId)->latest()->paginate(6);

            // Compter le nombre total de trajets disponibles
            $availableTrajet = Trajet::where('conducteur_id', $conducteurId)->where('status', true)->count();

            // Compter le nombre total de réservations
            $countReservations = 0;
            foreach ($trajets as $trajet) {
                $countReservations += $trajet->reservations->count();
            }
        } else {
            // Si l'utilisateur n'a pas de conducteur associé, initialiser les compteurs à 0
            $countTrajet = 0;
            $trajets = collect(); // Collection vide
            $availableTrajet = 0;
            $countReservations = 0;
        }

        return view('drive.home', compact(['countTrajet', 'trajets', 'availableTrajet', 'countReservations']));
    }
}
