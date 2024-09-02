@extends('layouts.master')
@section('title')
    Add Class
@endsection
@push('css')
<link href="{{ URL::asset('build/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Form Wizard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Wizard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add your Class</h4>
                    <p class="card-title-desc">A powerful jQuery wizard plugin that supports
                        accessibility and HTML5</p>

                    <form action="{{ route('store-class')}}" id="form-horizontal" class="form-horizontal form-wizard-wrapper dropzone" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h3>Upload Documents</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Upload your Illustration Class Picture</h4>
                                            <p class="card-title-desc">DropzoneJS is an open source library that provides
                                                drag’n’drop file uploads with image previews.
                                            </p>
                                            <div>
                                                <input id="pictureClass" name="file[]" class="form-controll" type="file" multiple="multiple">
                                                <div class="dz-message needsclick">
                                                    <div class="mb-3">
                                                        <i class="display-4 text-muted mdi mdi-upload-network-outline"></i>
                                                    </div>

                                                    <h4>Drop files here or click to upload.</h4>
                                                </div>
                                                <div id="previewContainer" class="row mt-3"></div>

                                                <script>
                                                    document.getElementById('pictureClass').addEventListener('change', function(event) {
                                                        const previewContainer = document.getElementById('previewContainer');
                                                        previewContainer.innerHTML = '';

                                                        const files = event.target.files;
                                                        for (let i = 0; i < files.length; i++) {
                                                            const file = files[i];
                                                            if (!file.type.startsWith('image/')) {
                                                                continue;
                                                            }

                                                            const reader = new FileReader();
                                                            reader.onload = function(e) {
                                                                const colDiv = document.createElement('div');
                                                                colDiv.classList.add('col-md-3');

                                                                const img = document.createElement('img');
                                                                img.src = e.target.result;
                                                                img.classList.add('img-thumbnail', 'mb-2');
                                                                img.style.width = '100%';

                                                                colDiv.appendChild(img);
                                                                previewContainer.appendChild(colDiv);
                                                            };
                                                            reader.readAsDataURL(file);
                                                        }
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <h3>Class Description</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtFirstNameShipping" class="col-lg-3 col-form-label">Class Name</label>
                                        <div class="col-lg-9">
                                            <input id="className" autofocus name="className" type="text"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtLastNameShipping" class="col-lg-3 col-form-label">Date Class</label>
                                        <div class="col-lg-9">
                                            <input id="dateClass" name="dateClass" type="date"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mt-3 row">
                                        <label for="description" class="col-lg-3 col-form-label">Description Class</label>
                                        <div class="col-lg-9">
                                            <input id="description" name="description" type="input"
                                                class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <h3>Price Detail</h3>
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="txtNameCard" class="col-lg-3 col-form-label">Price Class</label>
                                        <div class="col-lg-9">
                                            <input id="priceClass" name="price" type="number"
                                                class="form-control">
                                                <p class="card-title-desc mt-3">Make sure the price format you enter matches the IDR price format</p>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="ddlCreditCardType" class="col-lg-3 col-form-label">Credit Card
                                            Type</label>
                                        <div class="col-lg-9">
                                            <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-select">
                                                <option value="">--Please Select--</option>
                                                <option value="AE">American Express</option>
                                                <option value="VI">Visa</option>
                                                <option value="MC">MasterCard</option>
                                                <option value="DI">Discover</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </fieldset>
                        <h3>Confirm Detail</h3>
                        <fieldset>
                            <div class="p-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="flexCheckDefault1">
                                    <label class="form-check-label" for="flexCheckDefault1">I agree with
                                        the Terms and Conditions.</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
@endsection
@push('script')
    <!-- form wizard -->
    <script src="{{ URL::asset('build/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>

    <!-- form wizard init -->
    <script src="{{ URL::asset('build/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script src="{{ URL::asset('build/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
