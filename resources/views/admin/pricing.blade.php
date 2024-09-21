@extends('layouts.master')
@section('title')
    Pricing
@endsection
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-start align-items-center justify-content-between">
                <h4 class="page-title mb-0 font-size-18">Pricing</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                        <li class="breadcrumb-item active">Pricing</li>
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
                <p class="text-muted">Exploring Current Developments and Solutions to Global Health Issues</p>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($getClass as $item)
        <div class="col-lg-6">
            <div class="card card-body">
                <h4 class="mt-0 text-center fw-bold">{{$item->class_name}} Event</h4>
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
                <a class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable{{$item->id}}">Delete Class</a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- end row -->

@foreach ($getClass as $item)
<div class="modal fade" id="exampleModalScrollable{{$item->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">
                    Delete Class</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <form action="{{route('archive', ['id' => $item->id])}}" method="POST">
                @csrf
                <input type="hidden" name="active" value="0">
                <div class="modal-body">
                    <h4 class="text-center">Are you sure Delete Class <b>{{$item->class_name}}</b>?</h4>
                    <p class="text-center">This action will permanently delete the class data</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Yes,
                        I sure</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endforeach

@endsection
@push('script')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
