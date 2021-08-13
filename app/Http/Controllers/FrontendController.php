<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
//use Illuminate\Support\Facades\Session;
class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
    	return view('frontend.index', compact('categories','products'));
    }

    public function contact()
    {
    	return view('frontend.contact');
    }

    public function blog_details()
    {
    	return view('frontend.blog_detail');
    }

    public function blog()
    {
    	return view('frontend.blog');
    }

    public function shop_grid()
    {
    	return view('frontend.shop_grid');
    }

//    public function shoping_cart()
//    {
//    	return view('frontend.shoping_cart');
//    }

    public function checkout()
    {
    	return view('frontend.checkout');
    }
    public function shop_details()
    {
    	return view('frontend.shop_details');
    }

//    public function add_cart($id)
//    {
//        $products = DB::table('product')->where('id', $id)->first();
//        if($products != null){
//           $oldCart = Session('Cart') ? Session('Cart'):null;
//            $newCart = new Cart($oldCart);
//            $newCart->AddCart($products, $id);
//            dd($newCart);
////            $oldCart = Session::put('Cart') ?Session::put('Cart'):null;
////            $newCart = new Cart($oldCart);
////            $newCart->AddCart($products, $id);
////            dd($newCart);
//
//        }
//    }
}
