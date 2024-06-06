@extends('layout.master')

@section('title')
    Detail Film
@endsection

@section('content')
    <h3>{{$film->title}}</h3>
    <p>Synopsis : {{ $film->synopsis }}</p>
    <p>Schedule : {{$film->schedule}}</p>

    <a href="/film"><button type="button" class="btn btn-light" >Back</button></a>
@endsection