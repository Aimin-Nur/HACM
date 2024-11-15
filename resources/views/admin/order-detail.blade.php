@extends('layouts.master')
@section('title')
    Order Detail
@endsection
@section('content')

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Order Detail</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Payment</a></li>
                                    <li class="breadcrumb-item active">Order Detail</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="invoice-title">
                                    <div class="mb-4">
                                       <h5>{{$getOrderId->kelas->class_name ?? '' }} Class</h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6 mt-3">
                                        <address>
                                            <strong>User Information:</strong><br>
                                            Name : {{$getOrderId->user->name ?? ''}}<br>
                                            NIK : {{$getOrderId->user->NIK ?? ''}}<br>
                                            Email : {{$getOrderId->user->email ?? ''}} <br>
                                            Phone Number : {{$getOrderId->user->phone_number ?? ''}}
                                        </address>
                                    </div>
                                    <div class="col-6 mt-3 text-end">
                                        <address>
                                            <strong>Order Date:</strong><br>
                                            {{ \Carbon\Carbon::parse($getOrderId->created_at)->format('M d, Y') ?? 'NULL'}}
                                            <br><br>
                                        </address>
                                    </div>
                                </div>
                                <div class="py-2 mt-3">
                                    <h3 class="font-size-15 fw-bold">Payment Proof</h3>
                                    <img src="{{ asset('storage/payments/' . $getOrderId->payment_proof) }}" alt="payment proof image" class="img-fluid border-radius-lg shadow-sm" style="width: 300px">
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-nowrap">
                                        <tbody>
                                            <tr>
                                                <td colspan="2" class="border-0 text-end">
                                                    <strong>Total</strong>
                                                </td>
                                                <td class="border-0 text-end">
                                                    <h4 class="m-0">Rp. {{$getOrderId->formatted_price ?? 'NULL'}}</h4>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-print-none">
                                    <div class="float-end">
                                        @if ($getOrderId->status == 1)
                                        <p class="me-3" style="display: inline"><strong><i>You have validated this order on the date {{ \Carbon\Carbon::parse($getOrderId->updated_at)->format('M d, Y') ?? 'NULL'}}</i></strong></p>
                                        <button type="button" class="btn btn-outline-primary" disabled>Already Validated</button>
                                        @elseif ($getOrderId->status == NULL)
                                        <a data-bs-toggle="modal" data-bs-target="#rejectedModalScrollable{{$getOrderId->id}}" class="btn btn-danger w-md waves-effect waves-light">Rejected Payment</a>
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModalScrollable{{$getOrderId->id}}" class="btn btn-primary w-md waves-effect waves-light">Accepted Payment</a>
                                        @else
                                        <p class="me-3" style="display: inline"><strong><i>You have rejected this order on the date{{ \Carbon\Carbon::parse($getOrderId->updated_at)->format('M d, Y') ?? 'NULL'}}</i></strong></p>
                                        <button type="button" class="btn btn-outline-danger w-md waves-effect waves-light" disabled>Already Rejected</button>
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModalScrollable{{$getOrderId->id}}" class="btn btn-primary w-md waves-effect waves-light">Accepted Payment</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="modal fade bs-example-modal-center" id="exampleModalScrollable{{$getOrderId->id}}" tabindex="-1" role="dialog"
                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0">Payment Validation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('edit-payment', ['id' => $getOrderId->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="1" name="status">
                                <h4 class="text-center">
                                    Are you sure to validate this payment?
                                </h4>
                                <p class="text-center">This action will allow users to generate tickets and the user's payment will be declared successful.</p>
                                <div class="modal-footer align-items-center">
                                    <button type="button" class="btn btn-danger waves-effect waves-light">
                                        <i class="bx bx-block font-size-16 align-middle me-3"></i> Danger
                                    </button>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">
                                        <i class="bx bx-check-double font-size-16 align-middle me-3"></i> Success
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-accepted -->
                </div>

                <div class="modal fade bs-example-modal-center" id="rejectedModalScrollable{{$getOrderId->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Payment Rejected</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('rejected-payment', ['id' => $getOrderId->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="0" name="status">
                                    <h4 class="text-center">
                                        Are you sure to rejected this payment?
                                    </h4>
                                    <p class="text-center mt-3">This action will reject the user's payment and the user will not be able to generate a ticket.</p>
                                    <div class="modal-footer align-items-center">
                                        <button type="button" class="btn btn-danger waves-effect waves-light">
                                            <i class="bx bx-block font-size-16 align-middle me-3"></i> Close
                                        </button>
                                        <button type="submit" class="btn btn-success waves-effect waves-light">
                                            <i class="bx bx-check-double font-size-16 align-middle me-3"></i> Yes, Rejected Payment
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-accepted -->
                </div>

                @endsection
                @push('script')
                    <script src="{{ URL::asset('build/js/app.js') }}"></script>
                @endpush
