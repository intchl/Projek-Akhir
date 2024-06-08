@extends('layout.master')

@section('title')
    Detail Buyer
@endsection

@section('content')
<div class="container mt-3">
  @if($buyers->dataBuyer)
    <p>Name: {{ $buyers->dataBuyer->name }}</p>
    <p>Age: {{ $buyers->age }}</p>
    <p>Email: {{ $buyers->dataBuyer->email }}</p>
    <p>Bio: {{ $buyers->bio }}</p>
  @else
    <h3>Buyer does not have associated data.</h3>
  @endif
  <a href="/buyers"><button type="button" class="btn btn-light mt-4">Back</button></a>
</div>
@endsection
