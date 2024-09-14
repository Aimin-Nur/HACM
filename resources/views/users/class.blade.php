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
                            <h4>Cost Breakdown Summary</h4>
                            <p class="text-muted">Exploring Recent Developments and Solutions to Global Health Problems.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($getClass as $item)
                    <div class="col-lg-12">
                        {{-- <img class="card-img-top img-fluid" src="{{ asset('storage/uploads/' . $item->img) }}" alt="Card image cap"> --}}
                        <div class="card card-body">
                            <h4 class="mt-4 text-center text-uppercase"><b>{{$item->class_name}}</b></h4>
                            <div class="row">
                                @if ($item->class_name == 'Simposium')
                                <div class="col-lg-6">
                                    <div class="py-4 mt-4 text-center bg-soft-light">
                                        <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->formatted_price_doctor_specialist}}/ <span class="font-size-13">
                                                Doctor Specilist</span></h1>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-4 mt-4 text-center bg-soft-light">
                                        <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->formatted_price_doctor}}/ <span class="font-size-13"> 
                                                Doctor</span></h1>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-4 mt-4 text-center bg-soft-light">
                                        <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->formatted_price_nurses}}/ <span class="font-size-13">
                                                Nurses</span></h1>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-4 mt-4 text-center bg-soft-light">
                                        <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->formatted_price_student}}/ <span class="font-size-13"> for
                                                Student</span></h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title">Session 1 : Congenital Heart Disease from screening to life saving</h5>
                                            <div class="row mt-5">
                                                <div class="col-lg-6">
                                                    <p class="card-text text-dark"><b>Understanding Early Diagnosis of CHD: Clinical in Your Daily Practice</b></p>
                                                    <p class="card-text"><small class="text-muted">dr. Julius Patimang, Sp.A., Sp.JP(K) FIHA</small>
                                                    </p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="card-text text-dark"><b>Contemporary Nonsurgical Intervention for Treating CHD in Indonesia</b></p>
                                                    <p class="card-text"><small class="text-muted">dr. Andi Alief Utama Armyn, M.Kes., Sp.JP(K) FIHA</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title">Session 2 : Unsolving the Puzzle of Cardiometabolic Syndrome</h5>
                                            <div class="row mt-5">
                                                <div class="col-lg-6">
                                                    <p class="card-text text-dark"><b>Dyslipidemia Management: Is Every Statin Same?</b></p>
                                                    <p class="card-text"><small class="text-muted">dr. Diera Gabriela Darda, Sp.JP FIHA</small>
                                                    </p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="card-text text-dark"><b>The Role and Practical Insights of SGLT-2 inhibitor in Heart Failure Patients: Why is it important?</b></p>
                                                    <p class="card-text"><small class="text-muted">dr. Doddy Moniaga, Sp.JP FIHA</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h5 class="card-title">Session 3 : Treating Hypertension Effectively: Guidelines Advice</h5>
                                            <div class="row mt-5">
                                                <div class="col-lg-6">
                                                    <p class="card-text text-dark"><b>The Practical Use of Single Pill Combination Therapy for Hypertension: The Right Pill for the Right Patient.</b></p>
                                                    <p class="card-text"><small class="text-muted">dr. Pendrik Tendean, Sp.PD KKV</small>
                                                    </p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="card-text text-dark"><b>Managing Hypertensive Crisis: Best Practice Recommendation for General Physician</b></p>
                                                    <p class="card-text"><small class="text-muted">dr. Muchtar Nora Ismail Siregar, Sp.JP FIHA</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="col-lg-4">
                                    <div class="py-4 mt-4 text-center bg-soft-light">
                                        <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->formatted_price_doctor_specialist}}/ <span class="font-size-13">
                                                Doctor Specilist</span></h1>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="py-4 mt-4 text-center bg-soft-light">
                                        <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->formatted_price_doctor}}/ <span class="font-size-13">
                                                Doctor</span></h1>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="py-4 mt-4 text-center bg-soft-light">
                                        <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->formatted_price_nurses}}/ <span class="font-size-13">
                                                Nurses</span></h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-12">
                                    <div class="card text-center">
                                        <div class="card-body">
                                            <h3 class="card-title">Saronde Event Including 1 Workshop Plus Symposium Event</h3>
                                            <div class="row mt-3">
                                                <div class="col-lg-4 mt-3">
                                                    <p class="card-text text-dark"><b>Acute Coronary Syndrome in Clinical Practice</b></p>
                                                </div>
                                                <div class="col-lg-4 mt-3">
                                                    <p class="card-text text-dark"><b>Heart Failure: From Admission to Discharge</b></p>
                                                </div>
                                                <div class="col-lg-4 mt-3">
                                                  <p class="card-text text-dark"><b>Management of Code Blue</b></p>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            @if ($getUser->roles != 'Student' || $item->class_name != 'Saronde')
                                <a class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{$item->id}}">Take Event</a>
                            @else
                                <a class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#notForStudent">Take Event</a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- end row -->

                {{-- MODAL TAKE CLASS --}}
                @foreach ($getClass as $item)
                <div class="modal fade" id="exampleModalToggle{{$item->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Are you Sure?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                @if ($getUser->roles == "Specialist Doctor")
                                   <p class="text-dark mt-3">Are you sure to take this workshop as a <mark>Specilialist Doctor</mark> at a price of Rp. {{$item->formatted_price_doctor_specialist}}?</p>
                                @elseif ($getUser->roles == "Specialist Doctor")
                                    <p class="text-dark mt-3">Are you sure to take this workshop as a <mark>Doctor</mark> at a price of Rp. {{$item->formatted_price_doctor}}?</p>
                                @elseif ($getUser->roles == "Nurse")
                                    <p class="text-dark mt-3"> Are you sure to take this workshop as a <mark>Nurse</mark> at a price of Rp. {{$item->formatted_price_nurses}}?</p>
                                @elseif ($getUser->roles == "Student")
                                    <p  class="text-dark mt-3">Are you sure to take this workshop as a <mark>Student</mark> at a price of Rp. {{$item->formatted_price_student}}?</p>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2{{$item->id}}"
                                    data-bs-toggle="modal">Yes, I Sure</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModalToggle2{{$item->id}}" aria-hidden="true"
                    aria-labelledby="exampleModalToggleLabel2" tabindex="-1" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel2">Payment</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form method="POST" id="uploadForm-{{$item->id}}" action="{{ route('submit-payment', ['id' => $item->id])}}" enctype="multipart/form-data">
                                @csrf
                            <div class="modal-body">
                                <div class="text-center align-items-center">
                                    <p>Please make payment through the following accounts below</p>
                                    <img src="https://buatlogoonline.com/wp-content/uploads/2022/10/Logo-Bank-BRI.png" alt="Bank BRI Logo" style="width: 100px; margin-bottom: 10px;"> <br>
                                    <strong>PERKI Cabang Gorontalo</strong><br>
                                    <p>BRI 002701002879560</p>`
                                        <input class="form-control" type="file" name="file" id="fileInput-{{$item->id}}">
                                        <div class="error-message text-danger" id="error-message-{{$item->id}}"></div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                {{-- <button class="btn btn-danger" data-bs-target="#exampleModalToggle"
                                    data-bs-toggle="modal">Back</button> --}}
                                <button class="btn btn-primary" type="submit">Take Event</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="modal fade" id="notForStudent" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalToggleLabel">Oops</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                   <h5 class="text-dark mt-3">Sorry, this event is not intended for <mark>Student</mark> </h5>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" class="btn-close" data-bs-dismiss="modal">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

@push('script')
<script>
    document.querySelectorAll('[id^="uploadForm-"]').forEach(form => {
        form.addEventListener('submit', function(event) {
            // Cari input file terkait form yang di-submit
            const fileInput = form.querySelector('input[type="file"]');
            const maxSize = 2 * 1024 * 1024; // 2 MB

            // Cari div untuk menampilkan pesan error
            const errorMessageDiv = form.querySelector('.error-message');

            if (fileInput.files.length > 0 && fileInput.files[0].size > maxSize) {
                event.preventDefault(); // Mencegah pengiriman form

                // Tampilkan pesan error tepat di bawah input file
                if (errorMessageDiv) {
                    errorMessageDiv.textContent = 'Proof of payment file exceeds 2 MB';
                }
            } else {
                // Kosongkan pesan error jika file valid
                if (errorMessageDiv) {
                    errorMessageDiv.textContent = '';
                }
            }
        });
    });
</script>


    <script src="{{ URL::asset('build/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
