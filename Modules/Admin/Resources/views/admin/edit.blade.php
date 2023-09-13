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
                    <h1>Edit User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
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
                            <h3 class="card-title">Edit New User</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.update',$admin->id) }}" method="POST" id="my-form">
                            @csrf
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group col-md-10">
                                            <label for="exampleInputName1">name</label>
                                            <input name="name" type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Enter name" value="{{ $admin->name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group col-md-10">
                                            <label for="exampleInputName1">email</label>
                                            <input name="email" type="email" class="form-control"
                                                id="exampleInputaddresss" placeholder="Enter address"
                                                value="{{ $admin->email }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="form-group col-md-10">
                                            <label for="exampleInputName1"> password</label>
                                            <input name="password" type="password" class="form-control" id="exampleInputphone"
                                                placeholder="Enter phone" value="{{ old('password') }}">
                                        </div>
                                    </div>
                                </div>

                                @foreach ($permissions as $permission)
                                    <div style="display: inline" class="mr-2">
                                        <label for="">{{ $permission->name }}</label>
                                        <input value="{{ $permission->name }}" {{ $admin->hasPermissionTo($permission) ? 'checked' : '' }} type="checkbox" name="permission[]" class="" id="">
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
