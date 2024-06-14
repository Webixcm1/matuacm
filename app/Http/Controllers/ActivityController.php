<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    //TODO: implementer la deconnection d'un device ou pour tout les devices sauf celui active.
    public function displayView(): View
    {
        $user_id = auth()->id();

        $activities = ActivityLog::where('user_id', $user_id)->paginate(6);

        return view('drive.setting', compact(['activities']));
    }


    /**
     * Save activity log in database
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        // Enregistrement d'une nouvelle activité
        $activity = ActivityLog::create($request->all());
        return response()->json($activity, 201);
    }

    /**
     * Déconnecte un utilisateur d'un dispositif spécifique.
     *
     * @param string $deviceId L'ID du dispositif à déconnecter.
     * @return \Illuminate\Http\Response
     */
    public function disconnectDevice($deviceId): RedirectResponse
    {
        $activity = ActivityLog::find($deviceId);

        //verifier si l'activite existe et si l'utilisateur est autorise
        if (!$activity || $activity->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        //suppression de la session_id de l'activitéselectionne
        $activity->update(['session_id' => null]);

        emotify('success', 'Déconnecté du dispositif avec succès.');
        return redirect()->route('home');
    }
}
