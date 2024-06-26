@extends('admin.layouts.app')

@section('title')
    Ward
@endsection

@section('breadcrumb')
    <h1 class="flex-grow-1 fs-3 fw-bold my-2 my-sm-3">Ward</h1>
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

            <li class="breadcrumb-item" aria-current="page">
               <a href="{{ route('admin.unions.index') }}">Union</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Ward</li>
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
                    <h3 class="block-title">List Of Ward -- of {{$data['union']->title}}
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

                    <div class="block-options">
                        <button type="button" class="btn btn-sm btn-primary show-modal"
                            data-url="{{ route('admin.ward.create_new_ward',$data['union']->id) }}">
                            Create New
                        </button>
                    </div>

                </div>
            </div>
            <!-- END Top Products -->
            <div id="data-view" class="">
                <x-card-skeleton></x-card-skeleton>
            </div>
        </div>

    </div>
    <!-- END Top Products and Latest Orders -->
@endsection

@push('scripts')

    <script>
        function get_data()
        {
            let union = "{{ $data['union']->id }}";
            // alert(union);
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('admin.ward.getunion_ward') }}',
                type : 'GET',
                data : {union},
                success: (res) => {
                    $('#data-view').html(res);
                }
            });
        }

        $(document).ready(function(){
            get_data();
        });
    </script>

    <script>

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
