@extends('welcome')

@section('content')
<div class="container">
        <form action="/store-joueur" method="POST">
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
                <label for="genre">Genre:</label>
                <input type="text" class="form-control" name="genre">
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
                    <label for="role">Role du joueur:</label>
                    <input type="text" class="form-control" name="role">
                </div>
           <button type="submit">Enrengister</button>
        </form>
    </div>
@endsection