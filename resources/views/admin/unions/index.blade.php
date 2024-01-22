@extends('admin.layouts.app')

@section('title')
    @lang('union.index_title')
@endsection

@section('breadcrumb')
    <h1 class="flex-grow-1 fs-3 fw-bold my-2 my-sm-3">@lang('union.index_title')</h1>
    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">@lang('common.admin')</li>
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">@lang('common.dashboard')</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.divisions.index') }}">@lang('division.index_title')</a></li>



            <li class="breadcrumb-item"><a href="{{ route('admin.upazillas.index') }}">@lang('upazila.index_title')</a></li>

            <li class="breadcrumb-item active" aria-current="page">@lang('union.index_title')</li>
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
                    <h3 class="block-title">@lang('union.list_of_union')

                    </h3>
                    @if (request()->has('upazilla_id'))
                    <div class="block-options">
                        <button type="button" class="btn btn-sm btn-primary show-modal"
                            data-url="{{ route('admin.unions.create', ['upazilla_id' => request()->get('upazilla_id')]) }}">
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
                url: @json(route('admin.unions.get_data', ['upazilla_id' => request()->get('upazilla_id')])),
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
                        '<input type="text" name="title_bn[]" class="outputField form-control" value="" placeholder="Title In Bangla"/><br>');
                });
            });
    </script>
@endpush
