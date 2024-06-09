@extends('layout.master')

@section('title')
    Add Film
@endsection

@section('content')
<form action="/film" method="post" enctype="multipart/form-data">

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
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
        <label>Synopsis</label>
        <textarea name="synopsis" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <label>Schedule</label>
        <input type="string" class="form-control" name="schedule">
      </div>
      <div class="form-group">
        <label>Poster</label>
        <input type="file" class="form-control" name="poster" id="inputGroupFile">
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/film"><button type="button" class="btn btn-light" >Cancel</button></a>
  </form>
@endsection