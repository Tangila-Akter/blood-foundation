<div class="modal-dialog modal-lg modal-dialog-popout" role="document">
    <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-gd-default">
                <h3 class="block-title">@lang('ward.edit_title')</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <!-- Form Grid with Labels -->
                <form method="POST" class="submit-form" action="{{ route('admin.ward.update',$param['data']->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12" id="">
                            <input type="text" name="title" class="form-control" required value="{{ $param['data']->title }}">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12" id="">
                            <input type="text" name="title_bn" class="form-control" required value="{{ $param['data']->title_bn }}">
                        </div>

                    </div>
                    <button type="submit" class="submit btn btn-sm btn-outline-primary mb-3 mt-2">
                        @lang('ward.save')
                    </button>

                </form>
                <!-- END Form Grid with Labels -->
            </div>
            <div class="block-content block-content-full text-end bg-gray-lighter">
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">@lang('common.close')</button>
            </div>
        </div>
    </div>
</div>


