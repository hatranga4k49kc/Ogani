<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
class BackendController extends Controller
{
//    public function index(Request $request)
//    {
//        // Kiểm tra Session login có tồn tại hay không
//        if ($request->session()->has('login') && $request->session()->get('login')) {
//
//            // Session login tồn tại và có giá trị là true, chuyển hướng người dùng đến trang admin
//            $category = Category::all();
//            return view('backend.product.listCategory', compact('category'));
////            return view('backend.admin');
//        }
//
//        // Session không tồn tại, người dùng chưa đăng nhập
//        // Gán một thông báo vào Session not-login
//        $message = 'Bạn chưa đăng nhập.';
//        $request->session()->flash('not-login', $message);
//
//        // Chuyển hướng về trang đăng nhập
//        return view('backend.login_logout.login');

//    }
//    public function Showlogin()
//    {
//        return view('backend.login_logout.login');
//    }

//    public function login(Request $request)
//    {
//        $email = $request->email;
//        $pass = $request->password;
//        $result = DB::table('admin')->where('email', $email)->get()->toArray();
//        if (count($result) != 0) {
//            foreach ($result as $value) {
//
//                if ($value->password == $pass) {
//                    $request->session()->push('login', true);
//
//                    return redirect()->route('backend.index');
//                }
//            }
//        } else {
//            $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
//            $request->session()->flash('login-fail', $message);
//            return view('backend.login_logout.login');
//        }
//    }

    public function createCategory()
    {
        return view('backend.product.createCategory');
    }
    public function storeCategory(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        Session::flash('success', 'Thêm mới danh mục thành công');
        return redirect()->route('backend.index');

    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.product.editCategory', compact('category'));
    }
    public function updateCategory(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->save();
        Session::flash('success', 'Cập nhật danh mục thành công');
        return redirect()->route('backend.index');
    }

    public function destroyCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->products()->delete();
        $category->delete();
        Session::flash('success', 'Xóa danh mục thành công');
        return redirect()->route('backend.index');
    }

    public function getProduct($id)
    {
        $category = Category::findOrFail($id);
        $product = Product::where('category_id', $category->id)->get();
        return view('backend.product.listProduct', compact('product', 'category'));
    }

    public function createProduct($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.product.createProduct', compact('category'));
    }
    public function storeProduct(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
//        $product->category_id = $request->input('category_id');
        $product->category_id = $id;
        //upload file
        if ($request->hasFile('image')) {
           $destinaton = 'frontend/img/product';
           $img = $request->file('image');
           $img_name = $img->getClientOriginalName();
//           $path = $request->file('image')->storeAs($destinaton, $img_name );
            $img->move($destinaton,$img_name);
           $product->image = $img_name;
        }
//        dd($request->file('list_image'));
        if($request->hasFile('list_image')){
            $name_image= '';
            $images = $request->file('list_image');
//            dd($images);

           foreach ($images  as $key=>$value){
               $file_names = $value->getClientOriginalName();
               $name_image .= $file_names.',';
               $value->move(public_path('frontend/img/product/details'),$file_names);
           }
//            dd(trim($name_image,","));
//           dd($name_image);

            $str_name = trim($name_image,",");
//            $str_name = implode (", ", $name_image);

        }
        $product->image_list = $str_name;

        $product->save();

        //dung session de dua ra thong bao
        Session::flash('success_product', 'Tạo mới sản phẩm thành công');

        return redirect()->route('backend.show.product', $id);
    }

    public function detailsProduct($id, $param)
    {
        $category = Category::findOrFail($id);
        $product = Product::findOrFail($param);
        $arr_img = explode(',', $product->image_list);
//        dd($arr_img);
        return view('backend.product.detailsProduct', compact('product', 'category', 'arr_img'));
    }

//    //Thêm nhân viên
//    public function ShowAddStaff()
//    {
//        return view('backend.login_logout.AddStaff');
//    }

//        public function getProduct($id)
//    {
//        $category = Category::findOrFail($id);
//        $product = Product::where('category_id', $category->id)->get();
//        $products = Product::paginate(5);
//        return view('backend.product.listProduct', compact('product', 'category'));
//    }
//







}
