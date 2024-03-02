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
                                        <li><a class="active-item" href="{{route ('profiles')}}"><i class="las la-angle-double-right me-1"></i> My Profile</a></li>
                                        <li><a href="#"><i class="las la-angle-double-right me-1"></i> Edit Account</a></li>
                                        <li><a href="{{  route('order_details') }}"><i class="las la-angle-double-right me-1"></i> My Wishlist</a></li>
                                        <li><a href="{{  route('order_details') }}"><i class="las la-angle-double-right me-1"></i> Order Detail</a></li>
                                        <li><a href="{{ route('logout') }}"><i class="las la-angle-double-right me-1"></i> Logout</a></li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-9 mt-lg-0 mt-3">
                        <div class="profile__info bg-white rounded-1 mt-3 border shadow">
                            <h5 class="border-bottom p-3">Order Details</h5>
                            <table class="table table-borderd">
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>name</th>
                                        <th>phone</th>
                                        <th>payment_method</th>
                                        <th>order_status</th>
                                        <th>price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->payment_methode }}</td>
                                        <td>
                                            <span class="badge {{ $item->order_status === 'Processing' ? 'bg-danger' : ($item->order_status === 'Delivery' ? 'bg-success' : 'bg-warning') }}">
                                                {{ $item->order_status }}
                                            </span>
                                        </td>

                                        <td>{{ $item->price }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
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
