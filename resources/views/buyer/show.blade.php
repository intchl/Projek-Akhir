@extends('layout.master')

@section('title')
    Detail Buyer
@endsection

@section('content')
@if($buyer->user)
<p>Name : {{ $buyer->user->name }}</p>
<p>Age : {{$buyer->age}}</p>
<p>Email : {{ $buyer->user->email }}</p>
<p>Bio : {{$buyer->bio}}</p>
@else
<h3>Tidak ada data</h3>
@endif
<a href="/buyer"><button type="button" class="btn btn-light" >Back</button></a>
@endsection