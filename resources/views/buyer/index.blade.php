@extends('layout.master')

@section('title')
    Buyer
    <a href="/buyer/create" class="float-right"><button type="button" class="btn btn-primary btn-rounded btn-icon" ><i class=" typcn typcn-plus menu-icon"></i></button></a>
@endsection

@section('content')
<table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @forelse ($buyer as $key=>$item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $item->name }}</td>
            <td>
                <form action="/buyer/ {{$item->id}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/buyer/{{$item->id}}" ><button type="button" class="btn btn-info btn-rounded btn-icon" ><i class=" typcn typcn-info-large-outline menu-icon"></i></button></a>
                    @auth
                    <a href="/buyer/{{$item->id}}/edit" ><button type="button" class="btn btn-warning btn-rounded btn-icon" ><i class=" typcn typcn-edit menu-icon"></i></button></a>
                    <button type="submit" class="btn btn-danger btn-rounded btn-icon"><i class="typcn typcn-trash menu-icon" ></i></button>
                    @endauth
                </form>
            </td>
          </tr>
        @empty
            <tr>
                <th>No has buyer</th>
            </tr>
        @endforelse
    </tbody>
  </table>
@endsection