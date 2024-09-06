@extends('layouts.master')
@section('title')
    Class
@endsection
@push('css')
    <!-- Plugins css -->
    <link href="{{ URL::asset('build/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-start align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Class</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Class</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center mb-5">
                            <h4>Choose your Pricing plan</h4>
                            <p class="text-muted">To achieve this, it would be necessary to have uniform grammar,
                                pronunciation and more common words If several languages coalesce</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($getClass as $item)
                    <div class="col-xl-3 col-md-6">
                        <div class="card plan-box">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start">
                                    <div class="flex-1 me-3">
                                        <h6>{{$item->class_name}}</h6>
                                        <p class="text-muted">Lorem, ipsum dolor.</p>
                                    </div>
                                    <div class="ms-auto">
                                        <i class="bx bx-walk h1 text-primary"></i>
                                    </div>
                                </div>
                                <div class="py-4 mt-4 text-center bg-soft-light">
                                    <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->price}}/ <span class="font-size-13">Per
                                            month</span></h1>
                                </div>

                                <div class="plan-features p-4 text-muted mt-2">
                                    <p><i class="mdi mdi-check-bold text-primary me-4"></i>Unlimited access to
                                        licence</p>
                                    <p><i class="mdi mdi-check-bold text-primary me-4"></i>GB Storage</p>
                                    <p><i class="mdi mdi-check-bold text-primary me-4"></i>No Domain</p>
                                    <p><i class="mdi mdi-check-bold text-primary me-4"></i>SEO optimization</p>
                                    <p><i class="mdi mdi-check-bold text-primary me-4"></i>Unlmited Users</p>
                                    <p><i class="mdi mdi-check-bold text-primary me-4"></i>500 GB Bandwidth</p>
                                </div>

                                <div class="text-center">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle{{$item->id}}"
                                    role="button">
                                        Take this class
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- end row -->

                {{-- MODAL TAKE CLASS --}}
                @foreach ($getClass as $item)
                <div class="modal fade" id="exampleModalToggle{{$item->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Are you Sure?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Do you want to take the <b>{{$item->class_name}}</b> class for Rp. {{$item->price}}?
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2{{$item->id}}"
                                    data-bs-toggle="modal">Open second modal</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalToggle2{{$item->id}}" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <form method="POST" action="{{ route('submit-payment', ['id' => $item->id])}}"" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file">
                                        <button class="btn btn-primary" type="submit">Take Class</button>

                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-bs-target="#exampleModalToggle"
                                    data-bs-toggle="modal">Back</button>
                                <button class="btn btn-primary" type="submit">Take Class</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

@endsection

@push('script')
    <script src="{{ URL::asset('build/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
