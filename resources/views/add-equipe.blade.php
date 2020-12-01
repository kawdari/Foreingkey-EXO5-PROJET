@extends('welcome')

@section('content')
<div class="container" id="formEquipe">
    <form action="/store-equipe" method="POST" id="formEq">
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



        <h2 style="text-align: center; color:white;">RAJOUTER UNE NOUVELLE EQUIPE</h2>

        <div class="row">
            <div class="form-group col-sm-6 ">
            <label for="nom">Nom de l'equipe:</label>
            <input type="text" class="form-control" name="nom">
            </div>

            <div class="form-group col-sm-6">
            <label for="ville">Ville de l'equipe:</label>
            <input type="text" class="form-control" name="ville">
            </div>  
        </div>
           
{{-- 
            <div class="form-group mx-3">
            <label for="inputState">Choisissez votre pays: </label>
            <select id="inputState" class="form-control" name="equipe_id">
            <option selected active>Choix pays</option>
                    @foreach ($pays as $item)
                      <option value="{{$item->id}}">{{$item->nom}}</option>
                    @endforeach
            </select>
            </div> --}}


            <div class="form-group">
                <label for="pays">Pays:</label>
                <input type="text" class="form-control" name="pays">
            </div>

            <div class="form-group">
                <label for="maxJoueurs">Max de joueur dans l'equipe:</label>
                <input type="text" class="form-control" name="maxJoueurs">
            </div>
            
            <h3 style="text-align: center; color:white;">Nombre maximum de joueurs par rôle</h3>


            <div class="row">
                <div class="form-group col-sm-4">
                <label for="maxAvant">Joueurs Avant</label>
                <input type="text" class="form-control" name="maxAvant">
                </div>

                <div class="form-group col-sm-4">
                <label for="maxArrière">Joueurs Arrière</label>
                <input type="text" class="form-control" name="maxArrière">
                </div>

                <div class="form-group col-sm-4">
                <label for="maxCentraux">Joueurs Centraux</label>
                <input type="text" class="form-control" name="maxCentraux">
                </div>
            </div>
           

            <h3 style="text-align:center; color:white;">Nombre de remplaçants</h3>

            <div class="form-group">
                <label for="maxRemplacants">Remplaçants</label>
                <input type="text" class="form-control" name="maxRemplacant">
            </div>
           <button type="submit" class="btn btn-success" >ENVOYER</button>
        </form>
    </div>
@endsection