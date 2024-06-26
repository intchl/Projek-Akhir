@extends('layout.master')

@section('title')
    Add Data Buyer
@endsection

@section('content')
<form action="/dataBuyers" method="post">
 
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
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="Email">
    </div>
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/buyer"><button type="button" class="btn btn-light" >Cancel</button></a>

    </form>
@endsection
