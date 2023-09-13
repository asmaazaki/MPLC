@extends('admin::layouts.app')

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
                    <h1>Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <div class="card card-danger card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-setting-tab" data-toggle="pill"
                                        href="#custom-tabs-setting" role="tab" aria-controls="custom-tabs-setting"
                                        aria-selected="true">Setting</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-seo-tab" data-toggle="pill" href="#custom-tabs-seo"
                                        role="tab" aria-controls="custom-tabs-seo" aria-selected="false">SEO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-contact-info-tab" data-toggle="pill"
                                        href="#custom-tabs-contact-info" role="tab"
                                        aria-controls="custom-tabs-contact-info" aria-selected="false">Contact Info</a>
                                </li>
                            </ul>
                        </div>

                        <form action="{{ route('admin.setting.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-three-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-setting" role="tabpanel"
                                        aria-labelledby="custom-tabs-setting-tab">
                                        <div class="container">
                                            @foreach ($settings['setting'] as $setting)
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputTitleAr">{{ $setting->title }}</label>
                                                        @if ($setting->input_type == 'file')
                                                            <input name="settings[{{ $setting->key }}]" type="file"
                                                                class="form-control-file" id="exampleFormControlFile1">
                                                        @else
                                                            <input name="settings[{{ $setting->key }}]"
                                                                type="{{ $setting->input_type }}"
                                                                value="{{ $setting->value }}" class="form-control"
                                                                id="exampleInputTitleAr">
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-seo" role="tabpanel"
                                        aria-labelledby="custom-tabs-seo-tab">
                                        <div class="container">
                                            @foreach ($settings['seo'] as $setting)
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputTitleAr">{{ $setting->title }}</label>
                                                        @if ($setting->input_type == 'file')
                                                            <input name="settings[{{ $setting->key }}]" type="file"
                                                                class="form-control-file" id="exampleFormControlFile1">
                                                        @else
                                                            <input name="settings[{{ $setting->key }}]"
                                                                type="{{ $setting->input_type }}"
                                                                value="{{ $setting->value }}" class="form-control"
                                                                id="exampleInputTitleAr">
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-contact-info" role="tabpanel"
                                        aria-labelledby="custom-tabs-contact-info-tab">
                                        <div class="container">
                                            @foreach ($settings['contact_info'] as $setting)
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputTitleAr">{{ $setting->title }}</label>
                                                        @if ($setting->input_type == 'file')
                                                            <input name="settings[{{ $setting->key }}]" type="file"
                                                                class="form-control-file" id="exampleFormControlFile1">
                                                        @else
                                                            <input name="settings[{{ $setting->key }}]"
                                                                type="{{ $setting->input_type }}"
                                                                value="{{ $setting->value }}" class="form-control"
                                                                id="exampleInputTitleAr">
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <button class="btn btn-primary" type="submit"
                                                    id="submit">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
