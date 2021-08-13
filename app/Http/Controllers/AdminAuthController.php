<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('backend.product.listCategory', compact('category'));
    }

//    public function ShowRegister()
//    {
//        return view('backend.login_logout.register');
//    }

    public function register(Request $request)
    {
        Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password)
        ]);
        return redirect()->route('backend.index');
    }

    public function showLogin()
    {
        return view('backend.login_logout.login');
    }
    public function Login(Request $request)
    {
        if(Auth::guard('webadmin')
            ->attempt($request->only(['email', 'password'])))
        {
            return redirect()->route('backend.index');

        }
        else {
            $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
            $request->session()->flash('login-fail', $message);
            return view('backend.login_logout.login');
        }
    }

    public function logout()
    {
        Auth::guard('webadmin')->logout();

        return redirect()->route('backend.admin.login');
    }

//    public function showPageGuest()
//
//    {
//
//        if (!$this->adminCan('view-page-admin')) {
//
//            abort('403', __('Bạn không có quyền thực hiện thao tác này'));
//
//        }
//
//        return view("layouts.page_guest");
//
//    }


    public function  ShowRegister()

    {

        if (!$this->adminCan('view-page-register')) {

            abort('403', __('Bạn không có quyền thực hiện thao tác này'));

        }

        return view("backend.login_logout.register");

    }

}
