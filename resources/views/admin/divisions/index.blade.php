@extends('admin.layouts.app')

@section('title')
    Division
@endsection

@section('breadcrumb')
    <h1 class="flex-grow-1 fs-3 fw-bold my-2 my-sm-3">Division</h1>
    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active" aria-current="page">Division</li>
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
                    <h3 class="block-title">List Of Division</h3>
                    <div class="block-options">
                  
                        <div class="dropdown font-sans-serif d-inline-block">
                            <button class="btn btn-sm btn-info dropdown-toggle" id="dropdownMenuButton" type="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Translate
                                All</button><span class="caret"> </span>
                            <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="dropdownMenuButton">
                                <div class="px-2 py-3">
                                    {!! get_translatable_badge('admin.divisions.all_translation') !!}
                                </div>
                            </div>
                        </div>
                        
                        <button type="button" class="btn btn-sm btn-primary show-modal"
                            data-url="{{ route('admin.divisions.create') }}">
                            Create New
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
