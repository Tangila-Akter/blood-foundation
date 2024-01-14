@extends('admin.layouts.app')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
<h1 class="flex-grow-1 fs-3 fw-bold my-2 my-sm-3">Dashboard</h1>
<nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Admin</li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>
@endsection

@section('content')
     <!-- Quick Overview -->
     <div class="row row-deck">
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="{{ route('admin.divisions.index') }}">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-primary mb-1"></div>
                    <h3>{{$total['division']}}</h3>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        @lang('common.division')
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="{{ route('admin.districts.index') }}">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-primary mb-1"></div>
                    <h3>{{$total['district']}}</h3>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        @lang('common.district')
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-primary mb-1"></div>
                    <h3>{{$total['upazila']}}</h3>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        @lang('common.upazila')
                    </p>
                </div>
            </a>
        </div>

        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-primary mb-1"></div>
                    <h3>{{$total['union']}}</h3>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        @lang('common.union')
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-primary mb-1"></div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        Total Invoice Amount
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 text-success mb-1"></div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        Total Customer
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 mb-1"></div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        Total Person
                    </p>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3">
            <a class="block block-rounded block-link-shadow text-center" href="">
                <div class="block-content py-5">
                    <div class="font-size-h3 font-w600 mb-1"></div>
                    <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                        Total Designation
                    </p>
                </div>
            </a>
        </div>
    </div>
    <!-- END Quick Overview -->


    <!-- Top Products and Latest Orders -->
    <div class="row">
        <div class="col-xl-6">
            <!-- Top Products -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Top Customers</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter font-size-sm">
                        <tbody>

                            <tr>
                                <td class="text-center" style="width: 100px;">
                                    <a class="font-w600" href="/"></a>
                                </td>
                                <td>
                                    <a href="/"></a>
                                </td>
                                <td class="d-none d-sm-table-cell text-right text-nowrap">
                                    <div class="text-warning">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Top Products -->
        </div>
        <div class="col-xl-6">
            <!-- Latest Orders -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Latest  Supply</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-borderless table-striped table-vcenter font-size-sm">
                        <tbody>

                            <tr>
                                <td class="font-w600 text-center" style="width: 100px;">
                                    <a href="/"></a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="/"></a>
                                </td>
                                <td>
                                    <span class="badge text-success"></span>
                                </td>
                                <td class="font-w600 text-right"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Latest Orders -->
        </div>
    </div>
    <!-- END Top Products and Latest Orders -->
@endsection

@push('js')

@endpush
