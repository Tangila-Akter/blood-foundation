@foreach ($datas as $ward => $village)


<div class="row">
    <div class="col-12">
        <p class="fs-normal mb-3">Total Data Found For <b class="text-danger">{{ get_ward_by_id($ward) }}</b> No Ward <b class="text-success">{{ count($village) }}</b> Villages</p>
    </div>
    @foreach ($village as $data)
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="block block-rounded">
                <div class="block-header">
                    <div class="flex-grow-1 text-muted fs-md fw-bold">
                        {{ $data->title }}
                    </div>
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item">
                                    <i class="fa fa-fw fa-globe me-1"></i> Translation
                                </a>
                                <div role="separator" class="dropdown-divider"></div>

                                <div class="dropdown-item">
                                    {!! get_translatable_badge('admin.villages.translation', $data->id) !!}
                                </div>

                                <div role="separator" class="dropdown-divider"></div>

                                <a class="dropdown-item show-modal" data-url="{{ route('admin.villages.edit',$data->id) }}">
                                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit
                                </a>
                                

                                <a class="dropdown-item text-danger show-modal" data-url="{{ route('admin.villages.delete', $data->id) }}">
                                    <i class="fa fa-fw fa-times me-1"></i> Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

    
@endforeach
