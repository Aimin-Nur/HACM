@extends('layouts.master-without-nav')
@section('title')
    Register
@endsection
@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="/index" class="text-reset"><i class="fas fa-home h2"></i></a>
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
                                <p class="text-white-50 mb-0">Get your free Qovex account now</p>
                                <a href="/index" class="logo logo-admin mt-4">
                                    <img src="{{ URL::asset('build/images/logo-sm-dark.png') }}" alt=""
                                        height="30">
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
                                            <select class="form-control" name="province" id="province">
                                                <option value="">Select Province</option>
                                                @foreach($provinces as $province)
                                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3 col-lg-4">
                                            <label for="city" class="form-label">City<span class="text-danger">*</span></label>
                                            <select class="form-control" name="city" id="city">
                                                <option value="">Select City</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-lg-4">
                                            <label for="district" class="form-label">District<span class="text-danger">*</span></label>
                                            <select class="form-control" name="district" id="district">
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
                                        <p class="mb-0">By registering you agree to the Skote <a href="#"
                                                class="text-primary">Terms of Use</a></p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary">
                                Login</a> </p>
                        <p>©
                            {{ date('Y') }} Qovex. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                        </p>
                    </div>

                </div>
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
