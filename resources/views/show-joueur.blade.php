@extends('welcome')

@section('content')
 <div class="container">
     HELLO
        <h2>nom du joueur: {{$joueur->nom}}</h2>
        <p>Ville du joueur: {{$joueur->prenom}}</p>
        <p>Pays du joueur: {{$joueur->pays}}</p>
    
</div>
@endsection

