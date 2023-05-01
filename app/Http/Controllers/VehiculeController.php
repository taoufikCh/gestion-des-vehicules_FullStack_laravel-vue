<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicules = Vehicule::all()->toArray();
        return array_reverse($vehicules); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vehicule = new Vehicule([
            'immatriculaion' => $request->input('immatriculaion'),
            'marque' => $request->input('marque'),
            'modele' => $request->input('modele'),
            'couleur' => $request->input('couleur'),
            'annee' => $request->input('annee'),
            'kilometrage' => $request->input('kilometrage'),
            'carosserie' => $request->input('carosserie'),
            'energie' => $request->input('energie'),
            'boite' => $request->input('boite'),
        ]);
        $vehicule->save();
        return response()->json('Véhicule créé !');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vehicule= Vehicule::find($id);
        return response()->json($vehicule);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->update($request->all());
        return response()->json('Véhicule MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->delete();
        return response()->json('Véhicule supprimé !');
    }
}
