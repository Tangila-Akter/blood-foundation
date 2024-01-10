<div class="row">
    <div class="col-12">
        <p class="fs-normal mb-3">Total Data Found : <b class="badge bg-success">{{ count($datas) }}</b></p>
    </div>
    @foreach ($datas as $data)
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="block block-rounded">
                <div class="block-header">
                    <a href="{{ route('admin.villages.index', ['union_id' => $data->id]) }}" class="flex-grow-1 text-muted fs-md fw-bold">
                        {{ $data->title }}
                    </a>
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
                                    {!! get_translatable_badge('admin.unions.translation', $data->id) !!}
                                </div>

                                <div role="separator" class="dropdown-divider"></div>

                                <a class="dropdown-item show-modal" data-url="{{ route('admin.unions.edit',$data->id) }}">
                                    <i class="fa fa-fw fa-pencil-alt me-1"></i> Edit
                                </a>
                                

                                <a class="dropdown-item text-danger show-modal" data-url="{{ route('admin.unions.delete', $data->id) }}">
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
