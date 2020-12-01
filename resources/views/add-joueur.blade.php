@extends('welcome')

@section('content')
<h4 style="text-align: center; color:white;" class="mt-5 mb-3">AJOUTER UN JOUEUR</h4>
<div class="container" id="formEq">
        <form action="/store-joueur" method="POST" enctype="multipart/form-data">
          @csrf

    
          @if (session('status'))
          <div class="alert alert-danger">
           {{ session('status') }}
         </div>
         @endif

         @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif


         
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
           {{--      <button type="submit">Ajouter</button> --}}
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
           

            <div class="form-group mx-3">
                <label for="inputState">Choisissez votre equipe </label>
                <select id="inputState" class="form-control" name="equipe_id">
                  <option selected active>Choix equipe</option>
                    @foreach ($equipe as $item)
                      <option value="{{$item->id}}">{{$item->nom}}</option>
                    @endforeach
                </select>
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
           
           <button type="submit" class="btn btn-success">Enrengister</button>
        </form>
    </div>
@endsection