@extends('layout.master')

@section('title')
    Buyers
    @auth
    <a href="/buyers/create" class="float-right">
        <button type="button" class="btn btn-primary btn-rounded btn-icon">
            <i class="typcn typcn-plus menu-icon"></i>
        </button>
    </a>
    @endauth
@endsection

@section('content')

@if ($buyers->isNotEmpty())
<table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th> 
        <th scope="col">Email</th> 
        <th scope="col">Age</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($buyers as $key => $item)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $item->dataBuyer->name}}</td>
            <td>{{ $item->dataBuyer->email}}</td>
            <td>{{ $item->age }}</td>
            <td>
              <form action="/buyers/{{ $item->id }}" method="post">
                @csrf
                @method('delete')
                <a href="/buyers/{{ $item->id }}">
                    <button type="button" class="btn btn-info btn-rounded btn-icon">
                        <i class="typcn typcn-info-large-outline menu-icon"></i>
                    </button>
                </a>
                @auth
                <a href="/buyers/{{ $item->id }}/edit">
                    <button type="button" class="btn btn-warning btn-rounded btn-icon">
                        <i class="typcn typcn-edit menu-icon"></i>
                    </button>
                </a>
                <button type="submit" class="btn btn-danger btn-rounded btn-icon">
                    <i class="typcn typcn-trash menu-icon"></i>
                </button>
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
