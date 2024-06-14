<?php

namespace App\Http\Controllers;

use App\Http\Requests\Trajets\CreateRequest;
use App\Models\Trajet;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TrajetController extends Controller
{
    //TODO: Envoyer un message a tous les passagers apres la publication d'un trajets
    //TODO: Envoyer un message a l'utilisateur apres verification de son compte
    //TODO: mettre un bouton pour demarrer un trajet. lorsqu'un trajet est lancé on doit estimer le temps de fin

    /**
     * affichage de la vue de creation d'un trajet
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        return view('trajets.create');
    }
    /**
     * Create new trips 
     * 
     * @param \App\Http\Requests\Trajets\CreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $conducteur_id = $user->conducteur->id;
        $data = $request->validated();
        $data['conducteur_id'] = $conducteur_id;

        // Add image path to data if image is uploaded
        $imagePath = $this->handleImageUpload($request, $user);
        if ($imagePath) {
            $data['image'] = $imagePath;
        }

        try {
            Trajet::create($data);
            emotify('success', 'Votre Trajet a été créé avec succès.');
            return redirect()->route('home');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            emotify('error', 'Une erreur est survenue lors de la création de votre trajet.');
            return back();
        }
    }

    /**
     * Page de modification d'un trajet
     * 
     * @param \App\Models\Trajet $trajets
     * @return \Illuminate\Contracts\View\View
    */
    public function edit(Trajet $trajet): View
    {
        if (!$trajet) {
            emotify('error', 'Le trajet que rechercher n\'existe pas.');
            return redirect()->route('home');
        }
        return view('trajets.edit', compact('trajet'));
    }

    /**
     * Update trajet
     * 
     * @param \App\Models\Trajet $trajet
     * @param \App\Http\Requests\Trajets\CreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CreateRequest $request, Trajet $trajet): RedirectResponse
    {
        $user = Auth::user();
        $conducteur_id = $user->conducteur->id;
        $data = $request->validated();
        $data['conducteur_id'] = $conducteur_id;

        $imagePath = $this->handleImageUpload($request, $user);
        if ($imagePath) {
            $data['image'] = $imagePath;
        }

        try {
            $trajet->update($data);
            emotify('success', 'Votre Trajet a été mis  à jour avec succès.');
            return redirect()->route('home');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            emotify('error', 'Une erreur est survenue lors de la mise à jour de votre trajet.');
            return back();
        }
    }

    /**
     * Delete trajet in storage
     * 
     * @param \App\Models\Trajet $trajet
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Trajet $trajet): RedirectResponse
    {
        if (!$trajet) {
            emotify('error', 'Le trajet que rechercher n\'existe pas.');
            return redirect()->route('home');
        }

        try {
            $trajet->delete();
            emotify('success', 'Votre Trajet a étésupprimer avec succès.');
            return redirect()->route('home');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            emotify('error', 'Une erreur est survenue lors de la suppression de votre trajet.');
            return back();
        }
    }

    /**
     * Hamdle change status of trajet (Ouvrir)
     * 
     * @param \App\Models\Trajet $trajet
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeTrajetStatus(Trajet $trajet): RedirectResponse
    {
        if (!$trajet) {
            emotify('error', 'Le trajet que rechercher n\'existe pas.');
            return back();
        }

        $trajet->update([
            'status' => !$trajet->status
        ]);

        emotify('success', "Le status de votre trajet a été mis à jour avec succès.");
        return back();
    }

    /**
     * Search Trips
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function search(Request $request): View
    {
        $point_depart = $request->input('point_depart');
        $destination  = $request->input('destination');
        $date_depart = $request->input('date_depart');
        $heure_depart = $request->input('heure_depart');

        $query = Trajet::query();

        //application des filtres
        if ($point_depart) {
            $query->where('point_depart', $point_depart);
        }

        if ($destination) {
            $query->where('destination', $destination);
        }
        
        if ($date_depart) {
            $query->whereDate('date_depart', '=', $date_depart);
        }

        if ($heure_depart) {
            $query->whereTime('heure_depart','=', $heure_depart);
        }

        $trajets = $query->get();

        $nombre_trajets = $trajets->count();


        return view('trajets.resultats', compact(['trajets', 'nombre_trajets']));
    }

    
    /**
     * Handle image upload and return the image path
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return string|null
     */
    private function handleImageUpload($request, $user)
    {
        if ($request->hasFile('image')) {
            $folder = public_path('Trajets/' . $user->nom);
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }

            $file = $request->file('image');
            $path = md5(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move($folder, $path);

            return 'Trajets/' . $user->nom . '/' . $path;
        }

        return null;
    }
}
