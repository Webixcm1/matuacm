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
            return back()->with('error', 'Utilisateur non trouvé.');
        }

        $folder = public_path('Conducteurs/' . $user->telephone);

        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        $files = [
            'cni_verso' => null,
            'cni_recto' => null,
            'photos' => null,
            'image_permis' => null
        ];

        foreach ($files as $key => &$filename) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $filename = md5(uniqid()) . '.' . $file->getClientOriginalExtension();
                $file->move($folder, $filename);
            }
        }

        try {
            // Update user
            $user->update([
                'nom' => $fields['nom'],
                'prenom' => $fields['prenom'],
            ]);

            // Create new driver in storage
            Conducteur::create([
                'user_id' => Auth::user()->id,
                'dateNais' => $fields['dateNais'],
                'lieu_naissance' => $fields['lieu_naissance'],
                'sexe' => $fields['sexe'],
                'cni' => $fields['cni'],
                'cni_verso' => $files['cni_verso'],
                'cni_recto' => $files['cni_recto'],
                'photos' => $files['photos'],
                'adresse' => $fields['adresse'],
                'ville' => $fields['ville'],
                'numero_permis' => $fields['numero_permis'],
                'image_permis' => $files['image_permis'],
                'date_obtention' => $fields['date_obtention'],
                'marque' => $fields['marque'],
                'type_vehicule' => $fields['type_vehicule'],
                'immatriculation' => $fields['immatriculation'],
            ]);

            return redirect()->route('home');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Erreur lors de la création de la verification de votre compte');
        }
    }
}
