@extends('welcome')

@section('content')
 <div class="container">
        <h2>nom de l'equipe: {{$equipe->nom}}</h2>
        <p>Ville de l'equipe: {{$equipe->ville}}</p>
        <p>Pays de l'equipe: {{$equipe->pays}}</p>
        <p>Maximum de joueur qui peuvent interger l'equipe: {{$equipe->maxJoueurs}}</p>
</div>
@endsection

