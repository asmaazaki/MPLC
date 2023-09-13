@extends('admin::layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Setting</li>
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
                            <h3 class="card-title">Edit Setting</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.setting.update', $setting->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName1">key</label>
                                    <input name="key" value="{{ $setting->key }}" type="text"
                                        class="form-control" id="exampleInputName1" placeholder="Enter setting key">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input name="title" value="{{ $setting->title }}" type="text"
                                        class="form-control" id="exampleInputEmail1" placeholder="Enter setting title">
                                </div>
                                @if($setting->input_type == 'file')
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Choose file</label>
                                        <input name="value" type="file" class="form-control-file"
                                            id="exampleFormControlFile1">
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Value</label>
                                        <input name="value" value="{{ $setting->value }}" type="{{ $setting->input_type }}"
                                            class="form-control" id="exampleInputEmail1" placeholder="Enter setting value">
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Extra Data</label>
                                    <textarea name="extra_data" cols="30" rows="5" value="{{ $setting->extra_data }}"  class="form-control" id="exampleInputEmail1">

                                    </textarea>
                                </div>
                                <!-- /.card-body -->
                                <button type="submit" class="btn btn-primary">Submit</button>
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
