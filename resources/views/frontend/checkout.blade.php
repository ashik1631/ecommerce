@extends('layouts.frontend')
@section('content')
<!-- breadcrumb area start -->
<div>
    <nav aria-label="breadcrumb" class="mt-3">
        <!-- container area start -->
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-primary" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div>
        <!-- container area end -->
    </nav>
</div>
<!-- breadcrumb area end -->

<!-- shipping area start -->
<section>
    <!-- container area start -->

        <div class="container">
            <form action="{{route('order')}}" method="POST">
                @csrf
                <div class="row">
                    <!-- left area start -->
                    <div class="col-lg-8">
                        <div class="accordion" id="ac1">
                            <div class="accordion-item shadow">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button h5 m-0 text-muted" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Your Personal Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#ac1">
                                    <div class="accordion-body">

                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-3">
                                                        <input type="text" name="name" required
                                                            value="{{ auth()->user()->name }}" class="form-control rounded-0"
                                                            placeholder="name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-3">
                                                        <input type="email" name="email" required
                                                            value="{{ auth()->user()->email }}" class="form-control rounded-0"
                                                            placeholder="Email address">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="mb-3">
                                                        <input type="text" name="phone" required class="form-control rounded-0"
                                                            placeholder="Phone number">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <input type="text" name="shipping_address" required
                                                            class="form-control rounded-0" placeholder="Shipping address">
                                                    </div>
                                                </div>
                                            </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- left area end -->

                    <!-- right area start -->
                    <div class="col-lg-4 mt-lg-0 mt-4">
                        <div class="accordion-item shadow">
                            <h2 class="accordion-header" id="heading">
                                <button class="accordion-button collapsed h5 m-0 text-muted" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Selected Product
                                </button>
                            </h2>
                            @php
                            $carts = \Session::has('cart') ? session('cart'):[];
                            $totalprice=0;
                            @endphp
                            
                            @foreach ($carts as $item)
                            <div class="row mt-3">
                                <div class="col-4">
                                    <img class="img-fluid border" width="50" src="{{ asset($item['thumb']) }}" alt="product">
                                </div>
                                @if ($item ['discount'])
                                @php
                                $discountPrice = $item['price']*$item['discount'] / 100;
                                $price = $item['price']-$discountPrice;
                                $totalprice = $price * $item['qty'];
                                @endphp

                                @else
                                @php
                                $totalprice += $item['price']* $item['qty'];
                                @endphp

                                @endif
                                <div class="col-6 p-0">
                                    <div class="product__list__content">
                                        <h5>{{ $item['name'] }}</h5>
                                        <p>{{$item['qty']}} x ${{$item['price']}}</p>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <a href="{{ route ('cart.remove', $item['id']) }}">X</a>
                                </div>
                            </div>

                            @endforeach
                            <hr>
                            <div class="total d-flex align-items-center justify-content-between">
                                <h5 class="float-start">Total :</h5>
                                <h5>$ {{ $totalprice }}</h5>
                                @if (count($carts)>0)
                            </div>
                            @endif
                            <a class="d-block btn btn-primary btn-lg mt-4 rounded-0" href="{{route('home')}}">Edit Cart</a>
                            <div class="checkout__table bg-white p-4 mt-3 border rounded-1 shadow">
                                <div class="filter__title text-center">
                                    <h6 class="m-0">pay info</h6>
                                </div>
                                <input type="radio" name="payment_methode" id="cod" value="cod"><label for="cod">Cash On Delivery</label>

                                <button type="submit" class="d-block btn btn-primary btn-lg mt-4 rounded-0" href="#">PAY NOW</button>
                            </div>
                        </div>
                        <!-- right area end -->
                    </div>
                </div>
            </form>
        </div>
        <!-- container area end -->
</section>
<!-- shipping area end -->
@endsection
