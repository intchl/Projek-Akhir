@extends('layout.master')

@section('title')
    Detail Ticket
@endsection

@section('content')
<div class="row">
    @if($ticket->film)
    <div class="card mb-3" >
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="{{ asset('images/' . $ticket->film->poster) }}" class="card-img-top " alt="{{ $ticket->film->title }}">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title mb-3">{{ $ticket->film->title }}</h5>
                <p>Price : {{$ticket->price}} <br> Seat Number : {{$ticket->seat_number}}
                </p>
            </div>
          </div>
        </div>
      </div>
    @else
    <h3>Ticket ini tidak memiliki film</h3>
    @endif
</div>

<a href="/ticket"><button type="button" class="btn btn-light mb-3">Back</button></a>
@endsection
