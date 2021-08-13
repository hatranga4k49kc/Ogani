@extends('backend.admin')
@section('content')
    <h1>Thêm Mới Danh mục</h1>
    <form action="{{route('backend.update', $category->id)}}" method="post">
        @csrf
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" name="name" value="{{$category->name}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
    </form>

@endsection

