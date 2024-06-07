@extends('layout.master')

@section('title')
    Detail Ticket
@endsection

@section('content')
<p>Price : {{$ticket->price}}</p>
<p>Seat Number : {{$ticket->seat_number}}</p>
<p>Film : {{$ticket->film_id}}</p>
<a href="/ticket"><button type="button" class="btn btn-light" >Back</button></a>
@endsection