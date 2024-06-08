@extends('layout.master')

@section('title')
    Buyer
@endsection

@section('content')
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
      @forelse ($buyers as $key => $buyer)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $buyer->user->name }}</td>
            <td>{{ $buyer->user->email }}</td>
            <td>{{ $buyer->age }}</td>
            <td>
                <form action="/buyer/{{ $buyer->id }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/buyer/{{ $buyer->id }}"><button type="button" class="btn btn-info btn-rounded btn-icon"><i class="typcn typcn-info-large-outline menu-icon"></i></button></a>
                </form>
            </td>
        </tr>
      @empty
        <tr>
            <td colspan="5">No buyers available</td>
        </tr>
      @endforelse
    </tbody>
</table>
@endsection
