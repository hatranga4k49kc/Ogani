<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/style.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/sweetalert.css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="/frontend/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href=""><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="/frontend/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="{{route('shoping_cart')}}">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog_detail">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="/frontend/img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="/frontend/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./">Home</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="{{route('shoping_cart')}}">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog_detail">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="{{route('shoping_cart')}}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    @yield('content')

    <!-- Hero Section Begin -->
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <!-- Categories Section End -->


    <!-- Featured Section Begin -->
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="/frontend/img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="/frontend/img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->



    <!-- Js Plugins -->
    <script src="/frontend/js/jquery-3.3.1.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/jquery.nice-select.min.js"></script>
    <script src="/frontend/js/jquery-ui.min.js"></script>
    <script src="/frontend/js/jquery.slicknav.js"></script>
    <script src="/frontend/js/mixitup.min.js"></script>
    <script src="/frontend/js/owl.carousel.min.js"></script>
    <script src="/frontend/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
<script>
    $(document).ready(function (){
        $(".add-to-cart").click(function (){
            var id = $(this).data('id_product');
            var cart_product_id = $('.cart_product_id_'+id).val();
            var cart_product_name = $('.cart_product_name_'+id).val();
            var cart_product_image = $('.cart_product_image_'+id).val();
            var cart_product_price = $('.cart_product_price_'+id).val();
            var cart_product_qty = $('.cart_product_qty_'+id).val();
            var _token = $('input[name="_token"]').val();
            // alert(cart_product_name);

            $.ajax({
                url: '/add-cart-ajax',
                type: 'POST',
                data:{cart_product_id:cart_product_id, cart_product_name:cart_product_name, cart_product_image:cart_product_image, cart_product_price:cart_product_price, cart_product_qty:cart_product_qty, _token:_token},
                success:function (data){
                    swal("Thêm sản phẩm vào giỏ hàng thành công!");
                    // swal({
                    //     title: "Đã thêm sản phẩm vào giỏ hàng,"
                    //     text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                    //     showCancelButton: true,
                    //     cancelButtonText: "Xem tiếp",
                    //     confirmButtonClass: "btn-success",
                    //     confirmButtonText: "Đi đến giỏ hàng",
                    //     closeOnConfirm: false
                {{--},--}}
                {{--    function() {--}}
                {{--        window.location.href ={{url('/shoping_cart')}};--}}
                {{--    });--}}
                }
            })
        })
    })
</script>
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

</body>

</html>
