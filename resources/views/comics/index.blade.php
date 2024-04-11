@extends('layout.app')

@section('content')



<div class="container row flex-wrap gap-2  justify-content-center mx-auto ">

    <h2 class=" text-center my-4 display-4 text-danger-emphasis fw-bolder">Let's see the comics</h2>

    @foreach($comics as $comic)
    
    
    
    <div class="card col-2 p-0" style="width: 18rem;">
      <img src="{{$comic->thumb}}" class="card-img-top object-fit-cover" style="height: 300px; object-position: top;">
      <div class="card-body ">
        <h5 class="card-title">{{$comic->title}}</h5>
        <p class="card-text">{{$comic->price}}</p>
        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Visualizza</a>
      </div>
    </div>
    
    @endforeach

    <a href="{{route('comics.create')}}" class="btn btn-primary row"> Inserisci un Nuovo fumetto</a>

</div>






@endsection