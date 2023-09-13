@extends('admin::layouts.app')
@push('css-style')
    <link rel="stylesheet" href="{{ asset('/') }}admin/plugins/sweet-alert/sweetalert.min.css">
@endpush
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin-panel') }}">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
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
                        <a href="{{ route('admin.create') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> {{ __('Add New') }}
                        </a>
                    </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="my-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>name</th>
                                <th>email</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $index => $admin)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>


                                    <td>
                                        <ul class="list-inline m-0">
                                            <li class="list-inline-item">
                                                <button
                                                    onclick="window.location='{{ route('admin.edit', $admin->id) }}'"
                                                    class="btn btn-success btn-sm rounded-0" type="button"
                                                    data-toggle="tooltip" data-placement="top" title="Edit"><i
                                                        class="fa fa-edit"></i></button>
                                            </li>
                                            <li class="list-inline-item">
                                                <form action="{{ route('admin.destroy', $admin->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm rounded-0" type="submit"
                                                        data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                            onclick="return confirm('Are you sure to delete?')"
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
                                <th>#</th>
                                <th>name</th>
                                <th>email</th>
                                <th>actions</th>
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
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('/') }}admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('/') }}admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('/') }}admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('/') }}admin/plugins/sweet-alert/sweetalert2.all.min.js"></script>

    @if (session()->has('success'))
        <script>
            $(function() {
                Swal.fire(
                    'Good job!',
                    '{{ session('success') }}',
                    'success'
                );
            });
        </script>
    @endif

    <script>
        $(function() {
            $('#my-table').DataTable({
                "responsive": true,
                "autoWidth": false,
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
            });
        });
    </script>
@endpush
