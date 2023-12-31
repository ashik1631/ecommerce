@extends('layouts.backend')

@section('content')
    <div class="container-fluid">
        <!-- breadcame start -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"><span
                                            class="p-1 text-sm text-light bg-success rounded-circle"><i
                                                class="fas fa-home"></i></span> Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product Template</li>
                                <a href="{{ route('admin.slider.create') }}" class="btn btn-primary ml-auto">New Task</a>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- dashboard body content -->
        <div class="dashboard my-4">
            <div class="content_section">
                <!-- card content start -->
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card p-4 my-2">
                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="card_left">
                                        <p>Category</p>
                                        <h5>{{ $category }}</h5>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="card_right">
                                        <i class="fas fa-hand-pointer bg-danger"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="card_footer"><span class="text-success mr-2"><i
                                        class="fas fa-arrow-up"></i>3.48%</span> Since last month</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card p-4 my-2">
                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="card_left">
                                        <p>Product</p>
                                        <h5>{{ $product }}</h5>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="card_right">
                                        <i class="fas fa-globe bg-success"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="card_footer"><span class="text-success mr-2"><i
                                        class="fas fa-arrow-up"></i>3.48%</span> Since last month</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card p-4 my-2">
                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="card_left">
                                        <p>Order Processing</p>
                                        <h5>{{$order_process}}</h5>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="card_right">
                                        <i class="fas fa-chart-pie bg-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="card_footer"><span class="text-success mr-2"><i
                                        class="fas fa-arrow-up"></i>3.48%</span> Since last month</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card p-4 my-2">
                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="card_left">
                                        <p>Order delivery</p>
                                        <h5>{{ $order_delivery }}</h5>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="card_right">
                                        <i class="fas fa-database bg-info"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="card_footer"><span class="text-success mr-2"><i
                                        class="fas fa-arrow-up"></i>3.48%</span> Since last month</p>
                        </div>
                    </div>
                </div>
                <!-- card content start -->
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card p-4 my-2">
                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="card_left">
                                        <p>Order cancel</p>
                                        <h5>{{ $order_cancel }}</h5>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="card_right">
                                        <i class="fas fa-hand-pointer bg-danger"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="card_footer"><span class="text-success mr-2"><i
                                        class="fas fa-arrow-up"></i>3.48%</span> Since last month</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card p-4 my-2">
                            <div class="clearfix">
                                <div class="float-left">
                                    <div class="card_left">
                                        <p>Total User</p>
                                        <h5>{{ $user }}</h5>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <div class="card_right">
                                        <i class="fas fa-globe bg-success"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="card_footer"><span class="text-success mr-2"><i
                                        class="fas fa-arrow-up"></i>3.48%</span> Since last month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
    </div>
@endsection
