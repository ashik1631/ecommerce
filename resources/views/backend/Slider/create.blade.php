@extends('layouts.backend')

@section('content')
<div class="container-fluname">
    <!-- breadcame start -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" class="breadcrumb-link"><span class="p-1 text-sm text-light bg-success rounded-circle"><i class="fas fa-home"></i></span> Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create slider</li>
                            <a href="{{ route('admin.slider.index') }}" class="btn btn-primary ml-auto">Back</a>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="basic_form my-4">
                <div class="content_section">
                    <h5>Create Slider Form</h5>
                    <hr>

                    @include('layouts.message')

                    <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Enter your title">
                        </div>
                        <div class="form-group">
                            <label for="link">link</label>
                            <input type="text" name="link" value="{{ old('link') }}" class="form-control" placeholder="Enter your link">
                            <div class="form-group">
                                <label for="status">status</label>
                               <select name="status" class="form-control">
                                <option {{ old('status')==1 ? 'selected': ''}} value="1">publish</option>
                                <option {{ old('status')==0 ? 'selected': ''}} value="0">unpublish</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="image">image</label>
                                <input type="file" name="image" class="form-control" placeholder="select your image">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
