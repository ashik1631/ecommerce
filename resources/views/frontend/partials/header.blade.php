<!-- ========================================NAVBAR====================================
    =====================================================================================-->
<!-- header start -->
<header>
    <!-- header wrapper are start -->
    <div class="header__wrapper">
        <!-- header top start -->
        <div class="header__top py-lg-0 py-2">
            <!-- container area start -->
            <div class="container">
                <nav class="navbar-expand py-1">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="welcome d-lg-block d-md-block text-md-center text-lg-start d-none">
                                <span>Welcome Online Ecommerce Shop Store</span>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <!-- header right utility start -->
                            <ul class="navbar-nav header__right float-lg-end flex-wrap justify-content-center">
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" href="#" role="button" id="drp1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        USD
                                    </a>
                                    <ul class="dropdown-menu usd" aria-labelledby="drp1">
                                        <li><a class="dropdown-item" href="#">-USD</a></li>
                                        <li><a class="dropdown-item" href="#">-INR</a></li>
                                        <li><a class="dropdown-item" href="#">-GBP</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link" href="#" role="button" id="drp2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        English
                                    </a>
                                    <ul class="dropdown-menu language" aria-labelledby="drp2">
                                        <li><a class="dropdown-item" href="#">-English</a></li>
                                        <li><a class="dropdown-item" href="#">-Jerman</a></li>
                                        <li><a class="dropdown-item" href="#">-Japan</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-truck"></i>
                                        <span>Order Track</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="far fa-user-circle"></i>
                                        <span>My Account</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-shopping-bag"></i>
                                        <span>My Card</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i>
                                        <span>Login</span></a></li>
                            </ul>
                            <!-- header right utility end -->
                        </div>
                    </div>
                </nav>
            </div>
            <!-- container area end -->
        </div>
        <!-- header top end -->

        <!-- header middle navbar start -->
        <div id="mainSticky" class="header__middle__navbar">
            <nav class="navbar-expand">
                <!-- container area start -->
                <div class="container">
                    <div class="row position-relative">
                        <!-- navbar logo start -->
                        <div id="logo" class="col-lg-2 col-6 ">
                            <a class="navbar-brand" href="{{ route('home') }}"><img class="img-fluid"
                                    src="{{ asset('assets/frontend/img/logo/Untitled-2.png') }}" alt="logo"></a>
                        </div>
                        <!-- navbar logo end -->

                        <!-- search area start -->
                        <div class="col-lg-7 mt-lg-0 mt-4 d-lg-block d-none">
                            <form class="d-flex search__area">
                                <!-- all categories start -->
                                <select class="select__categories">
                                    <option value="">All Categories</option>
                                    <option value="">- Fashion</option>
                                    <option value="">- Laptop</option>
                                    <option value="">- Men</option>
                                    <option value="">- Woman</option>
                                    <option value="">- Dress</option>
                                    <option value="">- Mobile</option>
                                    <option value="">- Fashion</option>
                                    <option value="">- Laptop</option>
                                    <option value="">- Men</option>
                                    <option value="">- Woman</option>
                                    <option value="">- Dress</option>
                                    <option value="">- Mobile</option>
                                </select>
                                <!-- all categories end -->
                                <input type="search" placeholder="Search...">
                                <button class="search__btn" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <!-- search area end -->

                        <!-- mobile search bar start -->
                        <div id="search" class="mobile__search__bar d-lg-none position-absolute">
                            <form class="d-flex search__area">
                                <!-- all categories start -->
                                <select class="select__categories">
                                    <option value="">All Categories</option>
                                    <option value="">- Fashion</option>
                                    <option value="">- Laptop</option>
                                    <option value="">- Men</option>
                                    <option value="">- Woman</option>
                                    <option value="">- Dress</option>
                                    <option value="">- Mobile</option>
                                    <option value="">- Fashion</option>
                                    <option value="">- Laptop</option>
                                    <option value="">- Men</option>
                                    <option value="">- Woman</option>
                                    <option value="">- Dress</option>
                                    <option value="">- Mobile</option>
                                </select>
                                <!-- all categories end -->
                                <input type="search" placeholder="Search...">
                                <button class="search__btn" type="submit"><i class="fas fa-search"></i></button>
                                <!-- close btn -->
                                <a onclick="searchCloseBtn()" href="javascript:;"
                                    class="border-0 bg-transparent close__btn"><i class="las la-times"></i></a>
                            </form>
                        </div>
                        <!-- mobile search bar end -->

                        <!-- contact/card/wishlist area start -->
                        <div id="utility" class="col-lg-3 col-6">
                            <ul class="utility">
                                <!-- compare start -->
                                <li class="d-lg-block d-none">
                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <span><i class="la la-refresh la-2x opacity-80"></i></span>
                                            <div class="text-start ms-1">
                                                <p class="m-0 qty">0</p>
                                                <p class="m-0 title">Compare</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- compare end -->
                                <!-- wishlist start -->
                                <li class="d-lg-block d-none">
                                    <a href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <span><i class="la la-heart-o la-2x opacity-80"></i></span>
                                            <div class="text-start ms-1">
                                                <p class="m-0 qty">0</p>
                                                <p class="m-0 title">Wishlist</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- wishlist start -->
                                <!-- search-bar btn start -->
                                <li class="d-lg-none p-0">
                                    <a onclick="searchBtn()" href="javascript:;">
                                        <i class="las la-search la-flip-horizontal la-2x"></i>
                                    </a>
                                </li>
                                @php
                                $carts = \Session::has('cart') ? session('cart'):[];
                                @endphp
                                <!-- search-bar btn end -->
                                <!-- add to cart start -->
                                <li><a href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <span><i class="la la-shopping-cart la-2x opacity-80"></i></span>
                                            <div class="text-start ms-lg-1">
                                                <p class="m-0 qty">{{ count($carts) }}</p>
                                                <p class="m-0 title">Cart</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="product__list p-4">
                                        <div class="heading__cardlist">
                                            <p class="m-0 float-start">Items({{ count($carts) }})</p>
                                            <a class="text-decoration-underline text-primary" href="#">View
                                                Cart</a>
                                            <hr class="mb-0">
                                        </div>
                                        <!--single product list start -->
                                        @php
                                        $totalprice=0;
                                        @endphp
                                        @foreach ($carts as $item)
                                        <div class="row mt-3">
                                            <div class="col-4">
                                                <img class="img-fluid border" src="{{ asset($item['thumb']) }}"
                                                    alt="product">
                                            </div>
                                            @if ($item ['discount'])
                                            @php
                                            $discountPrice = $item['price']*$item['discount'] / 100;
                                            $price = $item['price']-$discountPrice;
                                            $totalprice = $price * $item('qty');
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
                                        <!--single product list end -->
                                        <!--single product list start -->
                                        <!--single product list end -->
                                        <hr>
                                        <div class="total">
                                            <h5 class="float-start">Total :</h5>
                                            <h5>$ {{ $totalprice }}</h5>
                                        </div>
                                        <a class="btn btn-primary rounded-0 shadow d-block mt-3" href="{{route('checkout')}}">CHECKOUT</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- contact/card/wishlist area end -->
                    </div>
                </div>
                <!-- container area end -->
            </nav>
        </div>
        <!-- header middle navbar end -->

        <!-- header bottom start -->
        <div class="header__bottom shadow">
            <!-- container area start -->
            <div class="container">
                <!-- mega menu start -->
                <div class="menu position-relative">
                    <div class="today__offer position-absolute">
                        <a href="#">SPECIAL OFFER</a>
                    </div>
                    <ul>
                        <li><a class="active" href="{{ route('home') }}">HOME</a></li>
                        <li><a class="active" href="#">About</a></li>
                        <li><a class="active" href="#">Contact</a></li>
                    </ul>
                    <!-- categories for sm/md device end -->
</header>
<!-- header end -->
<!-- ========================================NAVBAR END:================================
    =====================================================================================-->
