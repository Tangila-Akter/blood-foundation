@extends('admin.layouts.app')

@section('title')
    @lang('upazila.index_title')
@endsection

@section('breadcrumb')
    <h1 class="flex-grow-1 fs-3 fw-bold my-2 my-sm-3"> @lang('upazila.index_title')</h1>
    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">@lang('common.admin')</li>
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">@lang('common.dashboard')</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.divisions.index') }}">@lang('division.index_title')</a></li>

            @if (request()->has('division_id'))
                <li class="breadcrumb-item">{{ get_division_by_id(request()->get('division_id')) }}</li>
            @endif

            <li class="breadcrumb-item"><a href="{{ route('admin.districts.index') }}">@lang('district.index_title')</a></li>
            @if (request()->has('district_id'))
                <li class="breadcrumb-item">{{ get_district_by_id(request()->get('district_id')) }}</li>
            @endif

            <li class="breadcrumb-item active" aria-current="page">@lang('upazila.index_title')</li>
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
                    <h3 class="block-title">@lang('upazila.list_of_upazila')
                    </h3>
                    @if (request()->has('district_id'))
                    <div class="block-options">
                        <button type="button" class="btn btn-sm btn-primary show-modal"
                            data-url="{{ route('admin.upazillas.create', ['district_id' => request()->get('district_id')]) }}">
                           + @lang('common.create_new')
                        </button>
                    </div>
                    @endif
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
                url: @json(route('admin.upazillas.get_data', ['district_id' => request()->get('district_id')])),
                method: 'GET',
                success: function(response) {
                    $('#data-view').html(response);
                }
            });
        }

        $(document).ready(function() {
            get_data();
        });

        $(document).on('input', '.inputTextArea', function() {
                var inputText = $(this).val();
                var splitText = inputText.split(',');

                $('#outputFields').empty(); // Clear previous fields
                $('#outputFieldsBn').empty(); // Clear previous fields

                splitText.forEach(function(item) {
                    $('#outputFields').append(
                        '<input type="text" name="title[]" class="outputField form-control" value="' +
                        item.trim() +
                        '"/><br>');
                    $('#outputFieldsBn').append(
                        '<input type="text" name="title_bn[]" class="form-control" value="' +
                        '" placeholder="Title In Bengali"/><br>');
                });
            });
    </script>
@endpush
