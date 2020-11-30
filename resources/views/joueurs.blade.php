@extends('welcome')

@section('content')

    <div class="container">
        <h1>TOUT LES JOUEURS</h1>
        @foreach ($joueurs as $item)
        <div class="card">
        <h4 class="card-title">{{$item->nom}}</h4>
            <p>{{$item->nom}}</p>
            <p>{{$item->prenom}}</p>
            <a href="/equipe/{{$item->id}}">MORE INFO</a>
           
        <a class="btn btn-success" href="/edit-joueur/{{$item->id}}">EDIT</a>
        <form action="/delete-equipes/{{ $item->id }}" method="POST">
            @csrf
            <button>DELETE</button>
        </form>

        </div>
        @endforeach
    </div>
@endsection
