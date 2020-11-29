@extends('welcome')

@section('content')
<div class="container">
        <form action="/store-equipe" method="POST">
          @csrf
            <div class="form-group">
                <label for="nom">Nom de l'equipe:</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group">
                <label for="ville">Ville de l'equipe:</label>
                <input type="text" class="form-control" name="ville">
            </div>
            <div class="form-group">
                <label for="pays">Pays:</label>
                <input type="text" class="form-control" name="pays">
            </div>
            <div class="form-group">
                <label for="maxJoueurs">Max de joueur dans l'equipe:</label>
                <input type="text" class="form-control" name="maxJoueurs">
            </div>
           <button type="submit">Enrengister</button>
        </form>
    </div>
@endsection