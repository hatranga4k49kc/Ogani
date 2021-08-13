@extends('frontend.main')

@section('content')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->

    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="frontend/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->

    <section class="shoping-cart spad">
        <div class="container">
            <form method="post" action="{{url('/update_cart')}}">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        @php
                        $message = Session::get('message');
                            if($message){
                                echo $message;
                                Session::put('message', null);
                            }
                        @endphp
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @php
                                $total = 0;
                                foreach (Session::get('cart') as $key => $value){
                                    $total += $value['product_price']*$value['product_qty'];
                                }
                            @endphp

                            @foreach(Session::get('cart') as $key => $value)

                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="{{ asset('frontend/img/product/' . $value['product_image']) }}" alt="" width="100" height="100">
                                        <h5>{{$value['product_name']}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        ${{$value['product_price']}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1" name="qty">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        ${{$value['product_price']*$value['product_qty']}}
                                    </td>
                                    <td class="shoping__cart__item__close">
{{--                                        <span class="icon_close"></span>--}}
                                        <a href="{{url('/delete_cart/'.$value['session_id'])}}" ><span class="icon_close"></span></a>
                                    </td>
                                </tr>
                                @endforeach()

{{--                                <tr>--}}
{{--                                    <td class="shoping__cart__item">--}}
{{--                                        <img src="frontend/img/cart/cart-2.jpg" alt="">--}}
{{--                                        <h5>Fresh Garden Vegetable</h5>--}}
{{--                                    </td>--}}
{{--                                    <td class="shoping__cart__price">--}}
{{--                                        $39.00--}}
{{--                                    </td>--}}
{{--                                    <td class="shoping__cart__quantity">--}}
{{--                                        <div class="quantity">--}}
{{--                                            <div class="pro-qty">--}}
{{--                                                <input type="text" value="1">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td class="shoping__cart__total">--}}
{{--                                        $39.99--}}
{{--                                    </td>--}}
{{--                                    <td class="shoping__cart__item__close">--}}
{{--                                        <span class="icon_close"></span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td class="shoping__cart__item">--}}
{{--                                        <img src="frontend/img/cart/cart-3.jpg" alt="">--}}
{{--                                        <h5>Organic Bananas</h5>--}}
{{--                                    </td>--}}
{{--                                    <td class="shoping__cart__price">--}}
{{--                                        $69.00--}}
{{--                                    </td>--}}
{{--                                    <td class="shoping__cart__quantity">--}}
{{--                                        <div class="quantity">--}}
{{--                                            <div class="pro-qty">--}}
{{--                                                <input type="text" value="1">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td class="shoping__cart__total">--}}
{{--                                        $69.99--}}
{{--                                    </td>--}}
{{--                                    <td class="shoping__cart__item__close">--}}
{{--                                        <span class="icon_close"></span>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Upadate Cart</a>
                    </div>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Discount Codes</h5>
                            <form action="#">
                                <input type="text" placeholder="Enter your coupon code">
                                <button type="submit" class="site-btn">APPLY COUPON</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Subtotal <span>${{$total}}</span></li>
                            <li>Coupon <span></span></li>
                            <li>Phí vận chuyển <span></span></li>
                            <li>Total <span>${{$total}}</span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shoping Cart Section End -->

    <!-- Footer Section Begin -->

{{--    <script>--}}
{{--        function AddCart(id){--}}
{{--            $.ajax({--}}
{{--                url: '/AddCart/'+id,//đường dẫn--}}
{{--                type: 'GET',// là get hay post--}}
{{--            }).done(function (response){ //cái response là tên đặt thế nào cũng được nhó--}}
{{--                console.log(response);--}}
{{--                $("#change-item-cart").empty(); //có thì xóa trước sau đó thêm--}}
{{--                $("#change-item-cart").html(response);--}}
{{--            })--}}
{{--        }--}}
{{--    </script>--}}
@endsection()
