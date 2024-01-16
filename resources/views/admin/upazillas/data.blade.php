<div class="row">
    @foreach ($datas as $data)
    @if(count($data->upazilas) > 0)
    <h4>
        @if($lang == 'en')
        {{ $data->title ?: $data->title_bn }}
        @else
        {{ $data->title_bn ?: $data->title }}
        @endif
    </h4>
    <div class="row">
        @if($data->upazilas)
        @foreach ($data->upazilas as $u)
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="block block-rounded">
                <div class="block-header">
                    <a href="{{ route('admin.unions.index', ['upazilla_id' => $u->id]) }}" class="flex-grow-1 text-muted fs-md fw-bold">
                        @if($lang == 'en')
                        {{ $u->title ?: $u->title_bn}}
                        @else
                        {{ $u->title_bn ?: $u->title }}
                        @endif
                    </a>
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">

                                <a class="dropdown-item show-modal" data-url="{{ route('admin.upazillas.edit',$u->id) }}">
                                    <i class="fa fa-fw fa-pencil-alt me-1"></i> @lang('common.edit')
                                </a>

                                <a class="dropdown-item text-danger show-modal" data-url="{{ route('admin.upazillas.delete', $u->id) }}">
                                    <i class="fa fa-fw fa-times me-1"></i> @lang('common.delete')
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    @endif
    @endforeach
</div>
