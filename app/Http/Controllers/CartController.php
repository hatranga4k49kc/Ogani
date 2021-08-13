<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
//use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function AddCart(Request $request, $id)
    {

        $product = DB::table('product')->where('id', $id)->first();

        if($product !=null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->AddCart($product, $id);
            $request->session()->put('Cart', $newCart);


        }

        return view('frontend.cart', compact('newCart'));
    }

    public function gio_hang(){
        return view('frontend.shoping_cart');
    }

    public function add_cart_ajax(Request  $request){
        $data = $request->all();

//        $product = DB::table('product')->where('id', $data['cart_product_id'])->first();

//        if($product !=null){
////            $oldCart = Session('Cart') ? Session('Cart') : null;
////            $newCart = new Cart($oldCart);
////            $newCart->AddCart($product, $id);
////            $request->session()->put('Cart', $newCart);
////
////
//        }
//
//        return view('frontend.cart', compact('newCart'));
        $session_id = substr(md5(microtime()), rand(0,26), 5);
        $cart = Session::get('cart');
        if($cart == true){
            $is_avaiable = 0;
            foreach($cart as $key => $val) {
                if($val['product_id']==$data['cart_product_id']){
                    $is_avaiable++;
                    $cart[$key] = array(
                        'session_id' => $val['session_id'],
                        'product_name' => $val['product_name'],
                        'product_id' => $val['product_id'],
                        'product_image' => $val['product_image'],
                        'product_quantity' => $val['product_quantity'],
                        'product_qty' => $val['product_qty']+ $data['cart_product_qty'],
                        'product_price' => $val['product_price'],
                    );
                    Session::put('cart',$cart);
                }
            }
                if ($is_avaiable == 0) {
                    $cart[] = array(
                        'session_id' => $session_id,
                        'product_name' => $data['cart_product_name'],
                        'product_id' => $data['cart_product_id'],
                        'product_image' => $data['cart_product_image'],
                        'product_qty' => $data['cart_product_qty'],
                        'product_price' => $data['cart_product_price'],
                    );
                    Session::put('cart', $cart);

                }
        } else{
            $cart[] = array(
              'session_id'=> $session_id,
              'product_name'=> $data['cart_product_name'],
              'product_id'=>$data['cart_product_id'],
              'product_image'=>$data['cart_product_image'],
              'product_qty'=>$data['cart_product_qty'],
                'product_price'=>$data['cart_product_price'],
            );
            Session::put('cart', $cart);
        }



        Session::save();

//        dd(Session::get('cart'));


    }
    public function delete_cart($session_id){
        $cart = Session::get('cart');
        if($cart == true) {
            foreach ($cart as $key => $val) {
                if ($val['session_id'] == $session_id) {
                    unset($cart[$key]);
                }
            }
            Session::put('cart', $cart);
            return redirect()->back()->with('message', 'Xóa sản phầm thành công');
        }else{
            return redirect()->back()->with('message', 'Xóa sản Thất bại');
        }
    }
//    public function save_cart(Request $request)
//    {
//        $pro_id = $request->input('pro_id');
//        $quantity = $request->input('quantity');
//        $getpro = Product::findOrFail($pro_id);
//        $pro_name = $getpro->name;
//        $pro_image = $getpro->image;
//        $pro_price = $getpro->price;
//
//        $data = [
//            'id' => $pro_id,
//            'qty'=> $quantity,
//            'name'=> $pro_name,
//            'price' => $pro_price,
//            'weight' => '12',
//            'options' => [
//                'image' => $pro_image,
//            ],
//        ];
//        Cart::add($data);
//        return redirect()->back();
//    }
//
    public function show_cart()
    {
        return view('frontend.shoping_cart');
    }
//    public function delete_cart($rowId)
//    {
//        Cart::remove($rowId);
//
//        return redirect()->back();
//    }
//
//    public function update_quantity(Request $request, $rowId)
//    {
//        Cart::update($rowId, $request->input('update_qty'));
//
//        return redirect()->back();
//    }

}


