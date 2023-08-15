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
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="breadcrumb-link"><span class="p-1 text-sm text-light bg-success rounded-circle"><i class="fas fa-home"></i></span> Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Slider</li>
                            <a href="{{ route('admin.slider.create') }}" class="btn btn-primary ml-auto">Create slider</a>
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
                        <th>Sl.Num</th>
                        <th>image</th>
                        <th>title</th>
                        <th>link</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                </thead>
              <tbody>
               @foreach ($slider as $item)

               <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('uploads/slider/' .$item->image) }}" width="50" alt="photo">
                </td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->link }}</td>
                <td>
                    @if ($item->status==1)
                    <span class="badge badge-success">Publish</span>
                    @else
                    <span class="badge badge-danger">Unpublish</span>
                    @endif
                </td>

                <td>
                    <a href="#" class=" btn btn-primary">Edit</a>
                    <a href="#" class=" btn btn-danger">Dlete</a>
                </td>
               </tr>

               @endforeach
              </tbody>
            </table>
        </div>
    </div>
    <!-- end -->
</div>
@endsection
