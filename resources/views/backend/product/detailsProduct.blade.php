@extends('backend.admin')
@section('content')
<h1>Chi tiết sản phẩm</h1>
<p>Tên sản phẩm : {{$product->name}}</p>
<p>Mô tả sản phẩm : {{$product->description}}</p>
<p>Nguồn Gốc:</p>
<p>Xuất Xứ:</p>
<p>Ngày nhập kho:{{$product->updated_at}} </p>
<img src="{{ asset('frontend/img/product/' . $product->image) }}" class="rounded" alt="" width="600" height="600"><br>
{{--<img src="{{ asset('frontend/img/product/' . $product->image) }}" class="rounded float-end" alt="" width="200" height="200">--}}
{{--<img src="{{ asset('frontend/img/product/' . $product->image) }}" class="rounded float-start" alt="" width="200" height="200">--}}
{{--<img src="{{ asset('frontend/img/product/' . $product->image) }}" class="rounded float-end" alt="" width="200" height="200">--}}
{{--{{$product->image_list}}--}}
<p>Ảnh Chi Tiết:</p>
    @foreach($arr_img as $key=>$value)
        <img src="{{ asset('frontend/img/product/details/' . $value) }}" class="rounded" alt="" width="200" height="200">
    @endforeach
@endsection
