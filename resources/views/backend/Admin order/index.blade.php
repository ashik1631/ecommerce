@extends('layouts.backend')

@section('content')
<div class="container-fluid">
    <!-- breadcame start -->
    @include('layouts.message')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"
                                    class="breadcrumb-link"><span
                                        class="p-1 text-sm text-light bg-success rounded-circle"><i
                                            class="fas fa-home"></i></span> Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- data table start -->
<div class="data_table my-4">
    <div class="content_section">
        <table id="example" class="table table-striped table-bordered table-responsive-sm" style="width:100%">
            <thead>
                <tr>
                    <th>Sl.No</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>payment_method</th>
                    <th>order_status</th>
                    <th>price</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->payment_methode }}</td>
                    <td>
                        <span class="badge {{ $item->order_status === 'Processing' ? 'bg-danger':($item->order_status === 'Delivery' ? 'bg-success' : 'bg-warning') }}">
                            {{ $item->order_status }}
                        </span>
                    </td>

                    <td>{{ $item->price }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="#order{{ $item->id }}" data-toggle="modal">view</a>
                        <!-- The Modal -->
                        <div class="modal" id="order{{ $item->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Order details</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form action="{{ route('admin.order.update', $item->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <select name="order_status" class="form-control">
                                                        <option {{$item->order_status==='Processing' ? 'selected': ''}}
                                                            value="Processing">Processing</option>
                                                        <option {{$item->order_status==='Delivery' ? 'selected': ''}}
                                                            value="Delivery">Delivery</option>
                                                        <option {{$item->order_status==='Cancel' ? 'selected': ''}}
                                                            value="Cancel">Cancel</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-primary w-100" type="submit">Update</button>
                                                </div>
                                            </div>
                                        </form>

                                        <table class="mt-4 table table-bordered">
                                            <thead>
                                                <th>Sl</th>
                                                <th>Name</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                                <th>Img</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($item->cart as $carts_info)
                                                @php
                                                $totalProduct = Json_decode($carts_info->carts)
                                                @endphp
                                                @foreach ($totalProduct as $single_item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{$single_item->name}}</td>
                                                    <td>{{$single_item->qty}}</td>
                                                    <td>{{$single_item->price}}</td>
                                                    <td><img src="{{ asset($single_item->thumb) }}" width="20"
                                                            alt="Img"></td>
                                                </tr>
                                                @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection
