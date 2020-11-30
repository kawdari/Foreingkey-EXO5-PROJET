<?php

namespace App\Http\Controllers;

use App\Models\Joueur;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs = Joueur::all();
        return view('welcome', compact('joueurs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-joueur'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newJoueur = new Joueur();
        $newJoueur->nom = $request->nom;
        $newJoueur->prenom = $request->prenom;
        $newJoueur->telephone = $request->telephone;
        $newJoueur->email = $request->email;
        $newJoueur->genre = $request->genre;
        $newJoueur->pays = $request->pays;
        $newJoueur->role = $request->role;

        $newJoueur->save();
        return redirect()->back(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */

    public function showJoueurs(){
        $joueurs= Joueur::all();
        return view('joueurs', compact('joueurs'));
    }



    public function show($id){
        $joueur= Joueur::find($id);
        return view('show-joueur', compact('joueur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $editJoueur = Joueur::find($id);
        return view("edit-joueur", compact("editJoueur"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Joueur $joueur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Joueur  $joueur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Joueur $joueur)
    {
        //
    }
}
