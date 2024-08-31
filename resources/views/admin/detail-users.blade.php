@extends('layouts.master')
@section('title')
    Profile
@endsection
@section('content')

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Profile</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- start row -->
                <div class="row">
                    <div class="col-md-12 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-widgets py-3">

                                    <div class="text-center">
                                        <div class="">
                                            <img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt=""
                                                class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                            <div class="online-circle"><i class="fas fa-circle text-success"></i>
                                            </div>
                                        </div>

                                        <div class="mt-3 ">
                                            <a href="#" class="text-reset fw-medium font-size-16">{{$detail->name ?? ''}}</a>
                                            <p class="text-body mt-1 mb-1">UI/UX Designer</p>

                                            @if ($detail->active == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Not Active</span>
                                            @endif
                                        </div>

                                        <div class="row mt-4 border border-start-0 border-end-0 p-3">
                                            <div class="col-md-4">
                                                <h6 class="text-muted">
                                                    Province
                                                </h6>
                                                <h5 class="mb-0">{{$detail->provinsi}}</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <h6 class="text-muted">
                                                    City
                                                </h6>
                                                <h5 class="mb-0">{{$detail->kota}}</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <h6 class="text-muted">
                                                    District
                                                </h6>
                                                <h5 class="mb-0">{{$detail->kecamatan}}</h5>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Address Information</h5>

                                            <p class="card-title-desc">
                                                {{$detail->address}}
                                            </p>

                                            <div class="mt-3">
                                                <p class="font-size-12 text-muted mb-1">Email Address</p>
                                                <h6 class="">{{$detail->email}}</h6>
                                            </div>

                                            <div class="mt-3">
                                                <p class="font-size-12 text-muted mb-1">Phone number</p>
                                                <h6 class="">{{$detail->phone_number}}</h6>
                                            </div>

                                            <div class="mt-3">
                                                <p class="font-size-12 text-muted mb-1">Creted Account At</p>
                                                <h6 class="">{{$detail->created_at}}</h6>
                                            </div>

                                        </div>

                                        <div class="mt-4">

                                            <ui class="list-inline social-source-list">
                                                <li class="list-inline-item">
                                                    @if ($detail->active == 1)
                                                        <button type="button" class="btn btn-warning waves-effect waves-light">
                                                            <i class="bx bx-error font-size-16 align-middle me-2"></i> Turn off user account
                                                        </button>
                                                    @else
                                                        <button type="button" class="btn btn-success waves-effect waves-light">
                                                            <i class="bx bx-check-double font-size-16 align-middle me-2"></i> Turn On user account
                                                        </button>
                                                    @endif
                                                </li>
                                            </ui>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-body">

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#experience" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">Experience</span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane active" id="experience" role="tabpanel">
                                        <div class="timeline-count mt-5">
                                            <!-- Timeline row Start -->
                                            <div class="row">


                                            </div>
                                            <!-- Timeline row Over -->

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
<script src="{{ URL::asset('build/js/pages/profile.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
