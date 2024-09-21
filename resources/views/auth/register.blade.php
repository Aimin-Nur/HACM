@extends('layouts.master-without-nav')
@section('title')
    Register
@endsection
@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="/" class="text-reset"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-8">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Free Register</h5>
                                <p class="text-white-50 mb-0">Get your free HACM account now</p>
                                <a href="/" class="logo logo-admin mt-4">
                                    <img src="{{ URL::asset('build/images/logo-sm-dark.png') }}" alt="" style="width: 55px">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">

                            <div class="p-2">
                                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" autocomplete="name"
                                            autofocus id="name" placeholder="Enter name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-lg-6">
                                            <label for="email" class="form-label">Email<span
                                                    class="text-danger">*</span></label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('phone_number') }}"  autocomplete="email"
                                                id="email" placeholder="Enter email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3 col-lg-6">
                                            <label for="phone_number" class="form-label">Phone Number <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control @error('number') is-invalid @enderror"
                                                name="phone_number"  autocomplete="+62 *78-xxx-xxx"
                                                id="phone_number" placeholder="Enter your phone number">
                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-lg-4">
                                            <label for="province" class="form-label">Province<span class="text-danger">*</span></label>
                                            <select class="form-control" name="province" id="province" /required>
                                                <option value="">Select Province</option>
                                                @foreach($provinces as $province)
                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3 col-lg-4">
                                            <label for="city" class="form-label">City<span class="text-danger">*</span></label>
                                            <select class="form-control" name="city" id="city" /required>
                                                <option value="">Select City</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-lg-4">
                                            <label for="district" class="form-label">District<span class="text-danger">*</span></label>
                                            <select class="form-control" name="district" id="district" /required>
                                                <option value="">Select District</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Address<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                                                name="address" value="{{ old('email') }}"  autocomplete="+62 *78-xxx-xxx"
                                                id="phone_number" placeholder="Enter your complete Address">
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="roles" class="form-label">Profession<span class="text-danger">*</span></label>
                                        <select class="form-control @error('roles') is-invalid @enderror" name="roles">
                                            <option value="">Select Profession</option>
                                            <option value="Specialist Doctor">Specialist Doctor</option>
                                            <option value="Doctor">Doctor</option>
                                            <option value="Nurse">Nurse</option>
                                            <option value="Student">Student</option>
                                        </select>
                                        @error('roles')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="userpassword" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            name="password" autocomplete="new-password" id="userpassword"
                                            placeholder="Enter password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password-confirm">Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password_confirmation"
                                            id="password-confirm" placeholder="Enter confirm password">
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100 waves-effect waves-light"
                                            type="submit">Register</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">Click here to view the Ticket Purchase <a href="#"
                                                class="text-primary"  data-bs-toggle="modal" data-bs-target="#guidlines">Guidelines</a></p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary">
                                Login</a> </p>
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
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $('#province').on('change', function() {
            let provinceId = $(this).val();
            if (provinceId) {
                $.ajax({
                    url: '{{ route("get.cities") }}',
                    type: 'POST',
                    data: {
                        province_id: provinceId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#city').empty().append('<option value="">Select City</option>');
                        $.each(response, function(key, city) {
                            $('#city').append('<option value="' + city.id + '">' + city.name + '</option>');
                        });
                    }
                });
            } else {
                $('#city').empty().append('<option value="">Select City</option>');
            }
        });

        $('#city').on('change', function() {
            let cityId = $(this).val();
            if (cityId) {
                $.ajax({
                    url: '{{ route("get.districts") }}',
                    type: 'POST',
                    data: {
                        city_id: cityId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#district').empty().append('<option value="">Select District</option>');
                        $.each(response, function(key, district) {
                            $('#district').append('<option value="' + district.id + '">' + district.name + '</option>');
                        });
                    }
                });
            } else {
                $('#district').empty().append('<option value="">Select District</option>');
            }
        });
    });
</script>

@endpush
