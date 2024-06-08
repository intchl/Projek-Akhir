@extends('layout.master')

@section('title')
    Edit Data Buyers
@endsection

@section('content')
<form action="/dataBuyers/{{$dataBuyers->id}}" method="post">
    {{-- validation --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- form input --}}
    @csrf
    @method('put')
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name="name" value="{{$dataBuyers->name}}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" value="{{$dataBuyers->email}}">
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/dataBuyers"><button type="button" class="btn btn-light" >Cancel</button></a>
    </form>
@endsection
