@extends('layouts.master')
@section('title')
    <title>Mew Bakery</title>
@stop

@section('menuPressed')
    class="active"
@stop

@section('content')
    <section class="banner_area">
        <div class="container">
            <div class="banner_text">
                <h3>Menu</h3>
                <ul>
                    <li><a href="index.html">Trang chủ</a></li>
                    <li><a href="shop.html">Menu</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->

    <!--================Product Area =================-->
    <section class="product_area p_100">
        <div class="container">
            <div class="row product_inner_row">
                <div class="col-lg-9">
                    <div class="row m0 product_task_bar">
                        <div class="product_task_inner">
                            <div class="float-left">
                                <a class="active" href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                <span>Hiển thị 1 - 10 trong 55 kết quả</span>
                            </div>
                            <div class="float-right">
                                <h4>Sắp xếp theo:</h4>
                                <select class="short">
                                    <option data-display="Default" value="0">Mặc định</option>
                                    <option value="1">Giá tiền</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row product_item_inner">
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="image/cake-feature/c-feature-1.jpg" alt="">
                                </div>
                                <div class="cake_text">
                                    <h4>$29</h4>
                                    <h3>Strawberry Cupcakes</h3>
                                    <a class="pest_btn" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="image/cake-feature/c-feature-2.jpg" alt="">
                                </div>
                                <div class="cake_text">
                                    <h4>$29</h4>
                                    <h3>Strawberry Cupcakes</h3>
                                    <a class="pest_btn" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="image/cake-feature/c-feature-3.jpg" alt="">
                                </div>
                                <div class="cake_text">
                                    <h4>$29</h4>
                                    <h3>Strawberry Cupcakes</h3>
                                    <a class="pest_btn" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="image/cake-feature/c-feature-4.jpg" alt="">
                                </div>
                                <div class="cake_text">
                                    <h4>$29</h4>
                                    <h3>Strawberry Cupcakes</h3>
                                    <a class="pest_btn" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="image/cake-feature/c-feature-5.jpg" alt="">
                                </div>
                                <div class="cake_text">
                                    <h4>$29</h4>
                                    <h3>Strawberry Cupcakes</h3>
                                    <a class="pest_btn" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="image/cake-feature/c-feature-6.jpg" alt="">
                                </div>
                                <div class="cake_text">
                                    <h4>$29</h4>
                                    <h3>Strawberry Cupcakes</h3>
                                    <a class="pest_btn" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="image/cake-feature/c-feature-7.jpg" alt="">
                                </div>
                                <div class="cake_text">
                                    <h4>$29</h4>
                                    <h3>Strawberry Cupcakes</h3>
                                    <a class="pest_btn" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="image/cake-feature/c-feature-8.jpg" alt="">
                                </div>
                                <div class="cake_text">
                                    <h4>$29</h4>
                                    <h3>Strawberry Cupcakes</h3>
                                    <a class="pest_btn" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-6">
                            <div class="cake_feature_item">
                                <div class="cake_img">
                                    <img src="image/cake-feature/c-feature-9.jpg" alt="">
                                </div>
                                <div class="cake_text">
                                    <h4>$29</h4>
                                    <h3>Strawberry Cupcakes</h3>
                                    <a class="pest_btn" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_pagination">
                        <div class="left_btn">
                            <a href="#"><i class="lnr lnr-arrow-left"></i> New posts</a>
                        </div>
                        <div class="middle_list">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">12</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="right_btn"><a href="#">Older posts <i class="lnr lnr-arrow-right"></i></a></div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product_left_sidebar">
                        <aside class="left_sidebar search_widget">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Search Keywords">
                                <div class="input-group-append">
                                    <button class="btn" type="button"><i class="icon icon-Search"></i></button>
                                </div>
                            </div>
                        </aside>
                        <aside class="left_sidebar p_catgories_widget">
                            <div class="p_w_title">
                                <h3>Product Categories</h3>
                            </div>
                            <ul class="list_style">
                                <li><a href="#">Cupcake (17)</a></li>
                                <li><a href="#">Chocolate (15)</a></li>
                                <li><a href="#">Celebration (14)</a></li>
                                <li><a href="#">Wedding Cake (8)</a></li>
                                <li><a href="#">Desserts (11)</a></li>
                            </ul>
                        </aside>
                        <aside class="left_sidebar p_price_widget">
                            <div class="p_w_title">
                                <h3>Filter By Price</h3>
                            </div>
                            <div class="filter_price">
                                <div id="slider-range"></div>
                                <label for="amount">Price range:</label>
                                <input type="text" id="amount" readonly />
                                <a href="#">Filter</a>
                            </div>
                        </aside>
                        <aside class="left_sidebar p_sale_widget">
                            <div class="p_w_title">
                                <h3>Top Sale Products</h3>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="image/product/sale-product/s-product-1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Brown Cake</h4></a>
                                    <ul class="list_style">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h5>$29</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="image/product/sale-product/s-product-2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Brown Cake</h4></a>
                                    <ul class="list_style">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h5>$29</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="image/product/sale-product/s-product-3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Brown Cake</h4></a>
                                    <ul class="list_style">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h5>$29</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="image/product/sale-product/s-product-4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#"><h4>Brown Cake</h4></a>
                                    <ul class="list_style">
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                    </ul>
                                    <h5>$29</h5>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Main Header Area =================-->
@stop
