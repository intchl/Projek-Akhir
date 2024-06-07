@extends('layout.master')

@section('title')
    Add Ticket
@endsection

@section('content')
<form action="/ticket" method="post" enctype="multipart/form-data">
    {{-- validation --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- form input --}}
    @csrf
    <div class="form-group">
      <label>Price</label>
      <input type="number" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label>Seat Number</label>
        <input type="string" class="form-control" name="seat_number">
    </div>
    <div class="form-group">
        <label>Film</label>
        <select name="film_id" class="form-control" id="">
            <option value="">--Select Film--</option>
            @forelse ($film as $item)
                <option value="{{$item->id}}"> {{$item->title}}</option>
            @empty
                <option value="No Film Data"></option>
            @endforelse
        </select>
    </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/ticket"><button type="button" class="btn btn-light" >Cancel</button></a>
  </form>
@endsection