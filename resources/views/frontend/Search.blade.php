@extends('layouts.frontend')
@section('content')
<!-- new product area start -->
<section>
    <!-- container area start -->
    <div class="container">
        <div class="new__product__area mt-4">
            <!-- title start -->
            <div class="d-flex mb-3 align-items-baseline border-bottom">
                <h3 class="h5 fw-700 mb-0">
                    <span class="border-bottom border-primary border-width-2 pb-2 d-inline-block">Search
                        Products</span>
                </h3>
            </div>
            <!-- title end -->
            <div class="row">
                @foreach ($products as $item)
                <div class="col-md-3">
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

@endsection
