@extends('admin.layouts.app')

@section('title')
    Villages
@endsection

@section('breadcrumb')
    <h1 class="flex-grow-1 fs-3 fw-bold my-2 my-sm-3">Villages</h1>
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
            <li class="breadcrumb-item" aria-current="page">
               <a href="{{ route('admin.ward.index') }}">Ward</a>
            </li>
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
                    <h3 class="block-title">List Of Villages
                        -- {{$ward_info->title}} No Ward
                    </h3>

                    <div class="block-options">
                        <button type="button" class="btn btn-sm btn-primary show-modal"
                            data-url="{{ route('admin.villages.create') }}">
                            Create New
                        </button>
                    </div>

                </div>
            </div>
            <!-- END Top Products -->
            <hr>
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
        let ward = "{{ $ward_info->id }}";
        // alert(union);
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : '{{ csrf_token() }}'
            },

            url : '{{ route('admin.villages.load_villages') }}',
            type : 'GET',
            data : {ward},
            success: (res) => {
                $('#data-view').html(res);
            }
        });
    }

    $(document).ready(function(){
        get_data();
    });
</script>

@endpush
