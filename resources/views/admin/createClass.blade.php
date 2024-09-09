@extends('layouts.master')
@section('title')
    Create Workshop
@endsection
@push('css')
    <!-- datepicker css -->
    <link href="{{ URL::asset('build/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Create Workshop</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Create Workshop</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('store-class')}}" id="form-horizontal" class="form-horizontal form-wizard-wrapper dropzone" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create New Workshop</h4>
                        <div data-repeater-list="outer-group" class="outer">
                            <div data-repeater-item class="outer">
                                <div class="form-group row mb-4">
                                    <label for="taskname" class="col-form-label col-lg-2">Workshop Name</label>
                                    <div class="col-lg-10">
                                        <input id="taskname" name="className" autofocus type="text" class="form-control"
                                            placeholder="Enter Workshop Name...">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Description</label>
                                    <div class="col-lg-10">
                                        <textarea id="textarea" name="description" class="form-control" maxlength="225" rows="3"
                                        placeholder="This textarea has a limit of 225 chars."></textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-lg-2">Started & Ended Date</label>
                                    <div class="col-lg-10">
                                        <div class="input-daterange input-group">
                                            <input type="date" class="form-control" placeholder="Start Date"
                                            name="dateClassStart" />
                                            <input type="date" class="form-control" placeholder="End Date"
                                            name="dateClassEnd" />
                                        </div>
                                    </div>
                                </div>

                                <div class="inner-repeater">
                                    <div data-repeater-list="inner-group" class="inner form-group mb-0 row">
                                        <label class="col-form-label col-lg-2">Ilustration Picture</label>
                                        <div data-repeater-item class="inner col-lg-10 ms-md-auto">
                                            <div class="mb-3 row align-items-center">
                                                <div class="col-md-12">
                                                    <input type="file" name="file[]" multiple="file" class="inner form-control">
                                                    <p class="card-title-desc mt-1 ms-2">Make sure your file is PNG, JPG, or JPEG format and File Format No Larger than 2 MB.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskbudget" class="col-form-label col-lg-2">Price Doctor Specialist</label>
                                    <div class="col-lg-10">
                                        <input id="taskbudget" name="price-1" type="number"
                                            placeholder="Enter Price For Doctor Specialist" class="form-control">
                                        <p class="card-title-desc mt-1 ms-2">If the price is 500,000, simply write 500000.</p>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskbudget" class="col-form-label col-lg-2">Price Doctor</label>
                                    <div class="col-lg-10">
                                        <input id="taskbudget" name="price-2" type="number"
                                            placeholder="Enter Price For Doctor" class="form-control">
                                        <p class="card-title-desc mt-1 ms-2">If the price is 500,000, simply write 500000.</p>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskbudget" class="col-form-label col-lg-2">Price Nurses</label>
                                    <div class="col-lg-10">
                                        <input id="taskbudget" name="price-3" type="number"
                                            placeholder="Enter Price For Nurses" class="form-control">
                                        <p class="card-title-desc mt-1 ms-2">If the price is 500,000, simply write 500000.</p>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="taskbudget" class="col-form-label col-lg-2">Price Student</label>
                                    <div class="col-lg-10">
                                        <input id="taskbudget" name="price-4" type="number"
                                            placeholder="Enter Price For Student" class="form-control">
                                        <p class="card-title-desc mt-1 ms-2">If the price is 500,000, simply write 500000.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Create Workshop</button>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- end row -->
@endsection
@push('script')
    <!-- bootstrap datepicker -->
    <script src="{{ URL::asset('build/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

    <!--tinymce js-->

    <script src="{{ URL::asset('build/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- form repeater js -->
    <script src="{{ URL::asset('build/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>

    <script src="{{ URL::asset('build/js/pages/task-create.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <<script src="{{ URL::asset('build/libs/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/form-advanced.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
