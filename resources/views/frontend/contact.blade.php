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
                    <li class="breadcrumb-item"><a class="text-primary" href="{{ route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </div>
            <!-- container area end -->
        </nav>
    </div>
    <!-- breadcrumb area end -->

    <!-- contact area start -->
    <section>
        <!-- container area start -->
        <div class="container">
            <div class="card card-body shadow">
                <div class="google__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1825.0572806719258!2d90.36399593843494!3d23.81452494849761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1adb85e5029%3A0xb605adc8fbe906f2!2sMirpur%20Bangla%20School%20and%20College!5e0!3m2!1sen!2sbd!4v1700672823744!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-12 col-md-12 mt-lg-0 mt-md-0 mt-4">
                        <div class="contact__info">
                            <h5>Contact Details</h5>
                            <div class="mt-3 d-flex align-items-center">
                                <div class="p-3 bg-primary text-white me-3">
                                    <i class="fas fa-map-marker-alt fa-lg"></i>
                                </div>
                                <span>
                                    Bangladesh: House: 29, Road:31, Mirpur 11, Av-5 , Dhaka , Pallabi , Bangladesh
                                </span>
                            </div>
                            <div class="mt-3 d-flex align-items-center">
                                <div class="p-3 bg-primary text-white me-3">
                                    <i class="fas fa-phone-volume fa-lg"></i>
                                </div>
                                <span>
                                    +8801717719168 <br> +8801962567572
                                </span>
                            </div>
                            <div class="mt-3 d-flex align-items-center">
                                <div class="p-3 bg-primary text-white me-3">
                                    <i class="far fa-envelope fa-lg"></i>
                                </div>
                                <span>
                                    ashik163111@gmail.com
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container area end -->
    </section>
    <!-- contact area end -->

    <!-- ========================================HERO SECTION END:=======================
    =====================================================================================-->

    <!-- ========================================FOOTER SECTION:==========================
    =====================================================================================-->
@endsection
