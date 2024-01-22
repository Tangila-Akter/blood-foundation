<div class="modal-dialog modal-lg modal-dialog-popout" role="document">
    <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-gd-default">
                <h3 class="block-title">@lang('union.delete_title')</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <!-- Form Grid with Labels -->
                <form method="POST" class="submit-form" action="{{ route('admin.unions.destroy', $id) }}">
                    @csrf
                    @method('delete')
                    <h1>@lang('union.confirmation')</h1>
                    <div class="d-flex align-items-center mb-3">
                        <button type="submit" class="btn btn-sm btn-danger">
                            @lang('common.yes')
                        </button>
                        <button type="button" class="btn btn-sm btn-secondary ms-3" data-bs-dismiss="modal">
                            @lang('common.no')
                        </button>
                    </div>
                </form>
                <!-- END Form Grid with Labels -->
            </div>
        </div>
    </div>
</div>
