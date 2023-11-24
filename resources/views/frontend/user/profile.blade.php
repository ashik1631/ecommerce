@extends('layouts.frontend')
@section('content')
<!-- ========================================HERO SECTION START:=======================
    =====================================================================================-->
    <!-- breadcrumb area start -->
    <div>
        <nav aria-label="breadcrumb" class="mt-3">
            <!-- container area start -->
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-primary" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </div>
            <!-- container area end -->
        </nav>
    </div>
    <!-- breadcrumb area end -->

    <!-- user profile area start -->
    <section>
        <!-- container area start -->
        <div class="container">
            <div class="user__profile">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="accordion shadow" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header border-bottom accor__title" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  My Account
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="navbar-nav top_5_cate my__account">
                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> Dashboard</a></li>
                                        <li><a class="active-item" href="user-profile.html"><i class="las la-angle-double-right me-1"></i> My Profile</a></li>
                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> Edit Account</a></li>
                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> Change Password</a></li>

                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> My Wishlist</a></li>
                                        <li><a href="order-history.html"><i class="las la-angle-double-right me-1"></i> Order History</a></li>
                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> Order Detail</a></li>
                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> Billing Agreement</a></li>
                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> Product Review</a></li>
                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> My Application</a></li>
                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> Subscription</a></li>
                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> Order Detail</a></li>
                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> Logout</a></li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-9 mt-lg-0 mt-3">
                        <div class="cover__photo">
                            <img class="img-fluid" src="assets/img/banner/profile-cover.png" alt="img">
                            <div class="d-flex justify-content-between">
                                <div class="user__title ms-3 mt-3">
                                    <h3>{{auth()->user()->name}}</h3>
                                    <p>{{auth()->user()->email}}</p>
                                </div>
                                <div class="profile__img">
                                    <img class="img-fluid rounded-circle" src="{{ asset('assets/frontend/img/testmonial/2.jpg') }}" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="profile__info bg-white rounded-1 mt-3 border shadow">
                            <h5 class="border-bottom p-3">Personal Details</h5>
                            <div class="card card-body border-0 rounded-0 pt-0">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <table class="table table__info">
                                            <tbody>
                                                <tr>
                                                    <td>User Name</td>
                                                    <td>:</td>
                                                    <td>{{auth()->user()->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>:</td>
                                                    <td>{{auth()->user()->email}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container area end -->
    </section>
    <!-- user profile area end -->

    <!-- ========================================HERO SECTION END:=======================
    =====================================================================================-->

    <!-- ========================================FOOTER SECTION:==========================
    =====================================================================================-->
@endsection
