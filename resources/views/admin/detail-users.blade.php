@extends('layouts.master')
@section('title')
    User Profile
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
                                    <li class="breadcrumb-item active">User Profile</li>
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
                                        <div class="mt-3 ">
                                            <a href="#" class="text-reset fw-medium font-size-20">{{$detail->name ?? ''}}</a>
                                            <p class="text-body mt-1 mb-1">{{$detail->email}}</p>

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
                                                <h5 class="mb-0">{{$detail->province->name ?? '-'}}</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <h6 class="text-muted">
                                                    City
                                                </h6>
                                                <h5 class="mb-0">{{$detail->regency->name ?? '-'}}</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <h6 class="text-muted">
                                                    District
                                                </h6>
                                                <h5 class="mb-0">{{$detail->district->name ?? '-'}}</h5>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <h5 class="card-title mb-3">Address Information</h5>

                                            <p class="card-title-desc">
                                                {{$detail->address}}
                                            </p>

                                            <div class="mt-3">
                                                <p class="font-size-12 text-muted mb-1">Email Address</p>
                                                <h6 class=""><a href="mailto:{{$detail->email}}">{{$detail->email}}</a></h6>
                                            </div>

                                            <div class="mt-3">
                                                <p class="font-size-12 text-muted mb-1">Phone number</p>
                                                <h6 class="">{{$detail->phone_number}}</h6>
                                            </div>

                                            <div class="mt-3">
                                                <p class="font-size-12 text-muted mb-1">Creted Account At</p>
                                                <h6 class="">{{ \Carbon\Carbon::parse($detail->created_at)->format('M d, Y') }}
                                                </h6>
                                            </div>

                                        </div>

                                        <div class="mt-4">

                                            <ui class="list-inline social-source-list">
                                                <li class="list-inline-item">
                                                    @if ($detail->active == 1)
                                                        <button type="button" class="btn btn-warning waves-effect waves-light" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{$detail->id}}" data-bs-whatever="@getbootstrap">
                                                            <i class="bx bx-error font-size-16 align-middle me-2"></i> Turn off user account
                                                        </button>
                                                    @else
                                                        <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal{{$detail->id}}" data-bs-whatever="@getbootstrap">
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



                </div>

                <!-- end row -->

                <div class="modal fade" id="exampleModal{{$detail->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Status</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('update-user', ['id' => $detail->id]) }}">
                                    @csrf
                                    @if ($detail->active === 1)
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">This Action Will Make the User Account Inactive</label>
                                        <input type="hidden" value="0" name="is_active">
                                    </div>
                                    @else
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">This Action Will Make the User Account Actice</label>
                                        <input type="hidden" value="1" name="is_active">
                                    </div>
                                    @endif
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Change Status</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!--end modal-->


@endsection
@push('script')
<script src="{{ URL::asset('build/js/pages/profile.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
