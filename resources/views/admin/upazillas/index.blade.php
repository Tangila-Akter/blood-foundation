@extends('admin.layouts.app')

@section('title')
    Upazilla
@endsection

@section('breadcrumb')
    <h1 class="flex-grow-1 fs-3 fw-bold my-2 my-sm-3">Upazilla</h1>
    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.divisions.index') }}">Division</a></li>

            @if (request()->has('division_id'))
                <li class="breadcrumb-item">{{ get_division_by_id(request()->get('division_id')) }}</li>
            @endif

            <li class="breadcrumb-item"><a href="{{ route('admin.districts.index') }}">District</a></li>
            @if (request()->has('district_id'))
                <li class="breadcrumb-item">{{ get_district_by_id(request()->get('district_id')) }}</li>
            @endif

            <li class="breadcrumb-item active" aria-current="page">Upazilla</li>
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
                    <h3 class="block-title">List Of Upazilla
                       

                        @if (request()->has('district_id'))
                         -- of {{ get_district_by_id(request()->get('district_id')) }}  Disctrict
                        @endif

                        @if (request()->has('division_id'))
                        -- of {{ get_division_by_id(request()->get('division_id')) }}  Division
                       @endif
                    </h3>
                    @if (request()->has('district_id'))
                    <div class="block-options">
                        <div class="dropdown font-sans-serif d-inline-block">
                            <button class="btn btn-sm btn-info dropdown-toggle" id="dropdownMenuButton" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Translate
                                All</button><span class="caret"> </span>
                            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                                <div class="px-2 py-3">
                                    {!! get_translatable_badge('admin.upazillas.all_translation', null, 'district_id', request()->get('district_id')) !!}
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn btn-sm btn-primary show-modal"
                            data-url="{{ route('admin.upazillas.create', ['district_id' => request()->get('district_id')]) }}">
                            Create New
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

                splitText.forEach(function(item) {
                    $('#outputFields').append(
                        '<label class="form-label">Title</label><input type="text" name="title[]" class="outputField form-control" value="' +
                        item.trim() +
                        '"/><br>');
                });
            });
    </script>
@endpush
