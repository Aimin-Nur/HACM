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
                <h4>Choose your Pricing plan</h4>
                <p class="text-muted">To achieve this, it would be necessary to have uniform grammar,
                    pronunciation and more common words If several languages coalesce</p>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($getClass as $item)
        <div class="col-xl-4 col-md-4">
            <div class="card plan-box">
                <div class="card-body p-4">
                    <div class="d-flex align-items-start">
                        <div class="flex-1 me-3">
                            <h5>{{$item->class_name}}</h5>
                            <p class="text-muted">Lorem, ipsum dolor.</p>
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
                        <a class="btn btn-primary waves-effect waves-light"
                        data-bs-toggle="modal" data-bs-target="#exampleModalScrollable{{$item->id}}">Delete Class</a>
                    </div>

                </div>
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
