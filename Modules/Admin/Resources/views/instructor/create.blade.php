@extends('admin::layouts.app')
@push('css-style')
    @include('admin::partials.common_create_css')
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            @if ($errors->any())
                <div class="alert alert-warning">
                    <p>{{ $errors->first() }}</p>
                </div>
            @endif
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>New Instructor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">New Instructor</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Add New Instructor</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('instructor.store') }}" method="POST" id="my-form">
                            @csrf
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group col-md-10">
                                            <label for="exampleInputName1">name</label>
                                            <input name="name" type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Enter name" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <div class="form-group col-md-10">
                                            <label for="exampleInputName1">phone number</label>
                                            <input name="phone" type="number" class="form-control"
                                                id="exampleInputphone1" placeholder="Enter phone"
                                                value="{{ old('phone') }}">
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
@push('js')
    @include('admin::partials.common_create_js')
@endpush
