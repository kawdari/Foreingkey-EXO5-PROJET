@extends('welcome')

@section('content')

 <div class="container" id="show">
        <h2>nom de l'equipe: {{$equipe->nom}}</h2>
        <p>Ville de l'équipe: {{$equipe->ville}}</p>
        <p>Pays de l'équipe: {{$equipe->pays}}</p>
        <p>Maximum de joueur qui peuvent integrer l'équipe: {{$equipe->maxJoueurs}}</p>

        <p>Avant :{{$equipe->maxAvant}}</p>

        <p>Arrière :{{$equipe->maxArrière}}</p>

        <p>Centraux : {{$equipe->maxCentraux}}</p>

        <p>Remplaçants : {{$equipe->maxRemplacant}}</p>
</div>
@endsection