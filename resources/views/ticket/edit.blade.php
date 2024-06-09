@extends('layout.master')

@section('title')
    Edit Ticket
@endsection

@section('content')
<form action="/ticket/{{$ticket->id}}" method="post">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
    @method('put')
    <div class="form-group">
      <label>Price</label>
      <input type="number" class="form-control" name="price" value="{{$ticket->price}}">
    </div>
    <div class="form-group">
        <label>Film</label>
        <select name="film_id" class="form-control" id="">
            <option value="">--Select Film--</option>
            @forelse ($film as $item)
            @if ($item->id  ===$ticket->film_id)
                <option value="{{$item->id}}"selected> {{$item->title}}</option>

            @else
            <option value="{{$item->id}}"> {{$item->title}}</option>  
            @endif
                
            @empty
                <option value="No Film Data"></option>
            @endforelse
        </select>
      <button type="submit" class=" mt-3 btn btn-primary mr-2">Submit</button>
      <a href="/ticket"><button type="button" class="btn btn-light mt-3" >Cancel</button></a>
    </form>
@endsection
