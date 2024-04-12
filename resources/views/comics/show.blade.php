@extends('layout.app')

@section('content')
<div class="container d-flex  flex-column  align-items-center justify-content-center ">

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

    <div class=" my-4">
      <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a>
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
    </div>

    <!-- Modulo -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">

            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina definitivamente</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              Sei sicuro che vuoi eliminare la pasta "{{$comic->title}}"
            </div>


            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    
                   
                    <button class="btn btn-danger">Elimina</button>
                </form>

            </div>

          </div>
        </div>
    </div>


</div>
@endsection