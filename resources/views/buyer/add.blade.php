@extends('layout.master')

@section('title')
    Add Buyer
@endsection

@section('content')
<form action="/buyer" method="post">
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
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
    <div class="form-group">
            <label>Age</label>
            <input type="string" class="form-control" name="age"  placeholder="Age">
          </div>       
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email"  placeholder="Email">
      </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" id="" cols="30" rows="10" class="form-control" placeholder="Bio"></textarea>
      </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/buyer"><button type="button" class="btn btn-light" >Cancel</button></a>

    </form>
@endsection
