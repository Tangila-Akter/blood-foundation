@extends('admin.layouts.app')

@section('title')
    Village
@endsection

@section('breadcrumb')
    <h1 class="flex-grow-1 fs-3 fw-bold my-2 my-sm-3">Village</h1>
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

            <li class="breadcrumb-item"><a href="{{ route('admin.upazillas.index') }}">Upazilla</a></li>
            @if (request()->has('upazilla_id'))
                <li class="breadcrumb-item">{{ get_district_by_id(request()->get('upazilla_id')) }}</li>
            @endif

            <li class="breadcrumb-item"><a href="{{ route('admin.unions.index') }}">Union</a></li>
            @if (request()->has('union_id'))
                <li class="breadcrumb-item">{{ get_union_by_id(request()->get('union_id')) }}</li>
            @endif

            <li class="breadcrumb-item active" aria-current="page">Village</li>
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
                    <h3 class="block-title">List Of Village
                       

                        @if (request()->has('union_id'))
                         --  {{ get_union_by_id(request()->get('union_id')) }}  Union
                        @endif
                        @if (request()->has('upazilla_id'))
                         --  {{ get_upazilla_by_id(request()->get('upazilla_id')) }}  Upazilla
                        @endif
                        @if (request()->has('district_id'))
                         --  {{ get_district_by_id(request()->get('district_id')) }}  Disctrict
                        @endif

                        @if (request()->has('division_id'))
                        -- of {{ get_division_by_id(request()->get('division_id')) }}  Division
                       @endif
                    </h3>
                    @if (request()->has('union_id'))
                    <div class="block-options">
                        <button type="button" class="btn btn-sm btn-primary show-modal"
                            data-url="{{ route('admin.villages.create', ['union_id' => request()->get('union_id')]) }}">
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
                url: @json(route('admin.villages.get_data', ['union_id' => request()->get('union_id')])),
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
