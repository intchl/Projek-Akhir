@extends('layout.master')

@section('title')
    Detail Data Buyers
@endsection

@section('content')
@if($dataBuyers)
    <p>Name : {{$dataBuyers->name}}</p>
    <p>Email : {{$dataBuyers->email}}</p>
@else
    <h3>No Data</h3>
@endif
<a href="/dataBuyers"><button type="button" class="btn btn-light" >Back</button></a>
@endsection
