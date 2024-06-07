@extends('layout.master')

@section('title')
    Edit Film
@endsection

@section('content')
<form action="/film/{{$film->id}}" method="post" enctype="multipart/form-data">

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif

  @csrf
  @method('put')
  <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name="title" value="{{ $film->title }}">
  </div>
  <div class="form-group">
      <label>Synopsis</label>
      <textarea name="synopsis" cols="30" rows="10" class="form-control">{{ $film->synopsis }}</textarea>
  </div>
  <div class="form-group">
      <label>Schedule</label>
      <input type="string" class="form-control" name="schedule" value="{{ $film->schedule }}">
  </div>
  <div class="form-group">
      <label for="poster">Poster</label>
      <input type="file" name="poster" class="form-control-file">
      @if($film->poster)
          <img src="{{ asset('images/' . $film->poster) }}" alt="{{ $film->title }}" width="100" class="mt-3">
      @endif
  </div>
  <button type="submit" class="btn btn-primary mr-2">Submit</button>
  <a href="/film"><button type="button" class="btn btn-light">Cancel</button></a>
</form>

@endsection