@extends('welcome')

@section('content')

    <div class="container">
        <h1>TOUT LES EQUIPES</h1>
        @foreach ($equipes as $item)
        <div class="card">
        <h4 class="card-title">{{$item->nom}}</h4>
            <p>{{$item->ville}}</p>
            <p>{{$item->pays}}</p>
            <p>{{$item->maxJoueurs}}</p>
            <a href="/equipe/{{$item->id}}">MORE INFO</a>
           
        <a class="btn btn-success" href="/edit-equipe/{{$item->id}}">EDIT</a>
        <form action="/delete-equipes/{{ $item->id }}" method="POST">
            @csrf
            <button>DELETE</button>
        </form>

        </div>
        @endforeach
    </div>
@endsection
