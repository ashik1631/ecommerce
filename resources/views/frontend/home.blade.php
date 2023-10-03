@extends('layouts.frontend')
@section('content')

<!-- categories/home slider section start -->
<section>
    <!-- container area start -->
    <div class="container">
        <!-- section wrapper start -->
        <div class="card card-body mt-4 shadow">
            <div class="row">
                <!-- categories area start -->
                <div class="col-lg-3">
                    <div class="categories__section wow fadeIn" data-wow-offset="50" data-wow-delay="0.2s">
                        <div class="cate__header">
                            <h5><i class="las la-bars"></i> <span class="ms-1">All Categories</span></h5>
                        </div>
                        <div class="categories__body">
                            <!-- single dropdown start -->
                            @foreach ($Categorys as $item)
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset($item->icon) }}" width="15" alt="icon">
                                    <span class="ms-1">{{ $item->name }}</span>
                                    <span class="right__arrow"><i class="la la-angle-right text-primary"></i></span>
                                </a>
                            </div>
                            @endforeach
                            <!-- single dropdown end -->
                        </div>
                    </div>
                </div>
                <!-- categories area end -->

                <!-- home slider start -->
                <div class="col-lg-9">
                    <div class="home__slider mt-lg-0 mt-4">
                        <div class="home-slider owl-carousel owl-theme">
                            @foreach ($Sliders as $item)
                            <div class="item position-relative d-flex align-items-center">
                                <img class="img-fluid" src="{{ asset($item->image) }}" alt="img">
                                <div class="home__slider__content position-absolute ms-5">
                                    <h3>top brands</h3>
                                    <h4>{{ $item->title }}</h4>
                                    <p>Lorem Ipsum is dolar Ipsum is dolar. </p>
                                    <a class="bg-danger" href="{{ $item->link }}">buy now</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- home slider end -->
            </div>
        </div>
        <!-- section wrapper end -->
    </div>
    <!-- container area end -->
</section>
<!-- categories/home slider section end -->

<!-- static area start -->
<section>
    <!-- container are start -->
    <div class="container">
        <div class="section__wrapper mt-4 border shadow">
            <div class="row">
                <!-- single area start -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single__card d-flex">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/static-area-icon/static-icons-1.png') }}" alt="shipping">
                        <div class="static__area__content">
                            <h5>Free Shipping</h5>
                            <p>On all orders over $75.00</p>
                        </div>
                    </div>
                </div>
                <!-- single area end -->
                <!-- single area start -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single__card d-flex">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/static-area-icon/static-icons-2.png') }}" alt="return">
                        <div class="static__area__content">
                            <h5>Free Returns</h5>
                            <p>Returns within 9 days</p>
                        </div>
                    </div>
                </div>
                <!-- single area end -->
                <!-- single area start -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single__card d-flex">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/static-area-icon/static-icons-3.png') }}" alt="payment">
                        <div class="static__area__content">
                            <h5>Payment Secure</h5>
                            <p>Payment safe with us.</p>
                        </div>
                    </div>
                </div>
                <!-- single area end -->
                <!-- single area start -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single__card d-flex">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/static-area-icon/static-icons-4.png') }}" alt="support">
                        <div class="static__area__content">
                            <h5>24/7 Support</h5>
                            <p>Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <!-- single area end -->
            </div>
        </div>
    </div>
    <!-- container are end -->
</section>
<!-- static area end -->

<!-- new product area start -->
<section>
    <!-- container area start -->
    <div class="container">
        <div class="new__product__area mt-4">
            <!-- title start -->
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-primary border-width-2 pb-2 d-inline-block">New
                        Products</span>
                </h3>
            </div>
            <!-- title end -->
            <div class="product owl-carousel">
                <div class="item">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-primary">
                            NEW
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/1.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Fashion for man</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 </h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="item">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-warning">
                            HOT
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/14.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Smart Watch for man</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$700 <del class="text-muted fw-light">$900</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="item">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-danger">
                            SALE
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/15.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">New Fashion for Man</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670</h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="item">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-primary">
                            NEW
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/20.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Ladies Hand Bags</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$250 <del class="text-muted fw-light">$300</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="item">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-warning">
                            HOT
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/12.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Casual Shoes for man</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 <del class="text-muted fw-light">$600</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="item">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-danger">
                            SALE
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/6.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Ladies shoes for woman</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 <del class="text-muted fw-light">$600</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="item">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-primary">
                            NEW
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/1.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Fashion for man</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 </h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container area end -->
</section>
<!-- product quick view start -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal__close__btn">
                <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- display img start -->
                        <div id="first" class="d-block">
                            <img class="img-fluid border" src="{{ asset('assets/frontend/img/product/9.jpg') }}" alt="product">
                        </div>
                        <div id="second" class="d-none">
                            <img class="img-fluid border" src="{{ asset('assets/frontend/img/product/16.jpg') }}" alt="product">
                        </div>
                        <div id="third" class="d-none">
                            <img class="img-fluid border" src="{{ asset('assets/frontend/img/product/14.jpg') }}" alt="product">
                        </div>
                        <div id="fourth" class="d-none">
                            <img class="img-fluid border" src="{{ asset('assets/frontend/img/product/16.jpg') }}" alt="product">
                        </div>
                        <!-- display img end -->
                        <!-- thumbnail img start -->
                        <div class="row mt-3 ">
                            <div class="col-3">
                                <button class="border-0" onclick="myFirst()"><img class="img-fluid border" src="{{ asset('assets/frontend/img/product/9.jpg') }}" alt="nav-img"></button>
                            </div>
                            <div class="col-3">
                                <button class="border-0" onclick="second()"><img class="img-fluid border" src="{{ asset('assets/frontend/img/product/16.jpg') }}" alt="nav-img"></button>
                            </div>
                            <div class="col-3">
                                <button class="border-0" onclick="third()"><img class="img-fluid border" src="{{ asset('assets/frontend/img/product/14.jpg') }}" alt="nav-img"></button>
                            </div>
                            <div class="col-3">
                                <button class="border-0" onclick="fourth()"><img class="img-fluid border" src="{{ asset('assets/frontend/img/product/16.jpg') }}" alt="nav-img"></button>
                            </div>
                        </div>
                        <!-- thumbnail img end -->
                    </div>
                    <div class="col-lg-7 mt-4 mt-lg-0">
                        <div class="product__right__content">
                            <h2 class="m-0">Fashion Smart Watch for Man</h2>
                            <!-- rating star -->
                            <div class="product__rating reviews d-flex py-3 ">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span class="text-muted reviews">( 10 Reviews )</span>
                            </div>
                            <p>Availability : <span class="text-danger">In-Stock</span></p>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                            <hr class="horizontal">
                            <div class="row py-1">
                                <div class="col-5">
                                    <h2 class="price text-primary m-0">$400.00 <del class="disc__ount">$600</del></h2>
                                </div>
                                <div class="col-7 z">
                                    <div class="right__utility">
                                        <a class="wish_list" href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                                        <a class="com_pare" href="#" title="Compare"><i class="las la-sync"></i></a>
                                        <a class="email" href="#" title="Email"><i class="lar la-envelope-open"></i></a>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal">
                            <!-- add to cart button -->
                            <div class="row mt-4">
                                <div class="col-2">
                                    <input type="number" class="form-control form-control-lg rounded-0" value="1">
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-lg btn-primary rounded-0 shadow">ADD
                                        TO CART</button>
                                </div>
                            </div>
                            <!-- share link -->
                            <div class="share_link d-block mt-4">
                                <span class="text-muted">Share : </span>
                                <a title="facebook" class="share__fb" href="#"><i class="lab la-facebook-f"></i></a>
                                <a title="linkedin" class="share__link" href="#"><i class="lab la-linkedin-in"></i></a>
                                <a title="twitter" class="share__tw" href="#"><i class="lab la-twitter"></i></a>
                                <a title="whatsapp" class="share__whts" href="#"><i class="lab la-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product quick view end -->
<!-- new product area end -->

<!-- banner area start -->
<section>
    <!-- container area start -->
    <div class="container">
        <div class="banner-lg owl-carousel owl-theme mt-2">
            <div class="item position-relative d-flex align-items-center">
                <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/lg-banner.jpg') }}" alt="img">
                <div class="banner__content position-absolute ms-4">
                    <h4>new collection</h4>
                    <a href="#">buy now</a>
                </div>
            </div>
            <div class="item position-relative d-flex align-items-center">
                <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/fashion-4.jpg') }}" alt="img">
                <div class="banner__content position-absolute ms-4">
                    <h4>new fashion</h4>
                    <a href="#">buy now</a>
                </div>
            </div>
            <div class="item position-relative d-flex align-items-center">
                <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/fashion-3.jpg') }}" alt="img">
                <div class="banner__content position-absolute ms-4">
                    <h4>black friday</h4>
                    <a href="#">buy now</a>
                </div>
            </div>
            <div class="item position-relative d-flex align-items-center">
                <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/fashion-4.jpg') }}" alt="img">
                <div class="banner__content position-absolute ms-4">
                    <h4>summer sale</h4>
                    <a href="#">buy now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- container area end -->
</section>
<!-- banner area end -->

<!-- hot deals area start -->
<section>
    <!-- container area start -->
    <div class="container">
        <div class="hot__deals__section mt-4">
            <!-- title start -->
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Hot Deals</span>
                </h3>
            </div>
            <!-- title end -->
            <div class="hot-deal owl-carousel">
                <div class="item">
                    <!-- single product start -->
                    <div class="single__product border">
                        <div class="new-label">
                            <div class="text token">OFF 50%</div>
                        </div>
                        <!-- timing box start -->
                        <div class="time_table">
                            <div class="day">
                                <h5>15</h5>
                                <p>DAYS</p>
                            </div>
                            <div class="hour">
                                <h5>10</h5>
                                <p>HRS</p>
                            </div>
                            <div class="mn">
                                <h5>30</h5>
                                <p>MIN</p>
                            </div>
                            <div class="sec">
                                <h5>59</h5>
                                <p>SEC</p>
                            </div>
                        </div>
                        <!-- timing box end -->
                        <!-- card/detail/wishlist start -->
                        <div class="tools hot">
                            <div class="wishlist_icon text-end hot">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end hot">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end hot">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/14.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content hot">
                            <a class="stretched-link" href="#">Smart Watch for man</a>
                            <div class="product__rating hot">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 <del class="text-muted fw-light">$600</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="item">
                    <!-- single product start -->
                    <div class="single__product border">
                        <div class="new-label">
                            <div class="text token">OFF 50%</div>
                        </div>
                        <!-- timing box start -->
                        <div class="time_table">
                            <div class="day">
                                <h5>15</h5>
                                <p>DAYS</p>
                            </div>
                            <div class="hour">
                                <h5>10</h5>
                                <p>HRS</p>
                            </div>
                            <div class="mn">
                                <h5>30</h5>
                                <p>MIN</p>
                            </div>
                            <div class="sec">
                                <h5>59</h5>
                                <p>SEC</p>
                            </div>
                        </div>
                        <!-- timing box end -->
                        <!-- card/detail/wishlist start -->
                        <div class="tools hot">
                            <div class="wishlist_icon text-end hot">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end hot">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end hot">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/12.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content hot">
                            <a class="stretched-link" href="#">Fashion Shoes for man</a>
                            <div class="product__rating hot">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 <del class="text-muted fw-light">$600</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="item">
                    <!-- single product start -->
                    <div class="single__product border">
                        <div class="new-label">
                            <div class="text token">OFF 50%</div>
                        </div>
                        <!-- timing box start -->
                        <div class="time_table">
                            <div class="day">
                                <h5>15</h5>
                                <p>DAYS</p>
                            </div>
                            <div class="hour">
                                <h5>10</h5>
                                <p>HRS</p>
                            </div>
                            <div class="mn">
                                <h5>30</h5>
                                <p>MIN</p>
                            </div>
                            <div class="sec">
                                <h5>59</h5>
                                <p>SEC</p>
                            </div>
                        </div>
                        <!-- timing box end -->
                        <!-- card/detail/wishlist start -->
                        <div class="tools hot">
                            <div class="wishlist_icon text-end hot">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end hot">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end hot">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/10.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content hot">
                            <a class="stretched-link" href="#">Ladies Hand Bag</a>
                            <div class="product__rating hot">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 <del class="text-muted fw-light">$600</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="item">
                    <!-- single product start -->
                    <div class="single__product border">
                        <div class="new-label">
                            <div class="text token">OFF 50%</div>
                        </div>
                        <!-- timing box start -->
                        <div class="time_table">
                            <div class="day">
                                <h5>15</h5>
                                <p>DAYS</p>
                            </div>
                            <div class="hour">
                                <h5>10</h5>
                                <p>HRS</p>
                            </div>
                            <div class="mn">
                                <h5>30</h5>
                                <p>MIN</p>
                            </div>
                            <div class="sec">
                                <h5>59</h5>
                                <p>SEC</p>
                            </div>
                        </div>
                        <!-- timing box end -->
                        <!-- card/detail/wishlist start -->
                        <div class="tools hot">
                            <div class="wishlist_icon text-end hot">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end hot">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end hot">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/13.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content hot">
                            <a class="stretched-link" href="#">Best Headphone</a>
                            <div class="product__rating hot">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 <del class="text-muted fw-light">$600</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container area end -->
</section>
<!-- hot deals area end -->

<!-- banner area start -->
<div>
    <!-- container area start -->
    <div class="container">
        <div class="banner_lg mt-4">
            <img class="img-fluid shadow" src="{{ asset('assets/frontend/img/banner/banner-2.jpg') }}" alt="img">
        </div>
    </div>
    <!-- container area end -->
</div>
<!-- banner area end -->

<!-- best seller area start -->
<section>
    <!-- container area start -->
    <div class="container">
        <div class="best__seller__section mt-4">
            <!-- title start -->
            <div class="d-flex mb-2 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Best
                        Sells</span>
                </h3>
            </div>
            <!-- title end -->
            <div class="row custom-row">
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-primary">
                            NEW
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/1.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Fashion for man</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 </h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="sold__out__img position-absolute">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/banner/soldout.png') }}" alt="product">
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/4.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Fashion for Woman</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 </h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-warning">
                            HOT
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/14.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Smart Watch for man</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$700 <del class="text-muted fw-light">$900</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-primary">
                            NEW
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/10.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Ladies Hand Bags</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$250 <del class="text-muted fw-light">$300</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="sold__out__img position-absolute">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/banner/soldout.png') }}" alt="product">
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/15.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">New Fashion for Man</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670</h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-primary">
                            NEW
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/26.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Smart Watch for Man</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$250 <del class="text-muted fw-light">$300</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-primary">
                            NEW
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/20.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Ladies Hand Bags</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$250 <del class="text-muted fw-light">$300</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-primary">
                            NEW
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/5.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Sports Shoes</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$250 <del class="text-muted fw-light">$300</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-warning">
                            HOT
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/12.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Casual Shoes for man</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 <del class="text-muted fw-light">$600</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-primary">
                            NEW
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/3.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Ladies Shoes</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$250</h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-danger">
                            SALE
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/6.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Ladies shoes for woman</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$670 <del class="text-muted fw-light">$600</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                <div class="col-lg-2 col-md-4 col-6 my-1">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        <div class="product__status bg-primary">
                            NEW
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/16.jpg') }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">Smart Watch for Man</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h4>$250 <del class="text-muted fw-light">$300</del></h4>
                        </div>
                    </div>
                    <!-- single product end -->
                </div>

            </div>
        </div>
    </div>
    <!-- container area end -->
</section>
<!-- best seller area end -->
@endsection
