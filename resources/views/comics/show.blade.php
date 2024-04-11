@extends('layout.app')

@section('content')
<div class="container d-flex justify-content-center">

<div class="card col-12 my-4" style="width: 500px;">
      <img src="{{$comic->thumb}}" class="card-img-top w-100" alt="...">
      <div class="card-body text-center">
        <h5 class="card-title text-warning ">{{$comic->title}}</h5>
        <p class="card-text">{{$comic->description}}</p>
        <p class="card-text">{{$comic->series}}</p>
        <p class="card-text">{{$comic->sale_date}}</p>
        <p class="card-text">{{$comic->type}}</p>
        <p class="card-text">{{$comic->artists}}</p>
        <p class="card-text">{{$comic->writers}}</p>
        <p class="card-text">{{$comic->price}}</p>

        
      </div>
    </div>

</div>
@endsection