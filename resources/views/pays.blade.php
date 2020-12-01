@extends('welcome')

@section('content')
<div class="card bg-light mb-3" style="max-width: 18rem;">
    @foreach ($pays as $item)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$item->pays}}</h5>
        <p class="card-text">{{$item->continent}}</p>
          <a href="#" class="btn btn-primary">show</a>
        </div>
      </div>
    @endforeach
   
</div> 
@endsection