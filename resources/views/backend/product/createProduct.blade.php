
@extends('backend.admin')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>Thêm mới Sản Phẩm vào Danh mục :{{$category->name}}</h2>
        </div>

        <div class="col-md-12">
            <form method="post" action="{{ route('backend.store.product',$category->id ) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tên Sản phẩm</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="form-group">
                    <label>Giá Sản phẩm</label>
                    <input type="text" class="form-control" name="price" required>
                </div>

                <div class="form-group">
                    <label>Mô tả sản phẩm</label>
                    <textarea class="form-control" rows="3" name="description" required></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh</label>
                    <input type="file" name="image" class="form-control-file" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Ảnh Mô Tả</label>
                    <input type="file" name="list_image[]" class="form-control-file" required multiple ="multiple" >
                </div>

{{--                <div class="form-group">--}}
{{--                    <label for="exampleFormControlFile1">Danh Mục</label>--}}
{{--                    <select class="form-select" aria-label="Default select example" name="category_id">--}}
{{--                        @foreach($category as $row)--}}
{{--                        <option value="{{$row->id}}">{{$row->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-3); return false;">Hủy</button>
            </form>
        </div>
    </div>

@endsection
