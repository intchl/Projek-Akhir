@extends('layout.master')

@section('title')
    Ticket
@endsection

@section('content')
<a href="/ticket/create" class="float-right"><button type="button" class="btn btn-success btn-rounded btn-icon" ><i class=" typcn typcn-plus menu-icon"></i></button></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Price</th>
        <th scope="col">Seat Number</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($ticket as $key=>$item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $item->price }}</td>
            <td>{{ $item->seat_number }}</td>

            <td>
                <form action="/ticket/ {{$item->id}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/ticket/{{$item->id}}" ><button type="button" class="btn btn-info btn-rounded btn-icon" ><i class=" typcn typcn-info-large-outline menu-icon"></i></button></a>
                    <a href="/ticket/{{$item->id}}/edit" ><button type="button" class="btn btn-warning btn-rounded btn-icon" ><i class=" typcn typcn-edit menu-icon"></i></button></a>
                    <button type="submit" class="btn btn-danger btn-rounded btn-icon"><i class="typcn typcn-trash menu-icon" ></i></button>
                </form>
            </td>
          </tr>
        @empty
            <tr>
                <th>Lihat Film</th>
            </tr>
        @endforelse
    </tbody>
  </table>
@endsection