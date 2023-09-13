@extends('admin::layouts.app')
@push('css-style')
    <link rel="stylesheet" href="{{ asset('/') }}admin/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
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
                    <h1>New User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">New User</li>
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
                            <h3 class="card-title">Add New User</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.store') }}" method="POST" id="my-form">
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
                                            <label for="exampleInputName1">email</label>
                                            <input name="email" type="email" class="form-control"
                                                id="exampleInputaddresss" placeholder="Enter Email"
                                                value="{{ old('email') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group col-md-10">
                                            <label for="exampleInputName1"> password</label>
                                            <input name="password" type="password" class="form-control"
                                                id="exampleInputphone" placeholder="Enter Password"
                                                value="{{ old('password') }}">
                                        </div>
                                    </div>
                                </div>

                                <label style="display: block" for="">permissions</label>
                                @foreach ($permissions as $permission)
                                    <div style="display: inline" class="mr-2">
                                        <label for="">{{ $permission->name }}</label>
                                        <input type="checkbox" value="{{ $permission->name }}" name="permission[]"
                                            class="" id="">
                                    </div>
                                @endforeach


                                <br>
                                <div class="container">
                                    <div class="row">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
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
    <script src="{{ asset('/') }}admin/plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('/') }}admin/plugins/jquery-validation/jquery.validate.min.js"></script>
@endpush
