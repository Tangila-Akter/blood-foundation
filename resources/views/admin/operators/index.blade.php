@extends('admin.layouts.app')

@section('title')
    Operator
@endsection

@push('css')
    @include('admin.includes.styles.datatable')
    @include('admin.includes.styles.basic')
    <style type="text/css">
        .alert,
        .alert-danger {
            z-index: 1052 !important;
        }
    </style>
@endpush

@section('breadcrumb')
    <h1 class="flex-grow-1 fs-3 fw-bold my-2 my-sm-3">Operator</h1>
    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active" aria-current="page">Operator</li>
        </ol>
    </nav>
@endsection


@section('content')
    <!-- Dynamic Table with Export Buttons -->
    <div class="block block-rounded">
        <div class="block-header border-bottom border-2">
            <h3 class="mb-0 py-1 fs-4 fw-bold">Operator List</h3>
            <button class="btn btn-sm btn-outline-primary show-modal" data-url="{{ route('admin.operators.create') }}">Create
                Operator</button>

        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table id="example" class="table  table-hover table-bordered dt-responsive" style="width:100%;">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="selectAll" /></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Last Modify</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                </tbody>

                <tfoot>
                    <tr>
                        <th>
                            <div class="dropdown">
                                <button class="btn btn-warning btn-sm dropdown-toggle d-none" id="bulk_action"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="bulk_action">
                                    <li><a class="dropdown-item text-danger bulk_delete" href="#"
                                            url="{{ route('admin.operators.bulk_delete') }}">Bulk Delete</a></li>
                                    <li><a class="dropdown-item text-primary bulk_change" href="#"
                                            url="{{ route('admin.operators.bulk_change') }}">Bulk Change</a></li>
                                </ul>
                            </div>
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Last Modify</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table with Export Buttons -->
@endsection


@push('js')
    @include('admin.includes.scripts.datatable')
    @include('admin.includes.scripts.basic')
@endpush

@push('scripts')
    <script>
        var table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            "paging": true,
            "deferRender": true,
            pageLength: 10,
            ordering: false,
            dom: "<'row'<'col-sm-12 text-center py-2'<'text-center mb-2'>>><'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            ajax: {
                url: @json(route('admin.operators.index')),
            },
            columns: [{
                    data: 'checkbox',
                    name: 'checkbox',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'updated_at',
                    name: 'updated_at'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    serachable: false,
                    sClass: 'text-center'
                }
            ],
        });

        $('#filter-button').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            table.draw();


        });

        $('.dt-buttons').children().removeClass('btn-secondary').addClass('btn-outline-primary')

        $('.buttons-colvis').removeClass('btn-secondary').addClass('btn-outline-primary');
        $('.buttons-colvis').parent().removeClass('btn-outline-primary').addClass('border-0');



        $("#selectAll").change(function() {
            if (this.checked) {
                $(".checkbox").each(function() {
                    this.checked = true;
                    $(this).parents('tr').addClass('bg-warning');
                    $('#bulk_action').removeClass('d-none');
                })
            } else {
                $(".checkbox").each(function() {
                    this.checked = false;
                    $(this).parents('tr').removeClass('bg-warning');
                    $('#bulk_action').addClass('d-none');
                })
            }
        });

        $(document).on('click', '.checkbox', function() {
            $(this).parents('tr').toggleClass('bg-warning');

            if ($(this).is(":checked")) {
                $('#bulk_action').removeClass('d-none');

                var isAllChecked = 0;
                $(".checkbox").each(function() {
                    if (!this.checked)
                        isAllChecked = 1;
                })

                if (isAllChecked == 0) {
                    $("#selectAll").prop("checked", true);

                }
            } else {
                $("#selectAll").prop("checked", false);

                if ($('.checkbox:checked').length <= 0) {
                    $('#bulk_action').addClass('d-none');
                }
            }
        });

        $(document).on('change', '.division_id', function() {
            var id = $(this).val();
            get_dependable_data(id, 'division_id', 'District', '.district_id');
        });

        $(document).on('change', '.district_id', function() {
            var id = $(this).val();
            get_dependable_data(id, 'district_id', 'Upazilla', '.upazilla_id');
        });

        $(document).on('change', '.upazilla_id', function() {
            var id = $(this).val();
            get_dependable_data(id, 'upazilla_id', 'Union', '.union_id');
        });


        function get_dependable_data(id, type, model, classname) {
            if (id) {
                $.ajax({
                    type: 'GET',
                    url: @json(route('admin.get_dependable_data')),
                    data: {
                        id: id,
                        'type': type,
                        'model': model
                    },
                    success: function(response) {
                        console.log(response);
                        $(classname).empty();
                        $(classname).append('<option value="">Select ' + model + '</option>');
                        $(classname).append('<option value="">All</option>');
                        $(classname).append('<option value="-1">None</option>');
                        $.each(response, function(key, value) {
                            $(classname).append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $(classname).empty();
            }
        }

        
    </script>
@endpush