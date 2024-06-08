@extends('layout.master')

@section('title')
    Edit Buyer
@endsection

@section('content')
<form action="/buyers/{{$buyers->id}}" method="post" enctype="multipart/form-data">
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
        <input type="text" class="form-control" name="name" value="{{ $buyers->dataBuyer->name ?? '' }}" disabled>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" value="{{ $buyers->dataBuyer->email ?? '' }}" disabled>
      </div>
    <div class="form-group">
      <label>Age</label>
      <input type="text" class="form-control" name="age" value="{{ $buyers->age }}">
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" id="" cols="30" rows="8" class="form-control">{{ $buyers->bio }}</textarea>
    </div>
    
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/buyers"><button type="button" class="btn btn-light">Cancel</button></a>
</form>
@endsection
