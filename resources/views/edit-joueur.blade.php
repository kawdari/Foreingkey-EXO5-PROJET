@extends('welcome')

@section('content')
<div class="container">
        <form action="/edit-joueur/{{ $editJoueur->id }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="nom">Nom du joueur:</label>
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="form-group">
                    <label for="nom">Prenom du joueur:</label>
                    <input type="text" class="form-control" name="prenom">
                </div>
            
            <div class="form-group">
                <label for="text">Age:</label>
               <input type="text" class="form-control" name="age">
           </div>

           <div class="form-group">
            <label for="exampleFormControlSelect1">Genre</label>
            <select class="form-control" id="exampleFormControlSelect1" name="genre">
            <option>Femme</option>
            <option>Homme</option>
            <option>Autre</option>
            </select>
        </div>

           <div class="form-group">
            <label for="src">Foto:</label>
            <input type="file" name="src" id="src">
            <button type="submit">Ajouter</button>
        </div>
            <div class="form-group">
                    <label for="number">Numero de telephone:</label>
                    <input type="number" class="form-control" name="telephone">
                </div>
            <div class="form-group">
                <label for="email">Adresse mail:</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                    <label for="text">Pays:</label>
                    <input type="text" class="form-control" name="pays">
            </div>


            <div class="form-group">
                <label for="exampleFormControlSelect1">Rôle</label>
                <select class="form-control" id="exampleFormControlSelect1" name="role">
                <option>Avant</option>
                <option>Arrière</option>
                <option>Centre</option>
                <option>Remplaçants</option>
                </select>
            </div>
          
           <button type="submit">Enrengister</button>
        </form>
    </div>
@endsection