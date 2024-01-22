<div class="row">
    {{-- <div class="col-12">
        <p class="fs-normal mb-3">@lang('common.total_data_found') : <b class="badge bg-success">{{ count($datas) }}</b></p>
    </div> --}}
    @foreach ($datas as $data)
    @if(count($data->unions) > 0)
    <h4>
        @if($lang == 'en')
        {{ $data->title ?: $data->title_bn }}
        @else
        {{ $data->title_bn ?: $data->title }}
        @endif
    </h4>
        <div class="row">
            @foreach ($data->unions as $u)
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="block block-rounded">
                    <div class="block-header">
                        <a href="{{ route('admin.ward.by_union', ['union_id' => $u->id]) }}" class="flex-grow-1 text-muted fs-md fw-bold">
                            @if($lang == 'en')
                            {{ $u->title ?: $u->title_bn }}
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

                                    <a class="dropdown-item show-modal" data-url="{{ route('admin.unions.edit',$u->id) }}">
                                        <i class="fa fa-fw fa-pencil-alt me-1"></i> @lang('common.edit')
                                    </a>


                                    <a class="dropdown-item text-danger show-modal" data-url="{{ route('admin.unions.delete', $u->id) }}">
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
        @endif
    @endforeach
</div>
