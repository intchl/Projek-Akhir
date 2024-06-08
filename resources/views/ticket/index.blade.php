@extends('layout.master')

@section('title')
    Ticket
    @auth
    <a href="/ticket/create" class="float-right"><button type="button" class="btn btn-rounded btn-icon btn-primary"><i class="typcn typcn-plus menu-icon"></i></button></a>
    @endauth
@endsection

@section('content')

@if ($ticket->isNotEmpty())
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Price</th>
        <th scope="col">Seat Number</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($ticket as $key=>$item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $item->film->title }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->seat_number }}</td>

            <td>
                <form action="/ticket/{{$item->id}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/ticket/{{$item->id}}" ><button type="button" class="btn btn-info btn-rounded btn-icon"><i class="typcn typcn-info-large-outline menu-icon"></i></button></a>
                    @auth
                    <a href="/ticket/{{$item->id}}/edit" ><button type="button" class="btn btn-warning btn-rounded btn-icon"><i class="typcn typcn-edit menu-icon"></i></button></a>
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
