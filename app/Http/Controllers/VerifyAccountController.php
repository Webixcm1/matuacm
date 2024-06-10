<?php

namespace App\Http\Controllers;

use App\Http\Requests\VerifyAccountRequest;
use App\Models\Conducteur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class VerifyAccountController extends Controller
{
    /**
     * show verify form 
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return view('drive.verify');
    }

    /**
     * Handle verify account
     * 
     * @param \App\Http\Requests\VerifyAccountRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verifyAccount(VerifyAccountRequest $request, $id): RedirectResponse
    {
        $fields = $request->validated();
        $user = User::find($id);

        if (!$user) {
            emotify('error', 'Utilisateur non trouvé.');
            return back();
        }

        $folder = public_path('Conducteurs/' . $user->telephone);

        // Supprimer le dossier existant s'il existe
        if (is_dir($folder)) {
            // Supprimer tous les fichiers dans le dossier
            $files = glob($folder . '/*');
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                }
            }
            // Supprimer le dossier lui-même
            rmdir($folder);
        }

        // Créer le nouveau dossier pour les fichiers téléchargés
        mkdir($folder, 0777, true);

        // Ajouter les nouvelles images soumises
        foreach ($request->allFiles() as $key => $file) {
            $filename = md5(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move($folder, $filename);
            $fields[$key] = $filename;
        }

        try {
            // Mettre à jour l'utilisateur
            $user->update([
                'nom' => $fields['nom'],
                'prenom' => $fields['prenom'],
            ]);

            // Créer un nouveau conducteur dans le stockage
            Conducteur::create([
                'user_id' => Auth::user()->id,
                'dateNais' => $fields['dateNais'],
                'lieu_naissance' => $fields['lieu_naissance'],
                'sexe' => $fields['sexe'],
                'cni' => $fields['cni'],
                'cni_verso' => $fields['cni_verso'],
                'cni_recto' => $fields['cni_recto'],
                'photos' => $fields['photos'],
                'adresse' => $fields['adresse'],
                'ville' => $fields['ville'],
                'numero_permis' => $fields['numero_permis'],
                'image_permis' => $fields['image_permis'],
                'date_obtention' => $fields['date_obtention'],
                'marque' => $fields['marque'],
                'type_vehicule' => $request->type_vehicule,
                'immatriculation' => $fields['immatriculation'],
            ]);

            emotify('success', 'Votre demande de vérification a été envoyée avec succès.');
            return redirect()->route('home');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            emotify('error', 'Erreur lors de la création de la vérification de votre compte.');
            return back();
        }
    }
}
