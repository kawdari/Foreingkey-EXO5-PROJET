@extends('welcome')

@section('content')
    <h1>Editer l'equipe</h1>
    <form action="/edit-equipe/{{ $editEquipe->id }}" method="POST">
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

              <h3>Nombre maximum de joueurs par rôle</h3>

              <div class="form-group">
                    <label for="maxAvant">Joueurs Avant</label>
                    <input type="text" class="form-control" name="maxAvant">
              </div>
  
                <div class="form-group">
                    <label for="maxArrière">Joueurs Arrière</label>
                    <input type="text" class="form-control" name="maxArrière">
                </div>
  
                <div class="form-group">
                    <label for="maxCentraux">Joueurs Centraux</label>
                    <input type="text" class="form-control" name="maxCentraux">
                </div>
  
                <h3>Nombre de remplaçants</h3>
  
                <div class="form-group">
                    <label for="maxRemplacants">Remplaçants</label>
                    <input type="text" class="form-control" name="maxRemplacant">
                </div>
             <button type="submit">Enrengister</button>
          </form>
         
@endsection
