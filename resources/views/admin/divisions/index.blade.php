@extends('admin.layouts.app')

@section('title')
    @lang('division.index_title')
@endsection

@section('breadcrumb')
    <h1 class="flex-grow-1 fs-3 fw-bold my-2 my-sm-3">@lang('division.index_title')</h1>
    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">@lang('common.admin')</li>
            <li class="breadcrumb-item">@lang('common.dashboard')</li>
            <li class="breadcrumb-item active" aria-current="page">@lang('division.index_title')</li>
        </ol>
    </nav>
@endsection

@section('content')
    <!-- Top Products and Latest Orders -->
    <div class="row">
        <div class="col-12">
            <!-- Top Products -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">@lang('division.list_of_division')</h3>
                    <div class="block-options">
                        <button type="button" class="btn btn-sm btn-primary show-modal"
                            data-url="{{ route('admin.divisions.create') }}">
                            <i class="fa fa-plus"></i> @lang('common.create_new')
                        </button>
                    </div>
                </div>
            </div>
            <!-- END Top Products -->

            <div id="data-view">
                <x-card-skeleton></x-card-skeleton>
            </div>



        </div>

    </div>
    <!-- END Top Products and Latest Orders -->
@endsection

@push('scripts')
    <script>
        function get_data() {
            $.ajax({
                url: @json(route('admin.divisions.get_data')),
                method: 'GET',
                success: function(response) {
                    $('#data-view').html(response);
                }
            });
        }

        $(document).ready(function() {
            get_data();
        });
    </script>
@endpush
