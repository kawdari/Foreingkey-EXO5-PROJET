<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipe = Equipe::all();
        return view('welcome', compact('equipe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-equipe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEquipe = new Equipe();
        $newEquipe->nom = $request->nom;
        $newEquipe->ville = $request->ville;
        $newEquipe->pays = $request->pays;
        $newEquipe->maxJoueurs = $request->maxJoueurs;
        $newEquipe->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipe= Equipe::find($id);
        return view('show-equipe', compact('equipe'));
    }

    public function showEquipe(){
        $equipes= Equipe::all();
        return view('equipes', compact('equipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editEquipe = Equipe::find($id);
        return view("edit-equipe", compact("editEquipe"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateEquipe = Equipe::find($id);
        $updateEquipe->nom = $request->nom;
        $updateEquipe->ville = $request->ville;
        $updateEquipe->pays = $request->pays;
        $updateEquipe->maxJoueurs = $request->maxJoueurs;
        $updateEquipe->save();

        return redirect("/equipes");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteEquipe = Equipe::find($id);
        $deleteEquipe->delete();
        return redirect()->back();
    }
}
