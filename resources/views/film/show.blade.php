@extends('layout.master')

@section('title')
    Detail Film
@endsection

@section('content')
<div class="container mt-3">
    <div class="card" style="border: none">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ asset('images/' . $film->poster) }}" width="100%" >
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$film->title}}</h5>
              <p class="card-text"><p>Synopsis : {{ $film->synopsis }}</p>
              <p>Schedule : {{$film->schedule}}</p></p>
            </div>
          </div>
        </div>
      </div>
      <a href="/film"><button type="button" class="btn btn-light mt-4" >Back</button></a>
</div>
@endsection