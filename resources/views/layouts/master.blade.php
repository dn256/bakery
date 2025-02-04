<!DOCTYPE html>
<html lang="eu">
<head>
    @yield('title')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="image/fav-icon.png" type="image/x-icon" />

    <!-- Icon css link -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/linearicons/style.css" rel="stylesheet">
    <link href="css/flat-icon/flaticon.css" rel="stylesheet">
    <link href="css/stroke-icon/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="css/revolution/css/settings.css" rel="stylesheet">
    <link href="css/revolution/css/layers.css" rel="stylesheet">
    <link href="css/revolution/css/navigation.css" rel="stylesheet">
    <link href="css/animate-css/animate.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="css/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="css/magnifc-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/nice-select/css/nice-select.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    @yield('style')
</head>
<body>
<header class="main_header_area five_header">
    <div class="top_header_area row m0">
        <div class="container">
            <div class="float-left">
                <a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> + (1800) 456 7890</a>
                <a href="mainto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> duynghia9810@gmail.com</a>
            </div>
            <div class="float-right">
                <ul class="h_social list_style">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <ul class="h_search list_style">
                    <li class="shop_cart"><a href="{{route('cart')}}"><i class="lnr lnr-cart"></i></a></li>
                    <li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu_two">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{route('home')}}"><img src="image/logo-2.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav justify-content-end">
                        <li @yield('homePressed')><a href="{{route('home')}}">Trang Chủ</a></li>
                        <li @yield('productsPressed') hidden><a href="{{route('products')}}">Sản phẩm</a></li>
                        <li @yield('menuPressed')><a href="{{route('menu')}}">Menu</a></li>
                        <li @yield('aboutusPressed')><a href="{{route('aboutus')}}">Về chúng tôi</a></li>
                        <li @yield('contactPressed')><a href="{{route('contact')}}">Liên hệ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
@yield('content')
<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="footer_widgets">
        <div class="container">
            <div class="row footer_wd_inner">
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_about_widget">
                        <img src="image/footer-logo.png" alt="">
                        <p>Made with <i class="fa fa-heart heart"></i> by DN</p>
                        <ul class="nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_link_widget">
                        <div class="f_title">
                            <h3>Quick links</h3>
                        </div>
                        <ul class="list_style">
                            <li><a href="#">Your Account</a></li>
                            <li><a href="#">View Order</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditionis</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_link_widget">
                        <div class="f_title">
                            <h3>Thời gian hoạt động</h3>
                        </div>
                        <ul class="list_style">
                            <li><a href="#">Thứ 2. :  Thứ 6.: 8 am - 8 pm</a></li>
                            <li><a href="#">Thứ 7. : 9am - 4pm</a></li>
                            <li><a href="#">Chủ nhật. : Closed</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-3 col-6">
                    <aside class="f_widget f_contact_widget">
                        <div class="f_title">
                            <h3>Thông tin liên hệ</h3>
                        </div>
                        <h4>0899875367</h4>
                        <p>Mew Bakery <br />8/60 Hải Triều, Tp Huế</p>
                        <h5>duynghia9810@gmail.com</h5>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->

<!--================Search Box Area =================-->
<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
    <div class="search_box_inner">
        <h3>Search</h3>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
        </div>
    </div>
</div>
<!--================End Search Box Area =================-->
<script src="js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Rev slider js -->
<script src="js/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="js/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<!-- Extra plugin js -->
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<script src="js/magnifc-popup/jquery.magnific-popup.min.js"></script>
<script src="js/datetime-picker/js/moment.min.js"></script>
<script src="js/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
<script src="js/nice-select/js/jquery.nice-select.min.js"></script>
<script src="js/jquery-ui/jquery-ui.min.js"></script>
<script src="js/lightbox/simpleLightbox.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/map-active.js"></script>

<script src="js/theme.js"></script>
@yield('script')
</body>
</html>