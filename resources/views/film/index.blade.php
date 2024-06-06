@extends('layout.master')

@section('title')
    Film
@endsection

@section('content')
<a href="/film/create" class="btn btn-sm btn-primary">Add Film</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($film as $key=>$item)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$item->title}}</td>
            <td>
                <form action="/film/{{$item->id}}" method="post">
                    @csrf
                    @method('delete')
                    <a href="/film/{{$item->id}}"><button type="button" class="btn btn-info btn-rounded btn-icon" ><i class=" typcn typcn-info-large-outline menu-icon"></i></button></a>
                    <a href="/film/{{$item->id}}/edit"><button type="button"class="btn btn-warning btn-rounded btn-icon" ><i class=" typcn typcn-edit menu-icon"></i></button></a>
                    <button type="submit" class="btn btn-danger btn-rounded btn-icon"><i class="typcn typcn-trash menu-icon"></i></button></a>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <th>Tidak ada film</th>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection