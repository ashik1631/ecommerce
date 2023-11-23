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
                    <li class="breadcrumb-item"><a class="text-primary" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Register</li>
                </ol>
            </div>
            <!-- container area end -->
        </nav>
    </div>
    <!-- breadcrumb area end -->

    <!-- register area start -->
    <section>
        <!-- container area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card login_form p-4 shadow">
                        <h3>Create an account with</h3>
                        <form action="{{url('/customer/store')}}" method="POST">
                        @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="input-group login mb-4">
                                        <span class="input-group-text text-muted" ><i class="las la-user fa-2x"></i></span>
                                        <input type="text" name="name" required class="form-control form-control-lg rounded-0"  placeholder="Name">
                                      </div>
                                </div>
                            </div>
                            <div class="input-group login mb-4">
                                <span class="input-group-text text-muted" ><i class="las la-envelope la-2x"></i></span>
                                <input type="email" name="email" required class="form-control form-control-lg rounded-0"  placeholder="user@gmail.com">
                              </div>
                            <div class="input-group login mb-3">
                                <span class="input-group-text text-muted" ><i class="las la-lock la-2x"></i></span>
                                <input type="password" name="password" required class="form-control form-control-lg border-end-0"  placeholder="Password">
                                <span class="input-group-text text-muted" ><i class="las la-eye-slash la-2x"></i></span>
                              </div>
                              <div class="d-flex justify-content-between mb-4 rem__for">
                                <div class="form-check d-flex align-items-center">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label ms-2" for="flexCheckDefault">
                                        I accept the Terrms of Use.
                                    </label>
                                  </div>
                              </div>
                              <div class="submit__btn mb-5">
                                <button type="submit" class="btn btn-lg btn-primary shadow">SIGNUP</button>
                              </div>
                        </form>
                        <div class="sign_up">
                            <span class="text-muted any__account">Have an account ? <a class="text-primary" href="{{ route('login') }}">LOGIN</a></span>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <!-- container area end -->
    </section>
    <!-- register area end -->

    <!-- ========================================HERO SECTION END:=======================
    =====================================================================================-->

    <!-- ========================================FOOTER SECTION:==========================
    =====================================================================================-->
@endsection
