@extends('backend.admin')
@section('content')
    @if (Session::has('success'))
        <p class="text-success">
            <i class="fa fa-check" aria-hidden="true"></i>
            {{ Session::get('success') }}
        </p>
    @endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col"></th>
      <th scope="col"></th>
        <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($category as $key => $cate)
    <tr>
      <th scope="row">{{ ++$key }}</th>
      <td>{{$cate->name}}</td>
      <td><a href="{{route('backend.show.product', $cate->id)}}">Xem</a></td>
      <td><a href="{{route('backend.edit', $cate->id)}}">Sửa</a></td>
        <td><a href="{{route('backend.destroy', $cate->id)}}">Xóa</a></td>
    </tr>
  @endforeach
  </tbody>
    <a class="btn btn-outline-dark" href="{{route('backend.create')}}">Thêm mới</a>
</table>
@endsection
