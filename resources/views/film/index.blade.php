@extends('layout.master')

@section('title')
    Film
    @auth
    <a href="/film/create" class="float-right"><button type="button" class="btn btn-primary btn-rounded btn-icon" ><i class=" typcn typcn-plus menu-icon"></i></button></a> 
    @endauth
    
@endsection
@section('subtitle')
    Best Seller Film
@endsection

@section('content')
<div class="row mt-3">
    @forelse ($film as $key => $item)
    <div class="col-md-3 mb-3">
        <div class="card">
            <img src="{{ asset('images/' . $item->poster) }}" class="card-img-top poster" alt="{{ $item->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">Schedule Time {{ $item->schedule}}</p>
                <div class="d-flex justify-content-between">
                    <a href="/film/{{ $item->id }}" class="btn btn-info btn-sm ">
                        <i class="typcn typcn-info-large-outline menu-icon"></i>
                    </a>
                    @auth
                    <a href="/film/{{ $item->id }}/edit" class="btn btn-warning btn-sm">
                        <i class="typcn typcn-edit menu-icon"></i>
                    </a>
                    <form action="/film/{{ $item->id }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="typcn typcn-trash menu-icon"></i>
                        </button>
                    </form> 
                    @endauth  
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <div class="alert alert-warning" role="alert">
            No Data
        </div>
    </div>
    @endforelse
</div>

@endsection