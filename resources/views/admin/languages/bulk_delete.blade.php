<div class="modal-dialog modal-lg modal-dialog-popout" role="document">
    <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title">Bulk Delete</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <!-- Form Grid with Labels -->
                <form method="POST" class="submit-form" action="{{ route('admin.languages.bulk_destroy') }}">
                    @csrf

                    <div class="row">      
                        <div class="col-12">
                            @foreach ($ids as $id)
                                <input type="hidden" name="ids[]" value="{{ $id }}">
                            @endforeach
                            <h4 class="mb-3 text-danger">Are you sure delete Total (<b>{{ count($ids) }}</b>) Item. You can't undo for that.?</h4>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-sm btn-danger mb-3">Yes, I want to delete</button>
                        </div>
                    </div>

                </form>
                <!-- END Form Grid with Labels -->
            </div>
            <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>