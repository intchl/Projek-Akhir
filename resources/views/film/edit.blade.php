@extends('layout.master')

@section('title')
    Add Film
@endsection

@section('content')
<form action="/film/{{$film->id}}" method="post">

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
      <label>Title</label>
      <input type="text" class="form-control" name="title" value="{{ $film->title }}">
    </div>
    <div class="form-group">
        <label>Synopsis</label>
        <textarea name="synopsis" id="" cols="30" rows="10" class="form-control">{{ $film->synopsis }}</textarea>
      </div>
      <div class="form-group">
        <label>Schedule</label>
        <input type="string" class="form-control" name="schedule" value="{{ $film->schedule }}">
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/film"><button type="button" class="btn btn-light" >Cancel</button></a>
  </form>
@endsection