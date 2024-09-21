@extends('layouts.master-without-nav')
@section('title')
    Login
@endsection
@push('css')
    <link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="/" class="text-reset"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Welcome Back !</h5>
                                <p class="text-white-50 mb-0">Sign in to continue to HACM.</p>
                                <a href="/" class="logo logo-admin mt-4">
                                    <img src="{{ URL::asset('build/images/logo-sm-dark.png') }}" alt=""
                                        height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">
                            <div class="p-2">
                                @if(session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-check-all me-2"></i> {{ session('status') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email <span class="text-danger">*
                                            </span></label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" required
                                            autocomplete="email" autofocus placeholder="Enter your email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password <span class="text-danger">*
                                            </span></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="userpassword" name="password" required
                                            autocomplete="current-password" placeholder="Enter your password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="customControlInline"
                                            name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="customControlInline">Remember
                                            me</label>
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log
                                            In</button>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <div class="mt-4 text-center">
                                             <a href="#" id="sa-title" class="text-muted"><i
                                                    class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                            {{-- <a href="{{ route('password.request') }}" id="sa-title" class="text-muted"><i
                                                    class="mdi mdi-lock me-1"></i> Forgot your password?</a> --}}
                                        </div>
                                    @endif
                                </form>

                                <div class="mt-4 text-center">
                                    <p class="mb-0">Click here to view the Ticket Purchase <a href="#"
                                            class="text-primary"  data-bs-toggle="modal" data-bs-target="#guidlines">Guidelines</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Don't have an account ? <a href="{{ route('register') }}" class="fw-medium text-primary"> Signup
                                now </a> </p>
                        <p>©
                            {{ date('Y') }} HACM Gorontalo. Develop by <a href="https://aiminnur.vercel.app/home" target="_blank">Aiminnur</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- guidelines modal content -->
    <div id="guidlines" class="modal fade" tabindex="-1" role="dialog"
    data-bs-toggle="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Ticket Purchase Guidelines</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 class="font-size-16 text-center fw-bold">Ticket Purchase Procedure</h5>
                <br>

                <span class="mt-2"><strong>1. User Account Registration</strong></span>
                <p>
                    a. Users must register an account through the provided registration page.<br>
                    b. Ensure that the information, especially the email address, is accurate and active.<br>
                    c. It is crucial that users use an active email address during the registration process.<br>
                </p>

                <span><strong>2. Selecting a Ticket</strong></span>
                <p>
                    a. Users can choose their desired ticket from the ticket purchase page.<br>
                    b. Click the "Buy Tickets" button to proceed to the purchase process.<br>
                    c. Users will be directed to the payment details page.
                </p>

                <span><strong>3. Uploading Payment Proof</strong></span>
                <p>
                    a. After making the payment, users must upload their payment proof through the designated upload page.<br>
                    b. Ensure that the payment proof is clear and matches the provided payment details.
                </p>

                <span><strong>4. Waiting for Payment Validation</strong></span>
                <p>
                    a. Once the payment proof is uploaded, the system will process the payment validation by the admin.<br>
                    b. The validation process may take up to 2 x 24 hours.<br>
                    c. Users will receive an email notification about the payment validation status.
                </p>

                <span><strong>5. Receiving Payment Notification</strong></span>
                <p>
                    a. Users will receive an email notification regarding the payment status after validation by the admin.<br>
                    b. If the payment is validated, users will be provided with a link to generate their ticket.
                </p>

                <span><strong>6. Generating the Ticket</strong></span>
                <p>
                    a. After receiving the notification that the payment has been validated, users can generate their ticket through the link provided in the email.<br>
                    b. The generated ticket can be downloaded and used according to the applicable terms.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>


    <!-- /.modal-dialog -->
@endsection
@push('script')
    <!-- Sweet Alerts js -->
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>

    <script>
        $('#sa-title').click(function () {
                Swal.fire(
                    {
                        title: "Forgot Password is waiting for activate",
                        text: 'Soory, this feature is still in the administators hand, please contact the developer to activate it.',
                        type: 'warning',
                        confirmButtonColor: '#3b5de7'
                    }
                )
            });
    </script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
