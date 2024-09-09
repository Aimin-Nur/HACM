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
                            <p class="text-muted">To achieve this, it would be necessary to have uniform grammar,
                                pronunciation and more common words If several languages coalesce</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach ($getClass as $item)
                    <div class="col-lg-6">
                        <img class="card-img-top img-fluid" src="{{ asset('storage/uploads/' . $item->img) }}" alt="Card image cap">
                        <div class="card card-body">
                            <h3 class="card-title mt-0">{{$item->class_name}}</h3>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quam, iusto! Veniam asperiores harum dolores est magnam porro consectetur beatae minima.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="py-4 mt-4 text-center bg-soft-light">
                                        <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->formatted_price_doctor_specialist}}/ <span class="font-size-13"> for
                                                Doctor Specilist</span></h1>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-4 mt-4 text-center bg-soft-light">
                                        <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->formatted_price_doctor}}/ <span class="font-size-13"> for
                                                Doctor</span></h1>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-4 mt-4 text-center bg-soft-light">
                                        <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->formatted_price_nurses}}/ <span class="font-size-13"> for
                                                Nurses</span></h1>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="py-4 mt-4 text-center bg-soft-light">
                                        <h1 class="m-0"><sup><small>Rp</small></sup> {{$item->formatted_price_student}}/ <span class="font-size-13"> for
                                                Student</span></h1>
                                    </div>
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
                            <a class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalToggle{{$item->id}}">Take Workshop</a>
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
                                    <form method="POST" id="uploadForm-{{$item->id}}" action="{{ route('submit-payment', ['id' => $item->id])}}"" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" id="fileInput-{{$item->id}}">
                                        <button class="btn btn-primary" type="submit">Take Class</button>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-bs-target="#exampleModalToggle"
                                    data-bs-toggle="modal">Back</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

@endsection

@push('script')
<script>
    document.querySelectorAll('[id^="uploadForm-"]').forEach(form => {
        form.addEventListener('submit', function(event) {
            // Cari input file terkait form yang di-submit
            const fileInput = form.querySelector('input[type="file"]');
            const maxSize = 2 * 1024 * 1024; // 2 MB

            if (fileInput.files.length > 0 && fileInput.files[0].size > maxSize) {
                event.preventDefault(); // Mencegah pengiriman form

                // Tampilkan pesan error dengan toast
                var toast = document.getElementById('toast');
                if (toast) {
                    // Ubah pesan di toast
                    document.getElementById('toast-message').textContent = 'Proof of payment file exceeding 2 mb';
                    toast.classList.add('show');
                    setTimeout(function() {
                        toast.classList.remove('show');
                    }, 3000);
                }
            }
        });
    });
</script>

    <script src="{{ URL::asset('build/libs/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
