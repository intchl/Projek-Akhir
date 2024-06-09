@extends('layout.master')

@section('title')
    Add Buyer
@endsection

@section('content')
<form action="/buyers" method="post" enctype="multipart/form-data">

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
        <label>Data Buyers</label>
        <select name="data_buyers_id" class="form-control" id="">
            <option value="">--Select Name--</option>
            @forelse ($dataBuyers as $item)
                <option value="{{ $item->id }}"> {{ $item->name }}</option>
            @empty
                <option value="" disabled>No Data</option>
            @endforelse
        </select>
    </div>
    <div class="form-group">
      <label>Age</label>
      <input type="number" class="form-control" name="age">
    </div>
    <div class="form-group">
        <label>Bio</label>
        <textarea name="bio" id="" cols="30" rows="8" class="form-control"></textarea>
    </div>
    
      <button type="submit" class="btn btn-primary mr-2">Submit</button>
      <a href="/buyers"><button type="button" class="btn btn-light">Cancel</button></a>
</form>
@endsection
