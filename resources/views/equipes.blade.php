@extends('welcome')

@section('content')
<h1 style="text-align:center; color:aliceblue;" class="mt-5 mb-5">TOUTES LES EQUIPES</h1>
<div class="row" id="allTeam">

    @foreach ($equipes as $item)
    <div class="container mb-2">
        <div class=" col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">NOM EQUIPE:{{$item->nom}}</h5>
            <p>VILLE: {{ $item->ville}}</p>
            <p>PAYS:{{$item->pays}}</p>
            
            <a href="/equipe/{{$item->id}}" class="btn btn-primary m-2">PLUS D'INFORMATION</a>
            <a href="/edit-equipe/{{$item->id}}"  class="btn btn-success m-2" >EDIT</a>
        <form action="/delete-equipes/{{ $item->id }}" method="POST">
            @csrf
            <button class="btn btn-danger m-2 ">DELETE</button>
        </form>

        </div>
        
          </div>
        </div>
    </div>
    </div>
    
    @endforeach
</div>



@endsection