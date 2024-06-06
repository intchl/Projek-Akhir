@extends('layout.master')

@section('title')
    Detail Buyer
@endsection

@section('content')
<p>Name : {{$buyer->name}}</p>
<p>Email : {{$buyer->email}}</p>
<a href="/buyer"><button type="button" class="btn btn-light" >Back</button></a>
@endsection