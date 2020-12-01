@extends('welcome')

@section('content')

    <div class="container">
        <h1>TOUT LES JOUEURS</h1>
        @foreach ($joueurs as $item)
        <div class="card">
        <h4 class="card-title">{{$item->nom}}  {{$item->prenom}}</h4>
            <img src="{{ asset('images/' . $item->src) }}" alt="" style="width: 150px">

            <p>Rôle : {{$item->role}}</p>
            <a href="/joueurs/{{$item->id}}">MORE INFO</a>

        <a class="btn btn-success" href="/edit-joueur/{{$item->id}}">EDIT</a>
        <form action="/delete-equipes/{{ $item->id }}" method="POST">
            @csrf
            <button>DELETE</button>
        </form>

        </div>
        @endforeach
    </div>
@endsection