@extends('layouts.master-without-nav')
@section('title')
    Maintenance
@endsection
@section('content')
    <section class="my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="home-wrapper">
                        <div class="mb-5">
                            <img src="{{ URL::asset('build/images/logo-sm-dark.png') }}" alt="logo" height="34" />
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-sm-4">
                                <div class="maintenance-img">
                                    <img src="{{ URL::asset('build/images/maintenance.png') }}" alt=""
                                        class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                        <h3 class="mt-5">Site is Under Maintenance</h3>
                        <p>We are currently performing maintenance and upgrades to enhance your experience.
                            <br> We will be back shortly. Thank you for your patience.</p>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <h5 class="font-size-15 text-uppercase">Why is the Site Down?</h5>
                                        <p class="text-muted mb-0">We are conducting routine maintenance and performance upgrades to ensure better service for you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <h5 class="font-size-15 text-uppercase">
                                            How Long Will the Downtime Last?</h5>
                                        <p class="text-muted mb-0">The estimated maintenance time will be completed within the next few hours. We will strive to finish as quickly as possible.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card mt-4 maintenance-box">
                                    <div class="card-body">
                                        <h5 class="font-size-15 text-uppercase">
                                            Need Support?</h5>
                                        <p class="text-muted mb-0">If you have any questions or need immediate assistance, please contact us at <a
                                                href="mailto:projectwebfinal@gmail.com">projectwebfinal@gmail.com</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
