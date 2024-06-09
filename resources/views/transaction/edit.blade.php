@extends('layout.master')

@section('title')
    Edit Transaction
@endsection

@section('content')
<form action="/transactions/{{$transaction->id}}" method="post">
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
        <label for="buyer_id">Buyer</label>
        <select class="form-control" id="buyer_id" name="buyers_id" required>
            <option value="">--Select Buyer--</option>
            @foreach($buyers as $buyer)
                <option value="{{ $buyer->id }}">{{ $buyer->dataBuyer->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="ticket_id">Film</label>
        <select class="form-control" id="ticket_id" name="ticket_id" required>
            <option value="">--Select Film--</option>
            @foreach($ticket as $item)
                <option value="{{ $item->id }}">{{ $item->film->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="seat_number">Seat Number</label>
        <input type="text" class="form-control" id="seat_number" name="seat_number" required value="{{$transaction->seat_number}}">
    </div>
    <div class="form-group">
        <label for="date">Transaction Date</label>
        <input type="date" class="form-control" id="date" name="date" required value="{{$transaction->date}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/transactions"><button type="button" class="btn btn-light" >Cancel</button></a>
</form>
@endsection
