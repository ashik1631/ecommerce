<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Online Ecommerce Shopping Store</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/vendor/css/mega-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
</head>

<body>
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
                                    <li class="nav-item"><a class="nav-link" href="#"><i
                                                class="far fa-user-circle"></i> <span>My Account</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i
                                                class="fas fa-shopping-bag"></i> <span>My Card</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i
                                                class="fas fa-sign-in-alt"></i> <span>Login</span></a></li>
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
                                <a class="navbar-brand" href="index.html"><img class="img-fluid"
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
                                    <!-- search-bar btn end -->
                                    <!-- add to cart start -->
                                    <li><a href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <span><i class="la la-shopping-cart la-2x opacity-80"></i></span>
                                                <div class="text-start ms-lg-1">
                                                    <p class="m-0 qty">5</p>
                                                    <p class="m-0 title">Cart</p>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="product__list p-4">
                                            <div class="heading__cardlist">
                                                <p class="m-0 float-start">Items(3)</p>
                                                <a class="text-decoration-underline text-primary" href="#">View
                                                    Cart</a>
                                                <hr class="mb-0">
                                            </div>
                                            <!--single product list start -->
                                            <div class="row mt-3">
                                                <div class="col-4">
                                                    <img class="img-fluid border"
                                                        src="{{ asset('assets/frontend/img/product/9.jpg') }}"
                                                        alt="product">
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="product__list__content">
                                                        <h5>Smart Watch for Man</h5>
                                                        <p>2 x $255</p>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <button class="product__delete__btn">x</button>
                                                </div>
                                            </div>
                                            <!--single product list end -->
                                            <!--single product list start -->
                                            <div class="row mt-3">
                                                <div class="col-4">
                                                    <img class="img-fluid border"
                                                        src="{{ asset('assets/frontend/img/product/10.jpg') }}"
                                                        alt="product">
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="product__list__content">
                                                        <h5>Ladies Hand Bag</h5>
                                                        <p>2 x $255</p>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <button class="product__delete__btn">x</button>
                                                </div>
                                            </div>
                                            <!--single product list end -->
                                            <!--single product list start -->
                                            <div class="row mt-3">
                                                <div class="col-4">
                                                    <img class="img-fluid border"
                                                        src="{{ asset('assets/frontend/img/product/12.jpg') }}"
                                                        alt="product">
                                                </div>
                                                <div class="col-6 p-0">
                                                    <div class="product__list__content">
                                                        <h5>Fashion Shoes for Man</h5>
                                                        <p>2 x $255</p>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <button class="product__delete__btn">x</button>
                                                </div>
                                            </div>
                                            <!--single product list end -->
                                            <hr>
                                            <div class="total">
                                                <h5 class="float-start">Total :</h5>
                                                <h5>$ 2555</h5>
                                            </div>
                                            <a class="btn btn-primary rounded-0 shadow d-block mt-3"
                                                href="#">CHECKOUT</a>
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
                            <li><a class="active" href="#">HOME</a></li>
                            <li><a href="">SHOP</a>
                                <ul>
                                    <li><a class="fw-bold" href="">SHOES</a>
                                        <ul>
                                            <li><a href="">Panda</a></li>
                                            <li><a href="#">Nike</a></li>
                                            <li><a href="#">Lotto</a></li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#">Pegasus</a></li>
                                            <li><a href="#">Bata</a></li>
                                            <li><a href="#">Hils</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">MEN</a>
                                        <ul>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">T-Shirt</a></li>
                                            <li><a href="#">Jacket</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Dress</a></li>
                                            <li><a href="#">Pant</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">WOMAN</a>
                                        <ul>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Hand Bag</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">BOYS</a>
                                        <ul>
                                            <li><a href="#">School Bag</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Belt</a></li>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="">SHOES</a>
                                        <ul>
                                            <li><a href="">Panda</a></li>
                                            <li><a href="#">Nike</a></li>
                                            <li><a href="#">Lotto</a></li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#">Pegasus</a></li>
                                            <li><a href="#">Bata</a></li>
                                            <li><a href="#">Hils</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">MEN</a>
                                        <ul>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">T-Shirt</a></li>
                                            <li><a href="#">Jacket</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Dress</a></li>
                                            <li><a href="#">Pant</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">WOMAN</a>
                                        <ul>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Hand Bag</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">BOYS</a>
                                        <ul>
                                            <li><a href="#">School Bag</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Belt</a></li>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><span class="token d-lg-block d-none">hot</span><a href="">PRODUCT </a>
                                <ul>
                                    <li><a class="fw-bold" href="">SHOES</a>
                                        <ul>
                                            <li><a href="">Panda</a></li>
                                            <li><a href="#">Nike</a></li>
                                            <li><a href="#">Lotto</a></li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#">Pegasus</a></li>
                                            <li><a href="#">Bata</a></li>
                                            <li><a href="#">Hils</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">MEN</a>
                                        <ul>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">T-Shirt</a></li>
                                            <li><a href="#">Jacket</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Dress</a></li>
                                            <li><a href="#">Pant</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">WOMAN</a>
                                        <ul>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Hand Bag</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">BOYS</a>
                                        <ul>
                                            <li><a href="#">School Bag</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Belt</a></li>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="">SHOES</a>
                                        <ul>
                                            <li><a href="">Panda</a></li>
                                            <li><a href="#">Nike</a></li>
                                            <li><a href="#">Lotto</a></li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#">Pegasus</a></li>
                                            <li><a href="#">Bata</a></li>
                                            <li><a href="#">Hils</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">MEN</a>
                                        <ul>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">T-Shirt</a></li>
                                            <li><a href="#">Jacket</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Dress</a></li>
                                            <li><a href="#">Pant</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">WOMAN</a>
                                        <ul>
                                            <li><a href="#">Clothing</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Hand Bag</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="fw-bold" href="#">BOYS</a>
                                        <ul>
                                            <li><a href="#">School Bag</a></li>
                                            <li><a href="#">Shoes</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Watch</a></li>
                                            <li><a href="#">Belt</a></li>
                                            <li><a href="#">Shirt</a></li>
                                            <li><a href="#">Jewellery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">CLOTHING</a></li>
                            <li><span class="token bg-danger d-lg-block d-none">sale</span><a
                                    href="#">BEAUTY</a></li>
                            <li><a href="#">FURNITURE</a></li>
                            <li><a href="#">TOOLS</a></li>
                            <li><a href="#">BAGS</a></li>
                            <li><a href="">PAGE</a>
                                <ul>
                                    <li><a class="page-active" href="index.html">-Home</a></li>
                                    <li><a href="category.html">-Category</a></li>
                                    <li><a href="product-detail.html">-Detail</a></li>
                                    <li><a href="cart.html">-Shopping Cart</a></li>
                                    <li><a href="checkout.html">-Checkout</a></li>
                                    <li><a href="user-profile.html">-User Profile</a></li>
                                    <li><a href="order-history.html">-Order History</a></li>

                                    <li><a href="login.html">-Login</a></li>
                                    <li><a href="register.html">-Register</a></li>
                                    <li><a href="blog.html">-Blog</a></li>
                                    <li><a href="blog-detail.html">-Blog Detail</a></li>
                                    <li><a href="wishlist.html">-Wishlist</a></li>
                                    <li><a href="compare.html">-Product Compare</a></li>
                                    <li><a href="contact.html">-Contact</a></li>
                                    <li><a href="404.html">-404</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- mega menu end -->
                </div>
                <!-- container area end -->
            </div>
            <!-- header bottom end -->
        </div>
        <!-- header wrapper are end -->

        <!-- sticky bottom navbar start -->
        <div id="navbar" class="sticky-navbar d-none border bg-white">
            <div class="row">
                <div class="col-3 p-0">
                    <div class="home text-center py-4 border-end">
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Home" href="#"><i
                                class="las la-home"></i></a>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="bottom__categories py-4 text-center border-end">
                        <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample"><i class="lar la-list-alt"></i></a>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="cart text-center py-4 border-end">
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Cart" href="#"><i
                                class="las la-shopping-cart"></i>
                            <span class="bottom_qty">5</span>
                        </a>
                    </div>
                </div>
                <div class="col-3 p-0">
                    <div class="user__profile py-4 text-center">
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="User Profile" href="#"><i
                                class="las la-user-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- sticky bottom navbar end -->

        <!-- categories for sm/md device start -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header d-flex border-bottom">
                <h6 class="offcanvas-title" id="offcanvasExampleLabel">CATEGORIES</h6>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false">
                                <span>CLOTHING</span>
                            </button>
                        </div>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading1"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="headin2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false">
                                <span>FOOT WEAR</span>
                            </button>
                        </div>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="headin2"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="head3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="false">
                                <span>BAGS</span>
                            </button>
                        </div>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="head3"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="head4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="false">
                                <span>WATCH</span>
                            </button>
                        </div>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="head4"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="head5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse6" aria-expanded="false">
                                <span>ACCESSSOREIS</span>
                            </button>
                        </div>
                        <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="head5"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="head6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse7" aria-expanded="false">
                                <span>CLOTHING</span>
                            </button>
                        </div>
                        <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="head6"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="head7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse8" aria-expanded="false">
                                <span>SPORTS</span>
                            </button>
                        </div>
                        <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="head7"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="head8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collaps9" aria-expanded="false">
                                <span>HOUSE OF DESIGN</span>
                            </button>
                        </div>
                        <div id="collaps9" class="accordion-collapse collapse" aria-labelledby="head8"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="head9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse10" aria-expanded="false">
                                <span>HEALTH CARE</span>
                            </button>
                        </div>
                        <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="head9"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="head10">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse12" aria-expanded="false">
                                <span>PERSONAL BEAUTY</span>
                            </button>
                        </div>
                        <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="head10"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="head11">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse13" aria-expanded="false">
                                <span>FURNITURE</span>
                            </button>
                        </div>
                        <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="head11"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <div class="h4 accordion-header" id="head12">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTw1" aria-expanded="false">
                                <span>CLOTHING</span>
                            </button>
                        </div>
                        <div id="collapseTw1" class="accordion-collapse collapse" aria-labelledby="head12"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body mobile__cat text-start">
                                <h6>Fashion Man</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                                <h6>Fashion Woman</h6>
                                <ul class="navbar-nav mobile_sub_cat ms-3">
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Bag</a></li>
                                    <li class="pb-2"><a href="#">Sunglass</a></li>
                                    <li class="pb-2"><a href="#">Belt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                    <li class="pb-2"><a href="#">Watch</a></li>
                                    <li class="pb-2"><a href="#">Shirt</a></li>
                                    <li class="pb-2"><a href="#">Shoes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- categories for sm/md device end -->
    </header>
    <!-- header end -->
    <!-- ========================================NAVBAR END:================================
    =====================================================================================-->

    <!-- ========================================HERO SECTION START:=======================
    =====================================================================================-->
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
                                <div class="dropdown">
                                    <a href="#" id="dLabel1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fas fa-tshirt"></i>
                                        <span class="ms-1">Clothing</span>
                                        <span class="right__arrow"><i
                                                class="la la-angle-right text-primary"></i></span>
                                    </a>
                                    <div class="dropdown-menu cate__dropdown" aria-labelledby="dLabel1">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shirt</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shoes</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jacket</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sports</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Blazar</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">T-Shirt</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link" href="#">Hand
                                                            Bags</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jewellery</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Electronic</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sandals</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Watch</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Dress</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shirt</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shoes</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jacket</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sports</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Blazar</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">T-Shirt</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/frontend/img/banner/Daco_110896.png') }}"
                                                    alt="product">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single dropdown end -->
                                <!-- single dropdown start -->
                                <div class="dropdown">
                                    <a href="#" id="dLabel2" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fas fa-briefcase"></i>
                                        <span class="ms-1">Bags</span>
                                        <span class="right__arrow"><i
                                                class="la la-angle-right text-primary"></i></span>
                                    </a>
                                    <div class="dropdown-menu cate__dropdown" aria-labelledby="dLabel2">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shirt</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shoes</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jacket</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sports</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Blazar</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">T-Shirt</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link" href="#">Hand
                                                            Bags</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jewellery</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Electronic</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sandals</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Watch</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Dress</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shirt</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shoes</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jacket</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sports</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Blazar</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">T-Shirt</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/frontend/img/banner/Daco_110896.png') }}"
                                                    alt="product">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single dropdown end -->
                                <!-- single dropdown start -->
                                <div class="dropdown">
                                    <a href="#" id="dLabel3" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="far fa-clock"></i>
                                        <span class="ms-1">Watch</span>
                                        <span class="right__arrow"><i
                                                class="la la-angle-right text-primary"></i></span>
                                    </a>
                                    <div class="dropdown-menu cate__dropdown" aria-labelledby="dLabel3">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shirt</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shoes</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jacket</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sports</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link" href="#">Hand
                                                            Bags</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jewellery</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Electronic</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sandals</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shirt</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shoes</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jacket</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sports</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/frontend/img/product/14.jpg') }}"
                                                    alt="product">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single dropdown end -->
                                <!-- single dropdown start -->
                                <div class="dropdown">
                                    <a href="#" id="dLabel4" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fas fa-laptop"></i>
                                        <span class="ms-1">Electronic</span>
                                        <span class="right__arrow"><i
                                                class="la la-angle-right text-primary"></i></span>
                                    </a>
                                    <div class="dropdown-menu cate__dropdown" aria-labelledby="dLabel4">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shirt</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shoes</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jacket</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sports</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link" href="#">Hand
                                                            Bags</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jewellery</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Electronic</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sandals</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="navbar-nav">
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shirt</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Shoes</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Jacket</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sunglass</a></li>
                                                    <li class="nav-item"><a class="nav-link"
                                                            href="#">Sports</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <img class="img-fluid"
                                                    src="{{ asset('assets/frontend/img/banner/headphones_PNG7631.png') }}"
                                                    alt="product">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single dropdown end -->
                                <!-- single dropdown start -->
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-heartbeat"></i>
                                        <span class="ms-1">Health</span>
                                        <span class="right__arrow"><i
                                                class="la la-angle-right text-primary"></i></span>
                                    </a>
                                </div>
                                <!-- single dropdown end -->
                                <!-- single dropdown start -->
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-warehouse"></i>
                                        <span class="ms-1">Home & Decor</span>
                                        <span class="right__arrow"><i
                                                class="la la-angle-right text-primary"></i></span>
                                    </a>
                                </div>
                                <!-- single dropdown end -->
                                <!-- single dropdown start -->
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fab fa-pagelines"></i>
                                        <span class="ms-1">Beauty & Personal Care</span>
                                        <span class="right__arrow"><i
                                                class="la la-angle-right text-primary"></i></span>
                                    </a>
                                </div>
                                <!-- single dropdown end -->
                                <!-- single dropdown start -->
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-laptop-house"></i>
                                        <span class="ms-1">House Design</span>
                                        <span class="right__arrow"><i
                                                class="la la-angle-right text-primary"></i></span>
                                    </a>
                                </div>
                                <!-- single dropdown end -->
                                <!-- single dropdown start -->
                                <div class="dropdown">
                                    <a href="#" id="dLabel7" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fas fa-couch"></i>
                                        <span class="ms-1">Furniture</span>
                                        <span class="right__arrow"><i
                                                class="la la-angle-right text-primary"></i></span>
                                    </a>
                                </div>
                                <!-- single dropdown end -->
                                <!-- single dropdown start -->
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="far fa-gem"></i>
                                        <span class="ms-1">Jewellery</span>
                                        <span class="right__arrow"><i
                                                class="la la-angle-right text-primary"></i></span>
                                    </a>
                                </div>
                                <!-- single dropdown end -->
                                <!-- single dropdown start -->
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-volleyball-ball"></i>
                                        <span class="ms-1">Sports</span>
                                        <span class="right__arrow"><i
                                                class="la la-angle-right text-primary"></i></span>
                                    </a>
                                </div>
                                <!-- single dropdown end -->
                            </div>
                        </div>
                    </div>
                    <!-- categories area end -->

                    <!-- home slider start -->
                    <div class="col-lg-9">
                        <div class="home__slider mt-lg-0 mt-4">
                            <div class="home-slider owl-carousel owl-theme">
                                <div class="item position-relative d-flex align-items-center">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/home-slider/1.jpg') }}" alt="img">
                                    <div class="home__slider__content position-absolute ms-5">
                                        <h3>top brands</h3>
                                        <h4>sports <span class="text-danger">shoes</span></h4>
                                        <p>Lorem Ipsum is dolar Ipsum is dolar. </p>
                                        <a class="bg-danger" href="#">buy now</a>
                                    </div>
                                </div>
                                <div class="item position-relative d-flex align-items-center">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/home-slider/2.jpg') }}" alt="img">
                                    <div class="home__slider__content position-absolute ms-5">
                                        <h3>off 20%</h3>
                                        <h4> <span class="text-primary">new</span> collection</h4>
                                        <p>Lorem Ipsum is dolar Ipsum is dolar. </p>
                                        <a class="bg-primary" href="#">buy now</a>
                                    </div>
                                </div>
                                <div class="item position-relative d-flex align-items-center">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/home-slider/3.jpg') }}" alt="img">
                                    <div class="home__slider__content position-absolute ms-5">
                                        <h3>save 15%</h3>
                                        <h4>smart <span class="text-info">watch</span></h4>
                                        <p>Lorem Ipsum is dolar Ipsum is dolar. </p>
                                        <a class="bg-info" href="#">buy now</a>
                                    </div>
                                </div>
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
                                src="{{ asset('assets/frontend/img/static-area-icon/static-icons-1.png') }}"
                                alt="shipping">
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
                                src="{{ asset('assets/frontend/img/static-area-icon/static-icons-2.png') }}"
                                alt="return">
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
                                src="{{ asset('assets/frontend/img/static-area-icon/static-icons-3.png') }}"
                                alt="payment">
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
                                src="{{ asset('assets/frontend/img/static-area-icon/static-icons-4.png') }}"
                                alt="support">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/1.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/6.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/1.jpg') }}"
                                    alt="product">
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
                    <button type="button" class="btn-close " data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- display img start -->
                            <div id="first" class="d-block">
                                <img class="img-fluid border"
                                    src="{{ asset('assets/frontend/img/product/9.jpg') }}" alt="product">
                            </div>
                            <div id="second" class="d-none">
                                <img class="img-fluid border"
                                    src="{{ asset('assets/frontend/img/product/16.jpg') }}" alt="product">
                            </div>
                            <div id="third" class="d-none">
                                <img class="img-fluid border"
                                    src="{{ asset('assets/frontend/img/product/14.jpg') }}" alt="product">
                            </div>
                            <div id="fourth" class="d-none">
                                <img class="img-fluid border"
                                    src="{{ asset('assets/frontend/img/product/16.jpg') }}" alt="product">
                            </div>
                            <!-- display img end -->
                            <!-- thumbnail img start -->
                            <div class="row mt-3 ">
                                <div class="col-3">
                                    <button class="border-0" onclick="myFirst()"><img class="img-fluid border"
                                            src="{{ asset('assets/frontend/img/product/9.jpg') }}"
                                            alt="nav-img"></button>
                                </div>
                                <div class="col-3">
                                    <button class="border-0" onclick="second()"><img class="img-fluid border"
                                            src="{{ asset('assets/frontend/img/product/16.jpg') }}"
                                            alt="nav-img"></button>
                                </div>
                                <div class="col-3">
                                    <button class="border-0" onclick="third()"><img class="img-fluid border"
                                            src="{{ asset('assets/frontend/img/product/14.jpg') }}"
                                            alt="nav-img"></button>
                                </div>
                                <div class="col-3">
                                    <button class="border-0" onclick="fourth()"><img class="img-fluid border"
                                            src="{{ asset('assets/frontend/img/product/16.jpg') }}"
                                            alt="nav-img"></button>
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
                                        <h2 class="price text-primary m-0">$400.00 <del
                                                class="disc__ount">$600</del></h2>
                                    </div>
                                    <div class="col-7 z">
                                        <div class="right__utility">
                                            <a class="wish_list" href="#" title="Wishlist"><i
                                                    class="la la-heart-o"></i></a>
                                            <a class="com_pare" href="#" title="Compare"><i
                                                    class="las la-sync"></i></a>
                                            <a class="email" href="#" title="Email"><i
                                                    class="lar la-envelope-open"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal">
                                <!-- add to cart button -->
                                <div class="row mt-4">
                                    <div class="col-2">
                                        <input type="number" class="form-control form-control-lg rounded-0"
                                            value="1">
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-lg btn-primary rounded-0 shadow">ADD
                                            TO CART</button>
                                    </div>
                                </div>
                                <!-- share link -->
                                <div class="share_link d-block mt-4">
                                    <span class="text-muted">Share : </span>
                                    <a title="facebook" class="share__fb" href="#"><i
                                            class="lab la-facebook-f"></i></a>
                                    <a title="linkedin" class="share__link" href="#"><i
                                            class="lab la-linkedin-in"></i></a>
                                    <a title="twitter" class="share__tw" href="#"><i
                                            class="lab la-twitter"></i></a>
                                    <a title="whatsapp" class="share__whts" href="#"><i
                                            class="lab la-whatsapp"></i></a>
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
                    <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/lg-banner.jpg') }}"
                        alt="img">
                    <div class="banner__content position-absolute ms-4">
                        <h4>new collection</h4>
                        <a href="#">buy now</a>
                    </div>
                </div>
                <div class="item position-relative d-flex align-items-center">
                    <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/fashion-4.jpg') }}"
                        alt="img">
                    <div class="banner__content position-absolute ms-4">
                        <h4>new fashion</h4>
                        <a href="#">buy now</a>
                    </div>
                </div>
                <div class="item position-relative d-flex align-items-center">
                    <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/fashion-3.jpg') }}"
                        alt="img">
                    <div class="banner__content position-absolute ms-4">
                        <h4>black friday</h4>
                        <a href="#">buy now</a>
                    </div>
                </div>
                <div class="item position-relative d-flex align-items-center">
                    <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/fashion-4.jpg') }}"
                        alt="img">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/14.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/12.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/10.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/13.jpg') }}"
                                    alt="product">
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
                <img class="img-fluid shadow" src="{{ asset('assets/frontend/img/banner/banner-2.jpg') }}"
                    alt="img">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/1.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/4.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/5.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/3.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/6.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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

    <!-- banner area start -->
    <section>
        <!-- container area start -->
        <div class="container">
            <div class="banner-lg owl-carousel mt-4">
                <div class="item position-relative d-flex align-items-center">
                    <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/lg-banner.jpg') }}"
                        alt="img">
                    <div class="new-label">
                        <div class="text token">NEW</div>
                    </div>
                    <div class="banner__content position-absolute ms-5">
                        <h4>new collection</h4>
                        <a href="#">buy now</a>
                    </div>
                </div>
                <div class="item position-relative d-flex align-items-center">
                    <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/fashion-4.jpg') }}"
                        alt="img">
                    <div class="new-label">
                        <div class="text token">SALE</div>
                    </div>
                    <div class="banner__content position-absolute ms-5">
                        <h4>new fashion</h4>
                        <a href="#">buy now</a>
                    </div>
                </div>
                <div class="item position-relative d-flex align-items-center">
                    <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/fashion-3.jpg') }}"
                        alt="img">
                    <div class="new-label">
                        <div class="text token">HOT</div>
                    </div>
                    <div class="banner__content position-absolute ms-5">
                        <h4>black friday</h4>
                        <a href="#">buy now</a>
                    </div>
                </div>
                <div class="item position-relative d-flex align-items-center">
                    <img class="img-fluid rounded-1" src="{{ asset('assets/frontend/img/banner/fashion-4.jpg') }}"
                        alt="img">
                    <div class="new-label">
                        <div class="text token">NEW</div>
                    </div>
                    <div class="banner__content position-absolute ms-5">
                        <h4>summer sale</h4>
                        <a href="#">buy now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- container area end -->
    </section>
    <!-- banner area end -->

    <!-- popular cate/top brand area start -->
    <section>
        <!-- container area start -->
        <div class="container">
            <div class="row mt-2">
                <!-- top categories start -->
                <div class="col-lg-6 col-md-6">
                    <!-- title start -->
                    <div class="d-flex mb-3 align-items-baseline border-bottom">
                        <h3 class="h5 fw-700 mb-0">
                            <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Top
                                Categories</span>
                        </h3>
                    </div>
                    <!-- title end -->
                    <div class="row">
                        <div class="col-lg-6 pe-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/popular-categories/1.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">Smartphone</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-lg-0 mt-2 ps-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/popular-categories/4.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">Laptop</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2 pe-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/popular-categories/2.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">Smart Watch</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-2 ps-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/popular-categories/3.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">Feature Phone</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2 pe-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/popular-categories/5.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">Television</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-2 ps-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/popular-categories/6.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">Fridge</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2 pe-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/popular-categories/7.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">Headphone</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-2 ps-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/popular-categories/8.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">Accessories</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2 pe-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/popular-categories/10.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">Electronic</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-2 ps-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/popular-categories/1.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">Laptop</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top categories end -->
                <!-- top brand start -->
                <div class="col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-4">
                    <!-- title start -->
                    <div class="d-flex mb-3 align-items-baseline border-bottom">
                        <h3 class="h5 fw-700 mb-0">
                            <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">Top
                                Brands</span>
                        </h3>
                    </div>
                    <!-- title end -->
                    <div class="row">
                        <div class="col-lg-6 pe-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/top-brand/1.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">AUDI</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-lg-0 mt-2 ps-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/top-brand/2.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">CHEVROLET</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2 pe-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/top-brand/3.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">FORD</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-2 ps-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/top-brand/4.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">HONDA</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2 pe-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/top-brand/5.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">HYUNDAI</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2 ps-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/top-brand/6.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">MINI</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-2 pe-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/top-brand/7.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">LAND ROVER</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2 ps-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/top-brand/8.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">NISSAN</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-2 pe-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/top-brand/2.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">CHEVROLET</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-2 ps-lg-1">
                            <div class="card popular__cate">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="cate__img">
                                                <img class="top___cate"
                                                    src="{{ asset('assets/frontend/img/top-brand/4.png') }}"
                                                    alt="categories">
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-wrap align-content-center">
                                            <div class="cate__content">
                                                <h6 class="m-0">HONDA</h6>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content-center">
                                            <i class="la la-angle-right text-primary"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- top brand start -->
            </div>
        </div>
        <!-- container area end -->
    </section>
    <!-- popular cate/top brand area end -->

    <!-- feature product area start -->
    <section>
        <!-- container area start -->
        <div class="container">
            <div class="feature__product__area mt-4">
                <!-- title start -->
                <div class="d-flex mb-2 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-2 d-inline-block">Feature
                            Products</span>
                    </h3>
                </div>
                <!-- title end -->
                <div class="row custom-row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/5.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Sports Shoes</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/13.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Best Headphone</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/4.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Dress for Woman</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/9.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Smart Watch</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/7.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Sunglass for man</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/21.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Best Headphone</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/19.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Sports Shoes</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/20.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Ladies Bag for Woman</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/26.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Smart Watch for man</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/10.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Ladies Hand Bag</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/8.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Sunglass for man</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <!-- single product start -->
                        <div class="single__product card card-body p-0  border my-1">
                            <div class="row">
                                <div class="col-5">
                                    <!-- product img start -->
                                    <div class="item-zoom">
                                        <img class="img-fluid"
                                            src="{{ asset('assets/frontend/img/product/26.jpg') }}" alt="product">
                                    </div>
                                    <!-- product img end -->
                                </div>
                                <div class="col-7">
                                    <div class="product__content text-start mt-2 border-0">
                                        <a class="stretched-link" href="#">Smart Watch for man</a>
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
                            </div>
                        </div>
                        <!-- single product end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- container area end -->
    </section>
    <!-- feature product area end -->

    <!-- banner section start -->
    <section>
        <!-- container area start -->
        <div class="container">
            <div class="subscribe__banner mt-4 shadow">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <div class="offer_content">
                            <h3 class="text-uppercase mb-4">all men’s collection</h3>
                            <h2 class="text-uppercase">50% off</h2>
                            <a class="btn-order btn-3" href="#">ORDER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container area end -->
        </div>
    </section>
    <!-- banner section end -->

    <!-- arrival product area start -->
    <section>
        <!-- container area start -->
        <div class="container">
            <div class="best__seller__section mt-4">
                <!-- title start -->
                <div class="d-flex mb-2 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">New
                            Arrival</span>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/1.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/4.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/5.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/3.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
                                </div>
                            </div>
                            <!-- card/detail/wishlist end -->
                            <!-- product img start -->
                            <div class="item-zoom">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/product/6.jpg') }}"
                                    alt="product">
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
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        title="Cart"><i class="las la-shopping-cart"></i></a>
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
                <!-- load more button start -->
                <div class="load__more__btn text-center mt-3">
                    <button><span class="ms-1"><i class="las la-plus"></i></span> View more product</button>
                </div>
                <!-- load more button end -->
            </div>
        </div>
        <!-- container area end -->
    </section>
    <!-- arrival product area end -->

    <!-- testmonial section start -->
    <section>
        <!-- container area start -->
        <div class="container">
            <!-- testmonial area start -->
            <div class="mt-4">
                <!-- title start -->
                <div class="d-flex mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-2 d-inline-block">What Client
                            Say?</span>
                    </h3>
                </div>
                <!-- title end -->
                <div class="testmonial owl-carousel">
                    <!-- single area start -->
                    <div class="item single__review p-3 bg-white border">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="client__img">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/testmonial/1.jpg') }}" alt="img">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="client__review__content">
                                    <div class="test__title clearfix">
                                        <div class="float-start">
                                            <h5>Lamia Rupsa</h5>
                                            <p class="text-muted">CEO of Company</p>
                                        </div>
                                        <div class="client__reviewer float-end">
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-muted"></i>
                                        </div>
                                    </div>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Ratione aliquam nam quaerat deleniti tempora ipsa esse quae dicta, itaque beatae
                                        quaerat deleni</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single area end -->
                    <!-- single area start -->
                    <div class="item single__review p-3 bg-white border">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="client__img">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/testmonial/2.jpg') }}" alt="img">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="client__review__content">
                                    <div class="test__title clearfix">
                                        <div class="float-start">
                                            <h5>David Malan</h5>
                                            <p class="text-muted">Head of Design</p>
                                        </div>
                                        <div class="client__reviewer float-end">
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-muted"></i>
                                        </div>
                                    </div>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Ratione aliquam nam quaerat deleniti tempora ipsa esse quae dicta, itaque beatae
                                        quaerat deleni</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single area end -->
                    <!-- single area start -->
                    <div class="item single__review p-3 bg-white border">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="client__img">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/testmonial/3.jpg') }}" alt="img">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="client__review__content">
                                    <div class="test__title clearfix">
                                        <div class="float-start">
                                            <h5>Sarah Ruhi</h5>
                                            <p class="text-muted">CEO of Company</p>
                                        </div>
                                        <div class="client__reviewer float-end">
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-muted"></i>
                                        </div>
                                    </div>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Ratione aliquam nam quaerat deleniti tempora ipsa esse quae dicta, itaque beatae
                                        quaerat deleni</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single area end -->
                    <!-- single area start -->
                    <div class="item single__review p-3 bg-white border">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="client__img">
                                    <img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/testmonial/4.jpg') }}" alt="img">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="client__review__content">
                                    <div class="test__title clearfix">
                                        <div class="float-start">
                                            <h5>John Dow</h5>
                                            <p class="text-muted">CEO of Company</p>
                                        </div>
                                        <div class="client__reviewer float-end">
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-warning"></i>
                                            <i class="las la-star text-muted"></i>
                                        </div>
                                    </div>
                                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Ratione aliquam nam quaerat deleniti tempora ipsa esse quae dicta, itaque beatae
                                        quaerat deleni</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single area end -->
                </div>
            </div>
            <!-- testmonial area end -->
        </div>
        <!-- container area end -->
    </section>
    <!-- testmonial section end -->

    <!-- blog section start -->
    <section>
        <!-- container area start -->
        <div class="container">
            <!-- blog area start -->
            <div class="mt-4">
                <!-- title start -->
                <div class="d-flex mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-2 d-inline-block">Latest
                            Blog</span>
                    </h3>
                </div>
                <!-- title end -->
                <div class="blog-post owl-carousel">
                    <!-- single post start -->
                    <div class="item">
                        <div class="card">
                            <div class="blog__img">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/blog/b1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="card-body">
                                <div class="text-muted mb-3">
                                    <i class="far fa-clock"></i> 30 minutes
                                    <i class="fas fa-users"></i> Admin
                                </div>
                                <h5 class="card-title text-justify">Ford clever bed stops your sleeping partner
                                    hogging the whole</h5>
                                <p class="lh-base mt-2 text-justify">Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s, when an unknown printer took.....</p>
                                <div
                                    class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                                    <div class="views">Oct 20, 12:45PM
                                    </div>
                                    <div class="stats">
                                        <i class="far fa-eye"></i> 1347
                                        <i class="far fa-comment"></i> 12
                                    </div>
                                </div>
                                <a class="stretched-link" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <!-- single post end -->
                    <!-- single post start -->
                    <div class="item">
                        <div class="card">
                            <div class="blog__img">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/blog/b2.jpg') }}"
                                    alt="">
                            </div>
                            <div class="card-body">
                                <div class="text-muted mb-3">
                                    <i class="far fa-clock"></i> 30 minutes
                                    <i class="fas fa-users"></i> Admin
                                </div>
                                <h5 class="card-title text-justify">Ford clever bed stops your sleeping partner
                                    hogging the whole</h5>
                                <p class="lh-base mt-2 text-justify">Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s, when an unknown printer took.....</p>
                                <div
                                    class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                                    <div class="views">Oct 20, 12:45PM
                                    </div>
                                    <div class="stats">
                                        <i class="far fa-eye"></i> 1347
                                        <i class="far fa-comment"></i> 12
                                    </div>
                                </div>
                                <a class="stretched-link" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <!-- single post end -->
                    <!-- single post start -->
                    <div class="item">
                        <div class="card">
                            <div class="blog__img">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/blog/b3.jpg') }}"
                                    alt="">
                            </div>
                            <div class="card-body">
                                <div class="text-muted mb-3">
                                    <i class="far fa-clock"></i> 30 minutes
                                    <i class="fas fa-users"></i> Admin
                                </div>
                                <h5 class="card-title text-justify">Ford clever bed stops your sleeping partner
                                    hogging the whole</h5>
                                <p class="lh-base mt-2 text-justify">Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since the 1500s, when an unknown printer took.....</p>
                                <div
                                    class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                                    <div class="views">Oct 20, 12:45PM
                                    </div>
                                    <div class="stats">
                                        <i class="far fa-eye"></i> 1347
                                        <i class="far fa-comment"></i> 12
                                    </div>
                                </div>
                                <a class="stretched-link" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <!-- single post end -->
                    <!-- single post start -->
                    <div class="item">
                        <div class="card">
                            <div class="blog__img">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/blog/b1.jpg') }}"
                                    alt="">
                            </div>
                            <div class="card-body">
                                <div class="text-muted mb-3">
                                    <i class="far fa-clock"></i> 30 minutes
                                    <i class="fas fa-users"></i> Admin
                                </div>
                                <h5 class="card-title">Ford clever bed stops your sleeping partner hogging the whole
                                </h5>
                                <p class="lh-base mt-2">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s, when an unknown printer took.....</p>
                                <div
                                    class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
                                    <div class="views">Oct 20, 12:45PM
                                    </div>
                                    <div class="stats">
                                        <i class="far fa-eye"></i> 1347
                                        <i class="far fa-comment"></i> 12
                                    </div>
                                </div>
                                <a class="stretched-link" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <!-- single post end -->
                </div>
            </div>
            <!-- blog area end -->
        </div>
        <!-- container area end -->
    </section>
    <!-- blog section end -->

    <!-- partner area start -->
    <div>
        <div class="partner__section mt-4">
            <!-- container area start -->
            <div class="container">
                <div class="partner owl-carousel">
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/partner/1.png') }}"
                            alt="partner">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/partner/2.png') }}"
                            alt="partner">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/partner/1.png') }}"
                            alt="partner">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/partner/2.png') }}"
                            alt="partner">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/partner/1.png') }}"
                            alt="partner">
                    </div>
                    <div class="item">
                        <img class="img-fluid" src="{{ asset('assets/frontend/img/partner/2.png') }}"
                            alt="partner">
                    </div>
                </div>
            </div>
            <!-- container area end -->
        </div>
    </div>
    <!-- partner area end -->
    <!-- ========================================HERO SECTION END:=======================
    =====================================================================================-->

    <!-- ========================================FOOTER SECTION:==========================
    =====================================================================================-->
    <!-- footer section start -->
    <footer>
        <!-- wrapper start -->
        <div class="footer__wrapper mt-4">
            <!-- container start -->
            <div class="container">
                <div class="row footer__padding">
                    <!-- first -->
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <!-- contact section start -->
                        <div class="contact">
                            <!-- title start -->
                            <div class="footer_header_title">
                                <h4>Contact us</h4>
                            </div>
                            <!-- title end -->

                            <!-- item start -->
                            <div class="row">
                                <div class="col-1 mt-2">
                                    <!-- icon -->
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="col-10">
                                    Bangladesh: House: 08, Road:02, PC Culture Housing Society, Shekhertek , Dhaka ,
                                    Mohammadpur , Bangladesh
                                </div>
                            </div>
                            <!-- item end -->
                            <!-- item start -->
                            <div class="row mt-3">
                                <div class="col-1">
                                    <!-- icon -->
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <div class="col-10">
                                    +8801879901545, +8801958155254
                                </div>
                            </div>
                            <!-- item end -->
                            <!-- item start -->
                            <div class="row mt-3">
                                <div class="col-1">
                                    <!-- icon -->
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="col-10">
                                    hrventuresbd@gmail.com
                                </div>
                            </div>
                            <!-- item end -->
                        </div>
                        <!-- contact section end -->
                    </div>

                    <!-- second -->
                    <div class="col-md-6 col-lg-3 col-xl-3 mt-lg-0 mt-md-0 mt-4">
                        <!-- title start -->
                        <div class="footer_header_title">
                            <h4>customer service</h4>
                        </div>
                        <!-- item start -->
                        <ul class="footer__link">
                            <li><a href="#">
                                    <i class="las la-angle-double-right"></i> My Account
                                </a></li>
                            <li><a href="#">
                                    <i class="las la-angle-double-right"></i> Order History
                                </a></li>
                            <li><a href="#">
                                    <i class="las la-angle-double-right"></i> Faq
                                </a></li>
                            <li><a href="#">
                                    <i class="las la-angle-double-right"></i> Specials
                                </a></li>
                            <li><a href="#">
                                    <i class="las la-angle-double-right"></i> Help Center
                                </a></li>
                        </ul>
                        <!-- item end -->
                        <!-- title end -->
                    </div>

                    <!-- third -->
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <!-- title start -->
                        <div class="footer_header_title">
                            <h4>custom links</h4>
                        </div>
                        <!-- item start -->
                        <ul class="footer__link">
                            <li><a href="#">
                                    <i class="las la-angle-double-right"></i> Customer Service
                                </a></li>
                            <li><a href="#">
                                    <i class="las la-angle-double-right"></i> About us
                                </a></li>
                            <li><a href="#">
                                    <i class="las la-angle-double-right"></i> Company
                                </a></li>
                            <li><a href="#">
                                    <i class="las la-angle-double-right"></i> Investor Relation
                                </a></li>
                            <li><a href="#">
                                    <i class="las la-angle-double-right"></i> Advanced Service
                                </a></li>
                        </ul>
                        <!-- item end -->
                        <!-- title end -->
                    </div>

                    <!-- fourth -->
                    <div class="col-md-6 col-lg-3 col-xl-3">
                        <!-- title start -->
                        <div class="footer_header_title">
                            <h4>News letter</h4>
                        </div>
                        <!-- item start -->
                        <div class="news_content">
                            <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the
                                legal notice.</p>
                            <!-- subscribe -->
                            <form action="#">
                                <div class="input-group my-4">
                                    <input type="text"
                                        class="form-control form-control-lg border-primary border-2"
                                        placeholder="Subscribe here..." aria-label="Recipient's username"
                                        aria-describedby="button-addon2">
                                    <button class="btn btn-primary" type="submit" id="button-addon2"><i
                                            class="lab la-telegram-plane la-2x"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- item end -->
                        <!-- title end -->
                    </div>
                </div>
            </div>
            <!-- container end -->

            <!-- footer bottom start -->
            <div class="footer_bottom">
                <!-- container start -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <ul class="d-inline-flex david__card">
                                <li><img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/david_card/1.png') }}" alt="img">
                                </li>
                                <li><img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/david_card/2.png') }}" alt="img">
                                </li>
                                <li><img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/david_card/3.png') }}" alt="img">
                                </li>
                                <li><img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/david_card/4.png') }}" alt="img">
                                </li>
                                <li><img class="img-fluid"
                                        src="{{ asset('assets/frontend/img/david_card/5.png') }}" alt="img">
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-md-0 mt-lg-0 mt-3">
                            <ul class="d-flex justify-content-lg-end social__link">
                                <li>
                                    <a title="facebook" class="facebook" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a title="twitter" class="twitter" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a title="instagram" class="insta" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a title="linkedin" class="linkedin" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a title="google" class="google" href="#"><i
                                            class="fab fa-google"></i></a>
                                </li>
                                <li>
                                    <a title="rss" class="pin" href="#"><i
                                            class="fas fa-rss"></i></a>
                                </li>
                                <li>
                                    <a title="youtube" class="youtube" href="#"><i
                                            class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- container end -->
            </div>
            <!-- footer bottom end -->
        </div>
        <!-- wrapper end -->
    </footer>
    <!-- footer section end -->
    <!-- ========================================FOOTER SECTION END:======================
    =====================================================================================-->

    <!-- go to top button start -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i
            class="las la-angle-double-up"></i></button>
    <!-- go to top button end -->

    <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/js/megamenu.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>


</body>

</html>
