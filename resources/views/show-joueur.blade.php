@extends('welcome')

@section('content')
 <div class="container" id="show" >
     Informations du joueur 
        <h2>{{$joueur->nom}} {{$joueur->prenom}}</h2>
        <p>Age: {{$joueur->age}}</p>
        <p>Genre: {{$joueur->genre}}</p>
        <p>Gsm: {{$joueur->telephone}}</p>
        <p>Email: {{$joueur->email}}</p>
        <p>Pays: {{$joueur->pays}}</p>
        <p>Rôle: {{$joueur->role}}</p>

</div>
@endsection
