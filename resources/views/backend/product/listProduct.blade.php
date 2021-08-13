@extends('backend.admin')
@section('content')
    @if (Session::has('success_product'))
        <p class="text-success">
            <i class="fa fa-check" aria-hidden="true"></i>
            {{ Session::get('success_product') }}
        </p>
    @endif
    <table class="table table-striped">
        <h3>Danh mục: {{$category->name}}</h3>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $key => $pro)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{$pro->name}}</td>
                <td>{{$pro->price}}</td>
                <td>
                    <img src="{{ asset('frontend/img/product/' . $pro->image) }} " alt="" width="200" height="200">
                </td>
                <td><a href="{{route('backend.details.product',[$category->id ,$pro->id])}}">Chi Tiết</a></td>
                <td><a href="">Sửa</a></td>
                <td><a href="">Xóa</a></td>

            </tr>
        @endforeach

        </tbody>
        <a class="btn btn-outline-dark" href="{{route('backend.create.product', $category->id)}}">Thêm mới</a>

    </table>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Quay Lại</button>
@endsection
