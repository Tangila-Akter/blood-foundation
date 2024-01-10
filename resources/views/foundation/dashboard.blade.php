@extends('foundation.layouts.app')

@section('title')
    Dashboard
@endsection

@section('breadcrumb')
<h1 class="flex-grow-1 fs-3 fw-bold my-2 my-sm-3">Dashboard</h1>
<nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Foundation</li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>
@endsection

@section('content')

    <!-- Top Products and Latest Orders -->
    <div class="row">
        <div class="col-xl-6">
            <!-- Top Products -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Contact Us</h3>
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
                    <h3 class="block-title">Latest  users</h3>
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
