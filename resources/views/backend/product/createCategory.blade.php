@extends('backend.admin')
@section('content')

    <form action="{{route('backend.store')}}" method="post">
        @csrf
        <h3>Thêm Mới Danh mục</h3>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" name="name">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
    </form>

@endsection
