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
                                <a href="{{ url('/search') }}? category={{ $item->id }}">
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
                        <img class="img-fluid"
                            src="{{ asset('assets/frontend/img/static-area-icon/static-icons-1.png') }}" alt="shipping">
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
                        <img class="img-fluid"
                            src="{{ asset('assets/frontend/img/static-area-icon/static-icons-2.png') }}" alt="return">
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
                        <img class="img-fluid"
                            src="{{ asset('assets/frontend/img/static-area-icon/static-icons-3.png') }}" alt="payment">
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
                        <img class="img-fluid"
                            src="{{ asset('assets/frontend/img/static-area-icon/static-icons-4.png') }}" alt="support">
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
                @foreach ($products as $item)
                <div class="item">
                    <!-- single product start -->
                    <div class="card card-body p-0 single__product">
                        @if ($item->discount)
                        <div class="product__status bg-primary">
                            {{ $item->discount }}%
                        </div>
                        @endif

                        <!-- card/detail/wishlist start -->
                        <div class="tools">
                            <div class="wishlist_icon text-end">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end">
                                <a href="{{ route('addToCart',$item->id) }}" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset($item->thumbnail) }}" alt="product">
                        </div>
                        <!-- product img end -->
                        <div class="product__content">
                            <a class="stretched-link" href="product-detail.html">{{ $item->name }}</a>
                            <div class="product__rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            @if($item->discount)

                            @php
                            $discountPrice = ($item->price * $item->discount )/100; @endphp
                            <h4>${{ $item->price - $discountPrice}} <del class="text-mutted fw-light">
                                    ${{ $item->price }} </del></h4>

                            @else
                            <h4>${{ $item->price }} </h4>
                            @endif

                        </div>
                    </div>
                    <!-- single product end -->
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- container area end -->
</section>
<!-- product quick view end -->
<!-- new product area end -->

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
                @foreach ($products as $item)
                @if($item->discount)
                <div class="item">
                    <!-- single product start -->
                    <div class="single__product border">
                        <div class="new-label">
                            <div class="text token">OFF {{ $item->discount }}</div>
                        </div>
                        <!-- card/detail/wishlist start -->
                        <div class="tools hot">
                            <div class="wishlist_icon text-end hot">
                                <a href="#" title="Wishlist"><i class="la la-heart-o"></i></a>
                            </div>
                            <div class="compare_icon text-end hot">
                                <a href="#" title="Compare"><i class="las la-sync"></i></a>
                            </div>
                            <div class="card_icon text-end hot">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset($item->thumbnail) }}" alt="product">
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
                            @if($item->discount)

                            @php
                            $discountPrice = ($item->price * $item->discount )/100; @endphp
                            <h4>${{ $item->price - $discountPrice}} <del class="text-mutted fw-light">
                                    ${{ $item->price }} </del></h4>

                            @else
                            <h4>${{ $item->price }} </h4>
                            @endif
                        </div>
                    </div>
                </div>
                @endif
                @endforeach

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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
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
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/banner/soldout.png') }}"
                                alt="product">
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/14.jpg') }}"
                                alt="product">
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/10.jpg') }}"
                                alt="product">
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
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/banner/soldout.png') }}"
                                alt="product">
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/15.jpg') }}"
                                alt="product">
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/26.jpg') }}"
                                alt="product">
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/20.jpg') }}"
                                alt="product">
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/12.jpg') }}"
                                alt="product">
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
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
                                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" title="Cart"><i
                                        class="las la-shopping-cart"></i></a>
                            </div>
                        </div>
                        <!-- card/detail/wishlist end -->
                        <!-- product img start -->
                        <div class="item-zoom">
                            <img class="img-fluid" src="{{ asset('assets/frontend/img/product/16.jpg') }}"
                                alt="product">
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
