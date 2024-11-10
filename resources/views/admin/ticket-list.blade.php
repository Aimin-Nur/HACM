@extends('layouts.master')
@section('title')
    Datatables
@endsection
@push('css')
    <!-- DataTables -->
    <link href="{{ URL::asset('build/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('build/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('build/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
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
                        <li class="breadcrumb-item active">Ticket List</li>
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
                    <h4 class="card-title">Ticket's Information</h4>
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <span class="badge badge-soft-danger">Not generating yet</span> <b>:</b> <p style="display: inline" class="card-title-desc">User has not generated ticket.
                                </p> <br>
                                <span class="badge badge-soft-success">Already Generated</span> <b>:</b> <p style="display: inline" class="card-title-desc">User has generated ticket.
                                </p> <br>
                            </div>
                            <div class="col-lg-6">
                                <span class="badge badge-soft-success">Already Validate</span> <b>:</b> <p style="display: inline" class="card-title-desc">Ticket has been validated.</p> <br>
                                <span class="badge badge-soft-danger">Unvalidate</span> <b>:</b> <p style="display: inline" class="card-title-desc">Ticket has not been validated.
                                    </p>
                            </div>
                            <p class="card-title mt-4 text-center text-dark"><i>To maintain the authenticity of the ticket, you must validate the ticket first. Find the ticket code on the user ticket and validate it. Ticket validation can only be done if the user has generated a ticket.</i></p>
                        </div>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Generate</th>
                                <th>Validate</th>
                                <th>Update at</th>
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
        $(document).ready(function () {
        $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('ticket-list') }}',
            columns: [
                { data: 'ticket_code', name: 'ticket_code'},
                { data: 'name', name: 'name', searchable:true, orderable:true },
                { data: 'class', name: 'class' },
                { data: 'generate', name: 'generate' },
                { data: 'active', name: 'active' },
                { data: 'update', name: 'update', searchable:false, orderable:true },
                { data: 'action', name: 'action' }
            ],
            order: [[5, 'desc']],
        });
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
