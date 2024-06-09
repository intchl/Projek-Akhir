@extends('layout.master')

@section('title')
    Detail Ticket
@endsection

@section('content')
<div class="container mt-3">
  @if($transaction)
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ asset('images/' . $transaction->ticket->film->poster) }}" class="card-img-top " alt="{{ $transaction->ticket->film->title }}">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"> {{ $transaction->ticket->film->title }}</h5>
          <p class="card-text">{{ $transaction->ticket->film->schedule }}</p>
          <p class="card-text">{{ $transaction->ticket->price }}</p>
          <p class="card-text">Seat No: {{ $transaction->seat_number }}</p>
          <p class="card-text"><small class="text-muted">Transaction Date: {{ $transaction->date }}</small></p>
        </div>
      </div>
    </div>
  </div>
  @else
    <h3>No Data</h3>
  @endif
  <a href="/transactions"><button type="button" class="btn btn-light mt-4">Back</button></a>
</div>
@endsection
