@extends('admin::layouts.app')
@push('css-style')
    @include('admin::partials.common_index_css')
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Instructors</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin-panel') }}">Home</a></li>
                        <li class="breadcrumb-item active">Instructors</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-danger card-outline">
                <div class="card-header">
                    <div class="card-tools">
                        <a href="{{ route('instructor.create') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> {{ __('Add New') }}
                        </a>


                    </div>
                </div>


                <!-- /.card-header -->
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($instructors as $index => $instructor)
                                <tr>
                                    <td>{{ $instructor->name }}</td>
                                    <td>{{ $instructor->phone }}</td>

                                    <td>
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item">
                                                <button
                                                    onclick="window.location='{{ route('instructor.edit', $instructor->id) }}'"
                                                    class="btn btn-success btn-sm rounded-0" type="button"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                        class="fa fa-edit"></i></button>
                                            </li>
                                            <li class="list-inline-item">
                                                <form action="{{ route('instructor.delete', $instructor->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm rounded-0" type="submit"
                                                        data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
@endsection

@push('js')
    @include('admin::partials.common_index_js')


@endpush
