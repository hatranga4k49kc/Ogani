@extends('backend.login_logout.master')
@section('content')
    <div class="title m-b-md">
        Đăng Ký
    </div>

    <form class="text-left" method="post" action="{{route('backend.admin.check.register')}}">
        @csrf

        <div class="form-group">
            <label for="inputUsername">Tên người dùng</label>
            <input type="text"
                   class="form-control"
                   id="inputUsername"
                   name="name"
                   placeholder="Enter username"
                   required>
        </div>
        <div class="form-group">
            <label for="inputUsername">Email người dùng</label>
            <input type="text"
                   class="form-control"
                   id="inputUsername"
                   name="email"
                   placeholder="Enter username"
                   required>
        </div>

        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password"
                   class="form-control"
                   id="inputPassword"
                   name="password"
                   placeholder="Password"
                   required>
        </div>
        <button type="submit" class="btn btn-primary">Đăng Ký</button>
    </form>
    </div>
@endsection

