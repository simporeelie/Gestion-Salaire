<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Requests\departementRequest;
use Exception;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements=Departement::paginate(10);
        return view('departement.index', compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartementRequest $request)
{
    
    try {
        // Valider les données
        $departementData = $request->validated();
        // Créer le département
        $departement = Departement::create($departementData);
            return redirect()->route('departement.index')->with('success_message', 'Département ajouté avec succès.');
            throw new \Exception('Échec de la création du département.');
        
     } catch (Exception $e) {
        return redirect()->back()->with('error_message', 'Une erreur est survenue lors de l\'ajout du département. Veuillez réessayer.');
    }
}

    

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        return view('departement.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $departement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        //
    }
}
