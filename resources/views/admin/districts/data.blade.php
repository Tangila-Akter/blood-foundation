<div class="row">
    <div class="col-12">
    </div>
    @foreach ($datas as $data)
    @if(count($data->districts) > 0)
    <div>
        <h4>
            @if($lang == 'en')
            {{ $data->title ?: $data->title_bn }}
            @else
            {{ $data->title_bn ?: $data->title }}
            @endif
        </h4>
    </div>
    <div class="row">
        @if(count($data->districts) > 0)
        @foreach ($data->districts as $d)
        <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="block block-rounded">
                <div class="block-header">
                    <a href="{{ route('admin.upazillas.index', ['district_id' => $d->id]) }}" class="flex-grow-1 text-muted fs-md fw-bold">
                        @if($lang == 'en')
                        {{ $d->title ?: $d->title_bn }}
                        @else
                        {{ $d->title_bn ?: $d->title }}
                        @endif
                    </a>
                    <div class="block-options">
                        <div class="dropdown">
                            <button type="button" class="btn-block-option" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item show-modal" data-url="{{ route('admin.districts.edit',$d->id) }}">
                                    <i class="fa fa-fw fa-pencil-alt me-1"></i> @lang('common.edit')
                                </a>


                                <a class="dropdown-item text-danger show-modal" data-url="{{ route('admin.districts.delete', $d->id) }}">
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
