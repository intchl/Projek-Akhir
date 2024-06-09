@extends('layout.master')

@section('title')
    Transactions
    @auth
    <a href="/transactions/create" class="float-right"><button type="button" class="btn btn-rounded btn-icon btn-primary"><i class="typcn typcn-plus menu-icon"></i></button></a>
    @endauth
@endsection

@section('content')

@if ($transactions->isNotEmpty())
<table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Buyer Name</th>
        <th scope="col">Film Title</th>
        <th scope="col">Film Schedule</th>
        <th scope="col">Seat Number</th>
        <th scope="col">Transaction Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($transactions as $key => $item)
      <tr>
        <th scope="row">{{ $key + 1 }}</th>
        <td>{{ $item->buyer->dataBuyer->name }}</td>
        <td>{{ $item->ticket->film->title }}</td>
        <td>{{ $item->ticket->film->schedule }}</td>
        <td>{{ $item->seat_number }}</td>
        <td>{{ $item->date }}</td>
        <td>
          <form action="/transactions/{{$item->id}}" method="post">
            @csrf
            @method('delete')
            <a href="/transactions/{{$item->id}}" ><button type="button" class="btn btn-info btn-rounded btn-icon"><i class="typcn typcn-info-large-outline menu-icon"></i></button></a>
            @auth
            <a href="/transactions/{{$item->id}}/edit" ><button type="button" class="btn btn-warning btn-rounded btn-icon"><i class="typcn typcn-edit menu-icon"></i></button></a>
            <button type="submit" class="btn btn-danger btn-rounded btn-icon"><i class="typcn typcn-trash menu-icon"></i></button>
            @endauth
            
        </form>
        </td>
    </tr>
      @endforeach
    </tbody>
</table>
@else
<div class="col-12 mt-3">
    <div class="alert alert-warning" role="alert">
        No Data
    </div>
</div>
@endif

@endsection
