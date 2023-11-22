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
        <div class="row">
            <!-- left area start -->
            <div class="col-lg-8">
                <div class="accordion" id="ac1">
                    <div class="accordion-item shadow">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button h5 m-0 text-muted" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Your Personal Details
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#ac1">
                        <div class="accordion-body">
                          <form action="#">
                              <div class="row">
                                  <div class="col-lg-6 col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="First name">
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Last name">
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Email address">
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Phone number">
                                      </div>
                                  </div>
                                  <div class="col-12">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Mailing address">
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                    <div class="mb-3">
                                        <select class="form-control rounded-0 text-muted">
                                            <option disabled selected>Select City</option>
                                            <option value="Barishal">Barishal</option>
                                            <option value="Chattogram">Chattogram</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Rangpur">Rangpur</option>
                                            <option value="Sylhet">Sylhet</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded-0" placeholder="Post code">
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                    <div class="mb-3">
                                        <select class="form-control rounded-0 text-muted">
                                            <option disabled selected>Select Country</option>
                                            <option value="Barishal">Barishal</option>
                                            <option value="Chattogram">Chattogram</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Rangpur">Rangpur</option>
                                            <option value="Sylhet">Sylhet</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                    <div class="mb-3">
                                        <select class="form-control rounded-0 text-muted">
                                            <option disabled selected>Select Region / State</option>
                                            <option value="Barishal">Barishal</option>
                                            <option value="Chattogram">Chattogram</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Mymensingh">Mymensingh</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Rangpur">Rangpur</option>
                                            <option value="Sylhet">Sylhet</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-lg-6 col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                          My delivery and mailing addresses are the same.
                                        </label>
                                      </div>
                                  </div>
                                  <div class="border-top mt-3 pt-3">
                                      <button id="nextStep" type="button" class="btn btn-primary rounded-0">Next Step</button>
                                  </div>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item mt-3 shadow">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed h5 m-0 text-muted" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Shipping Address
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                      <div class="mb-3">
                                          <input type="text" class="form-control rounded-0" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                      <div class="mb-3">
                                          <input type="text" class="form-control rounded-0" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                      <div class="mb-3">
                                          <input type="text" class="form-control rounded-0" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                      <div class="mb-3">
                                          <input type="text" class="form-control rounded-0" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                      <div class="mb-3">
                                          <input type="text" class="form-control rounded-0" placeholder="Mailing address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                      <div class="mb-3">
                                          <select class="form-control rounded-0 text-muted">
                                              <option disabled selected>Select City</option>
                                              <option value="Barishal">Barishal</option>
                                              <option value="Chattogram">Chattogram</option>
                                              <option value="Dhaka">Dhaka</option>
                                              <option value="Khulna">Khulna</option>
                                              <option value="Mymensingh">Mymensingh</option>
                                              <option value="Rajshahi">Rajshahi</option>
                                              <option value="Rangpur">Rangpur</option>
                                              <option value="Sylhet">Sylhet</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                      <div class="mb-3">
                                          <input type="text" class="form-control rounded-0" placeholder="Post code">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                      <div class="mb-3">
                                          <select class="form-control rounded-0 text-muted">
                                              <option disabled selected>Select Country</option>
                                              <option value="Barishal">Barishal</option>
                                              <option value="Chattogram">Chattogram</option>
                                              <option value="Dhaka">Dhaka</option>
                                              <option value="Khulna">Khulna</option>
                                              <option value="Mymensingh">Mymensingh</option>
                                              <option value="Rajshahi">Rajshahi</option>
                                              <option value="Rangpur">Rangpur</option>
                                              <option value="Sylhet">Sylhet</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                      <div class="mb-3">
                                          <select class="form-control rounded-0 text-muted">
                                              <option disabled selected>Select Region / State</option>
                                              <option value="Barishal">Barishal</option>
                                              <option value="Chattogram">Chattogram</option>
                                              <option value="Dhaka">Dhaka</option>
                                              <option value="Khulna">Khulna</option>
                                              <option value="Mymensingh">Mymensingh</option>
                                              <option value="Rajshahi">Rajshahi</option>
                                              <option value="Rangpur">Rangpur</option>
                                              <option value="Sylhet">Sylhet</option>
                                          </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                      <button class="accordion-button collapsed h5 m-0 text-muted" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Selected Product
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <div class="select__product d-flex justify-content-between align-items-center">
                              <div class="d-flex align-items-center">
                                  <img class="blog__thumb" src="assets/img/product/9.jpg" alt="">
                                  <div class="ms-2">
                                      <h6>Fashion for man</h6>
                                      <p class="m-0 text-muted">XL  1 x $250</p>
                                  </div>
                              </div>
                              <p>$250.0</p>
                          </div>
                          <div class="select__product d-flex justify-content-between align-items-center mt-3">
                              <div class="d-flex align-items-center">
                                  <img class="blog__thumb" src="assets/img/product/10.jpg" alt="">
                                  <div class="ms-2">
                                      <h6>Fashion for man</h6>
                                      <p class="m-0 text-muted">XL  1 x $250</p>
                                  </div>
                              </div>
                              <p>$250.0</p>
                          </div>
                          <div class="select__product d-flex justify-content-between align-items-center my-3">
                              <div class="d-flex align-items-center">
                                  <img class="blog__thumb" src="assets/img/product/11.jpg" alt="">
                                  <div class="ms-2">
                                      <h6>Fashion for man</h6>
                                      <p class="m-0 text-muted">XL  1 x $250</p>
                                  </div>
                              </div>
                              <p>$250.0</p>
                          </div>
                          <div class="d-flex justify-content-between border-top pt-3">
                            <p class="">Subtotal</p>
                            <h5 class="">$250</h5>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="">Shipping Cost (+) :</p>
                            <h5 class="">$250</h5>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="">Discount</p>
                            <h5 class="">$250</h5>
                        </div>
                        <div class="d-flex justify-content-between border-top pt-3">
                            <h5 class="">Grand Total :</h5>
                            <h5 class="">$550</h5>
                        </div>
                        <a class="btn btn-primary mt-4 rounded-0" href="#"><i class="las la-arrow-left"></i> EDIT SHOPPING CART</a>
                      </div>
                    </div>
                  </div>
                <div class="checkout__table bg-white p-4 mt-3 border rounded-1 shadow">
                    <div class="filter__title text-center">
                        <h6 class="m-0">pay info</h6>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label text-muted">Cardholder Name</label>
                        <input type="email" class="form-control rounded-0"  placeholder="xxxx xxxx xxxx">
                      </div>
                    <div class="mb-3">
                        <label  class="form-label text-muted">Card Number</label>
                        <div class="d-flex">
                            <input type="email" class="form-control rounded-0 border-end-0"  placeholder="0000 0000 0000 0000">
                        <span class="border border-start-0"><img src="assets/img/david_card/card.png" alt=""></span>
                        </div>
                      </div>
                    <div class="mb-3">
                        <label  class="form-label text-muted">Expiration</label>
                        <div class="d-flex">
                            <input type="email" class="form-control rounded-0 me-2"  placeholder="MM">
                            <input type="email" class="form-control rounded-0 me-2"  placeholder="YYYY">
                            <input type="email" class="form-control rounded-0"  placeholder="CVC/CC">
                        </div>
                      </div>
                    <a class="d-block btn btn-primary btn-lg mt-4 rounded-0" href="#">PAY NOW</a>
                </div>
            </div>
            <!-- right area end -->
        </div>
    </div>
    <!-- container area end -->
</section>
<!-- shipping area end -->
@endsection
