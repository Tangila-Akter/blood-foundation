
<div class="row">
    @foreach ($village as $data)
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="block block-rounded">
                <div class="block-header">
                    <div class="flex-grow-1 text-muted fs-md fw-bold">
                        @if($lang == 'en')
                        {{ $data->title_bn ?: $data->title }}
                        @else
                        {{ $data->title_bn ?: $data->title }}
                        @endif
                    </div>
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item show-modal" data-url="{{ route('admin.villages.edit',$data->id) }}">
                                    <i class="fa fa-fw fa-pencil-alt me-1"></i> @lang('common.edit')
                                </a>
                                <a class="dropdown-item text-danger show-modal" data-url="{{ route('admin.villages.delete', $data->id) }}">
                                    <i class="fa fa-fw fa-times me-1"></i> @lang('common.delete')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
