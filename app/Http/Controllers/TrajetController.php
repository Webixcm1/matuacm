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
    
    /**
     * 
     */
    public function create(): View
    {
        return view('trajets.create');
    }

    /**
     * create new instance in storage
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

        //image
        $this->image($request, $user);

        try {
            Trajet::create($data);
            emotify('success', 'Votre Trajet a été crée avec succès.');
            return redirect()->route('home');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            emotify('error', 'Une erreur est survenue lors de la création de votre trajet.');
            return back();
        }
    }

    /**
     * image
     */
    private function image($request, $user)
    {
        $folder = public_path('Trajets/' . $user->nom);

        if ($request->hasFile('image')) {
            $folder = public_path('Trajets/' . $user->nom);
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }

            $file = $request->file('image');
            $path = md5(uniqid()) . '.' . $file->getClientOriginalExtension();
            $file->move($folder, $path);
            $data['image'] = $path;
        }
    }
}
