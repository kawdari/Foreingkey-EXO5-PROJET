<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;

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
        $equipe = Equipe::all();
        return view('add-joueur', compact('equipe')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateForm = $request->validate(
            [
                "nom"=>"string|required",
                "prenom"=>"string|required",
                "age"=>"integer|required",
                "telephone"=>"required",
                "genre"=>"required",
                "email"=>"required",
                "role"=>"required",
                "src" => "mimes:jpeg,bmp,png",
                "equipe_id" =>"required",
                "pays"=>"string|required",
            ]
        );

        $newJoueur = new Joueur();
        $newJoueur->nom = $request->nom;
        $newJoueur->prenom = $request->prenom;
        $newJoueur->age= $request->age;
        $newJoueur->telephone = $request->telephone;
        $newJoueur->email = $request->email;
        $newJoueur->genre = $request->genre;
        $newJoueur->pays = $request->pays;
        $newJoueur->role = $request->role;
        $newJoueur->equipe_id = $request->equipe_id;
        $newJoueur->src = $request->file("src")->hashName();

        $newJoueur->save();
        $request->file("src")->storePublicly("images", "public");



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
    public function update(Request $request, $id)
    {
        $updateJoueur = Joueur::find($id);
        $updateJoueur->nom = $request->nom;
        $updateJoueur->prenom = $request->prenom;
        $updateJoueur->age= $request->age;
        $updateJoueur->telephone = $request->telephone;
        $updateJoueur->email = $request->email;
        $updateJoueur->genre = $request->genre;
        $updateJoueur->pays = $request->pays;
        $updateJoueur->role = $request->role;

        Storage::disk("public")->delete("images/" . $updateJoueur->src);

        $updateJoueur->src = $request->file("src")->hashName();
        $updateJoueur->save();

        $request->file("src")->storePublicly("images", "public");

        return redirect("/joueurs");
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
