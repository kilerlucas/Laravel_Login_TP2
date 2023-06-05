<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;

class EtudiantController extends Controller
{
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('etudiants.index', ['etudiants' => $etudiants]);
    }

    public function create()
    {
        $ville = Ville::selectVille();
        $villes = Ville::all();

        return view('etudiants.create', ['ville' => $ville, 'villes' => $villes]); 
    }


    public function store(Request $request)
    {
        $date_de_naissance = date('Y-m-d', strtotime($request->date_de_naissance));

        $newEtudiant = Etudiant::create([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'ville_id' => $request->ville_id,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_de_naissance' => $date_de_naissance,
        ]);

        return view('etudiants.show', ['etudiants' => $newEtudiant]);
    }

    public function show(Etudiant $etudiant)
    {
        return view('etudiants.show', ['etudiants' => $etudiant]);
    }

    public function edit(Etudiant $etudiant)
    {
        $villes = Ville::all();
        return view('etudiants.edit', ['etudiant' => $etudiant, 'villes' => $villes]);
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        $dateDeNaissance = date('Y-m-d', strtotime(str_replace('/', '-', $request->date_de_naissance)));

        $etudiant->update([
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'ville_id' => $request->ville_id,
            'phone' => $request->phone,
            'email' => $request->email,
            'date_de_naissance' => $dateDeNaissance,
        ]);

        return redirect(route('etudiants.show', $etudiant));
    }

    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect(route('etudiants.index'));
    }
}
