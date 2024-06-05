@extends('layout.master')

@section('title')
    Contoh
    <a href="/add" class="float-right"><button type="button" class="btn btn-success btn-rounded btn-icon" ><i class=" typcn typcn-plus menu-icon"></i></button></a>
@endsection

@section('subtitle')
    Detailed Data for Contoh
@endsection

@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th>User</th>
        <th>Product</th>
        <th>Sale</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Jacob</td>
        <td>Photoshop</td>
        <td class="text-danger"> 28.76% <i class="typcn typcn-arrow-sorted-down"></i></td>
        <td><label class="badge badge-danger">Pending</label></td>
        <td>
          <a href="/info"><button type="button" class="btn btn-info btn-rounded btn-icon"><i class=" typcn typcn-info-large-outline menu-icon"></i></button></a>
          <a href="/edit"><button type="button" class="btn btn-warning btn-rounded btn-icon"><i class=" typcn typcn-edit menu-icon"></i></button></a>
          <a href="/delete"><button type="button" class="btn btn-danger btn-rounded btn-icon"><i class="typcn typcn-trash menu-icon"></i></button></a>
            
         </td>
      </tr>
      <tr>
        <td>Messsy</td>
        <td>Flash</td>
        <td class="text-danger"> 21.06% <i class="typcn typcn-arrow-sorted-down"></i></td>
        <td><label class="badge badge-warning">In progress</label></td>
        <td>
            <button type="button" class="btn btn-info btn-rounded btn-icon"><i class=" typcn typcn-info-large-outline menu-icon"></i></button>
            <button type="button" class="btn btn-warning btn-rounded btn-icon"><i class=" typcn typcn-edit menu-icon"></i></button>
            <button type="button" class="btn btn-danger btn-rounded btn-icon"><i class="typcn typcn-trash menu-icon"></i></button>
         </td>
      </tr>
      <tr>
        <td>John</td>
        <td>Premier</td>
        <td class="text-danger"> 35.00% <i class="typcn typcn-arrow-sorted-down"></i></td>
        <td><label class="badge badge-info">Fixed</label></td>
        <td>
            <button type="button" class="btn btn-info btn-rounded btn-icon"><i class=" typcn typcn-info-large-outline menu-icon"></i></button>
            <button type="button" class="btn btn-warning btn-rounded btn-icon"><i class=" typcn typcn-edit menu-icon"></i></button>
            <button type="button" class="btn btn-danger btn-rounded btn-icon"><i class="typcn typcn-trash menu-icon"></i></button>
         </td>
      </tr>
      <tr>
        <td>Peter</td>
        <td>After effects</td>
        <td class="text-success"> 82.00% <i class="typcn typcn-arrow-sorted-up"></i></td>
        <td><label class="badge badge-success">Completed</label></td>
        <td>
            <button type="button" class="btn btn-info btn-rounded btn-icon"><i class=" typcn typcn-info-large-outline menu-icon"></i></button>
            <button type="button" class="btn btn-warning btn-rounded btn-icon"><i class=" typcn typcn-edit menu-icon"></i></button>
            <button type="button" class="btn btn-danger btn-rounded btn-icon"><i class="typcn typcn-trash menu-icon"></i></button>
         </td>
      </tr>
      <tr>
        <td>Dave</td>
        <td>53275535</td>
        <td class="text-success"> 98.05% <i class="typcn typcn-arrow-sorted-up"></i></td>
        <td><label class="badge badge-warning">In progress</label></td>
        <td>
          <form>
            <a href="/"><button type="button" class="btn btn-info btn-rounded btn-icon" ><i class=" typcn typcn-info-large-outline menu-icon"></i></button></a>
            <a href="#"><button type="button" class="btn btn-warning btn-rounded btn-icon" ><i class=" typcn typcn-edit menu-icon"></i></button></a>
            <a href="#"><button type="button" class="btn btn-danger btn-rounded btn-icon" ><i class="typcn typcn-trash menu-icon"></i></button></a>
            {{-- <input type="submit" class="btn btn-danger btn-sm" value="Delete"> --}}
        </form>
         </td>
      </tr>
    </tbody>
</table>
@endsection


