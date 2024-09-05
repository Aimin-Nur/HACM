@extends('layouts.master')
@section('title')
    Order Ticket
@endsection
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
                                            <h4 class="card-title mb-5">General Questions</h4>
                                            @foreach ($getOrderUser as $item)
                                            @if ($item->status == 1)
                                            <div class="faq-box d-flex align-items-start mb-4">
                                                <div class="faq-icon me-3">
                                                    <i class="bx bx-help-circle font-size-20 text-success"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h5 class="font-size-15">Your payment has been successfully validated by the Admin</h5>
                                                    <p class="text-muted">Your payment has been successfully validated by admin. Thank you for your transaction! Please Generate your ticket <a href="">here</a>.</p>
                                                </div>
                                            </div>
                                            @elseif ($item->status == NULL)
                                            <div class="faq-box d-flex align-items-start mb-4">
                                                <div class="faq-icon me-3">
                                                    <i class="bx bx-help-circle font-size-20 text-warning"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h5 class="font-size-15">Your payment is still waiting for Admin validation</h5>
                                                    <p class="text-muted">Your payment is currently awaiting validation from the admin. Please be patient, and we will notify you as soon as the validation process is complete. Please check your email address periodically</p>
                                                </div>
                                            </div>
                                            @endif
                                            <div class="faq-box d-flex align-items-start mb-4">
                                                <div class="faq-icon me-3">
                                                    <i class="bx bx-help-circle font-size-20 text-danger"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h5 class="font-size-15">Your payment was rejected by the Admin</h5>
                                                    <p class="text-muted">Sorry, your payment has been declined by admin. Please check your payment details or contact our team for more information.</p>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel"
                                            aria-labelledby="v-pills-privacy-tab">
                                            <h4 class="card-title mb-2">Your Ticket</h4>
                                            <p class="card-title-desc">For quoting blocks of content from another source
                                                within
                                                your document. Wrap <code class="highlighter-rouge">&lt;blockquote
                                                    class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as
                                                the quote.</p>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card card-body">
                                                        <h3 class="card-title mt-0">Special title treatment</h3>
                                                        <p class="card-text">With supporting text below as a natural lead-in to additional
                                                            content.
                                                        </p>
                                                        <a href="#" class="btn btn-primary waves-effect waves-light">Go somewhere</a>
                                                    </div>
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
                    <script src="{{ URL::asset('build/js/app.js') }}"></script>
                @endpush
