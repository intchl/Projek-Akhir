@extends('layout.master')

@section('title')
    Detail Ticket
@endsection

@section('content')
<p>Price : {{$ticket->price}}</p>
<p>Seat Number : {{$ticket->seat_number}}</p>

<div class="row">
    @if($ticket->film)
    <div class="col-md-3 mb-3">
        <div class="card">
            <img src="{{ asset('images/' . $ticket->film->poster) }}" class="card-img-top poster" alt="{{ $ticket->film->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $ticket->film->title }}</h5>
            </div>
        </div>
    </div>
    @else
    <h3>Ticket ini tidak memiliki film</h3>
    @endif
</div>

<a href="/ticket"><button type="button" class="btn btn-light">Back</button></a>
@endsection
