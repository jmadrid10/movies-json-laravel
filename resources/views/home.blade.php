@extends('layouts.master')
@section('content')
    <div class="pt-4">
      {{$movies->links()}}
    </div>
    @foreach ($movies as $item)
    <div class="col-6 col-md-3 pt-2 p-2">
        <div class="card bg-image hover-overlay ripple">
            <img src="https://image.tmdb.org/t/p/w300/{{$item->poster_path}}" class="card-img-top" alt="{{$item->original_title}}"/>
            <a href="#exampleModal{{$item->id}}" data-mdb-toggle="modal" data-mdb-target="#exampleModal{{$item->id}}">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
              <div class="d-flex justify-content-center align-items-center h-100">
                <p class="text-white mb-0">
                  Ver detalles
                </p>
              </div>
            </div>
          </a>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <img src="https://image.tmdb.org/t/p/w300/{{$item->backdrop_path}}" class="card-img-top" alt="{{$item->original_title}}"/>
            <div class="modal-body">
              <p class="card-text text-dark">{{$item->original_title}}</p>
              <p class="card-text">{{$item->overview}}</p>
            </div>
            <div class="modal-footer small me-auto">
              <p class="card-text">
                <i class="fa fa-star fa-sm" style="background-color: rgb(207, 125, 49)"></i> {{$item->vote_average}} - votes: {{$item->vote_count}}
              </p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
@endsection
