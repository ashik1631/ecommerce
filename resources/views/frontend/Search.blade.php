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
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="example_length"><label>Show <select name="example_length"
                                    aria-controls="example"
                                    class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                    </div>
                </div>
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
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example_info" role="status" aria-live="polite">
                            Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} entries
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                            <ul class="pagination">
                                @if ($products->currentPage() > 1)
                                    <li class="paginate_button page-item">
                                        <a href="{{ $products->previousPageUrl() }}" class="page-link">Previous</a>
                                    </li>
                                @endif

                                @for ($i = 1; $i <= $products->lastPage(); $i++)
                                    <li class="paginate_button page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                                        <a href="{{ $products->url($i) }}" class="page-link">{{ $i }}</a>
                                    </li>
                                @endfor

                                @if ($products->currentPage() < $products->lastPage())
                                    <li class="paginate_button page-item">
                                        <a href="{{ $products->nextPageUrl() }}" class="page-link">Next</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- container area end -->
</section>


<!-- product quick view end -->
<!-- new product area end -->

@endsection
