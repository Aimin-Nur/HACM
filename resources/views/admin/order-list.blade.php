@extends('layouts.master')
@section('title')
    Datatables
@endsection
@push('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::asset('build/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Order's Information</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Payment</a></li>
                        <li class="breadcrumb-item active">Order ticket</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Order's Information</h4>
                    <div class="mb-4">
                        <span class="badge badge-soft-warning">Pending</span> <b>:</b>
                        <p style="display: inline" class="card-title-desc">Pending status occurs when the user has sent
                            proof of ticket payment and is still waiting for admin payment validation.
                        </p> <br>
                        <span class="badge badge-soft-success">Success</span> <b>:</b>
                        <p style="display: inline" class="card-title-desc">Success status occurs when users have sent proof
                            of payment and the admin has approved the payment.
                        </p> <br>
                        <span class="badge badge-soft-danger">Rejected</span> <b>:</b>
                        <p style="display: inline" class="card-title-desc">Rejected status occurs when users have sent proof
                            of payment and the admin has rejected the payment.
                        </p>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Class</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            @if (Auth::guard('superadmin')->check())
                $('#datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('order-list') }}',
                    columns: [{
                            data: 'NIK',
                            name: 'NIK',
                            searchable: true,
                            orderable: true
                        },
                        {
                            data: 'name',
                            name: 'name',
                            searchable: true,
                            orderable: true
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'class',
                            name: 'class'
                        },
                        {
                            data: 'price',
                            name: 'price'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        }
                    ],
                    order: [
                        [4, 'desc']
                    ],
                });
            @elseif (Auth::guard('admin')->check())
                $('#datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    dom: '<"d-flex justify-content-between align-items-center"<"flex-grow-4"l><"text-center"B><"ml-auto"f>>rt<"d-flex justify-content-between bottom"<"align-self-center"i><"ml-auto pagination p-2 justify-content-end"p>>',
                    lengthMenu: [
                        [10, 25, 50, 100, -1],
                        [10, 25, 50, 100, "All"]
                    ],
                    buttons: [{
                            extend: 'copyHtml5',
                            text: 'Copy',
                            className: 'btn btn-sm btn-success',
                            exportOptions: {
                                columns: ':not(:last-child)'
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            className: 'btn btn-sm btn-primary',
                            exportOptions: {
                                columns: ':not(:last-child)'
                            }
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            className: 'btn btn-sm btn-primary',
                            exportOptions: {
                                columns: ':not(:last-child)'
                            }
                        },
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            className: 'btn btn-sm btn-primary',
                            exportOptions: {
                                columns: ':not(:last-child)'
                            }
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            className: 'btn btn-sm btn-primary',
                            exportOptions: {
                                columns: ':not(:last-child)'
                            }
                        }
                    ],
                    ajax: '{{ route('order-list-admin') }}',
                    columns: [{
                            data: 'NIK',
                            name: 'NIK',
                            searchable: true,
                            orderable: true
                        },
                        {
                            data: 'name',
                            name: 'name',
                            searchable: true,
                            orderable: true
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'class',
                            name: 'class'
                        },
                        {
                            data: 'price',
                            name: 'price'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        }
                    ],
                    order: [
                        [4, 'desc']
                    ],
                });
            @endif
        });
    </script>
    <!-- Required datatable js -->
    <script src="{{ URL::asset('build/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ URL::asset('build/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('build/js/pages/datatables.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
