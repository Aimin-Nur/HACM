@extends('layouts.master')
@section('title')
    Order Ticket
@endsection
@push('css')
    <!-- Sweet Alert-->
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
                <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="page-title mb-0 font-size-18">Order Ticket</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">FAQS</li>
               </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="checkout-tabs">
    <div class="row">
        <div class="col-lg-2">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-gen-ques-tab" data-bs-toggle="pill"
                    href="#v-pills-gen-ques" role="tab" aria-controls="v-pills-gen-ques"
                    aria-selected="true">
                    <i class="bx bx-cart d-block check-nav-icon mt-4 mb-2"></i>
                    <p class="fw-bold mb-4">Order</p>
                </a>
                <a class="nav-link" id="v-pills-privacy-tab" data-bs-toggle="pill"
                    href="#v-pills-privacy" role="tab" aria-controls="v-pills-privacy"
                    aria-selected="false">
                    <i class="bx bxs-discount d-block check-nav-icon mt-4 mb-2"></i>
                    <p class="fw-bold mb-4">Ticket</p>
                </a>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-gen-ques" role="tabpanel"
                            aria-labelledby="v-pills-gen-ques-tab">
                            <h4 class="card-title mb-5">Your Order's Status</h4>
                            @if ($getOrderUser->isEmpty())
                            <div class="home-wrapper">
                                <div class="row justify-content-center">
                                    <div class="col-sm-4">
                                        <div class="maintenance-img">
                                            <img src="{{ URL::asset('build/images/empty.png') }}" alt=""
                                                class="img-fluid mx-auto d-block">
                                        </div>
                                    </div>
                                </div>
                                <h3 class="mt-5 text-center">You don't have a ticket to generate</h3>
                                <p class="text-center">If several languages coalesce, the grammar of the resulting language is more simple and
                                    <br> regular than that of the individual languages.
                                </p>

                                </div>
                                <!-- end row -->
                            </div>
                            @else
                            @foreach ($getOrderUser as $item)
                            @if ($item->status == 1)
                            <hr>
                            <div class="faq-box d-flex align-items-start mb-2">
                                <div class="faq-icon me-3">
                                    <i class="bx bx-badge-check font-size-20 text-success"></i>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-size-15">Your Class Payment <b>"{{$item->kelas->class_name}}"</b> has been successfully validated by the Admin <span style="display: inline-block" class="badge badge-soft-success mb-2">Success</span></h5>
                                    <p class="text-muted">Your payment has been successfully validated by admin. Thank you for your transaction! Please Generate your ticket <a href="">here</a>.</p>
                                </div>
                            </div>
                            <hr>
                            @elseif ($item->status == NULL)
                            <hr>
                            <div class="faq-box d-flex align-items-start mb-2">
                                <div class="faq-icon me-3">
                                    <i class="bx bx-time-five font-size-20 text-warning"></i>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-size-15">Your Class Payment  <b>"{{$item->kelas->class_name}}"</b> is still waiting for Admin validation  <span style="display: inline-block" class="badge badge-soft-warning mb-2">Pending</span></h5>
                                    <p class="text-muted">Your payment is currently awaiting validation from the admin. Please be patient, and we will notify you as soon as the validation process is complete. Please check your email address periodically</p>
                                </div>
                            </div>
                            <hr>
                            @else
                            <hr>
                            <div class="faq-box d-flex align-items-start mb-2">
                                <div class="faq-icon me-3">
                                    <i class="bx bx-x-circle font-size-20 text-danger"></i>
                                </div>
                                <div class="flex-1">
                                    <h5 class="font-size-15">Your Class Payment  <b>"{{$item->kelas->class_name}}"</b> was rejected by the Admin <span style="display: inline-block" class="badge badge-soft-danger mb-2">Rejected</span></h5></h5>
                                    <p class="text-muted">Sorry, your payment has been declined by admin. Please check your payment details or contact our team for more information.</p>
                                </div>
                            </div>
                            <hr>
                            @endif
                            @endforeach
                            @endif
                        </div>
                        <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel"
                            aria-labelledby="v-pills-privacy-tab">
                            <h4 class="card-title mb-2">Generate Ticket</h4>
                            <p class="card-title-desc">Please generate a ticket if your payment has been approved by the Admin.</p>

                            <div class="row">
                                <div class="col-lg-12">
                                    @if ($getTicketUser->isEmpty())
                                    <div class="home-wrapper">
                                        <div class="row justify-content-center">
                                            <div class="col-sm-4">
                                                <div class="maintenance-img">
                                                    <img src="{{ URL::asset('build/images/empty.png') }}" alt=""
                                                        class="img-fluid mx-auto d-block">
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="mt-5 text-center">You don't have a ticket to generate</h3>
                                        <p class="text-center">If several languages coalesce, the grammar of the resulting language is more simple and
                                            <br> regular than that of the individual languages.
                                        </p>

                                        </div>
                                        <!-- end row -->
                                    </div>
                                    @else
                                    <div class="card card-body mb-2">
                                        @foreach ($getTicketUser as $item)
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <h3 class="card-title mt-4">Special title treatment</h3>
                                                <p class="card-text">WYou currently do not have any tickets to generate. Contact Admin if you think this message is wrong.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="maintenance-img mb-2" style="display: inline">
                                                    <img src="{{ URL::asset('build/images/ticket.png') }}" alt=""
                                                        class="img-fluid mx-auto d-block" style="width: 150px">
                                                </div>
                                            </div>
                                            @if ($item->generate_ticket == 0)
                                            <a data-ticket-id="{{ $item->id }}" class="generate-ticket btn btn-primary waves-effect waves-light mt-2">
                                                Generate Ticket
                                            </a>
                                            @else
                                            <button type="button" class="btn btn-outline-primary" disabled>Your ticket has been generate at : {{$item->updated_at}}</button>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->





@endsection
@push('script')
<!-- Sweet Alerts js -->
<script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<!-- Sweet alert init js-->
<script src="{{ URL::asset('build/js/pages/sweet-alerts.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.generate-ticket').click(function(event) {
            event.preventDefault();
            const ticketId = $(this).data('ticket-id');

            Swal.fire({
                title: "Are you sure?",
                text: "You can only generate this ticket once.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                confirmButtonText: "Yes, generate ticket!"
            }).then(function(result) {
                if (result.value) {
                    Swal.fire("Success!", "Please Click 'Ok' for download your ticket.", "success").then(() => {
                        let url = "{{ route('ticket-generate', ':id') }}";
                        url = url.replace(':id', ticketId);
                        window.location.href = url;
                    });
                }
            });
        });
    });
</script>
@endpush
