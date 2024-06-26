<div class="modal-dialog modal-lg modal-dialog-popout" role="document">
    <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title">Delete Languge</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <!-- Form Grid with Labels -->
                <form method="GET" class="submit-form" action="">
                  @csrf
                  @method('delete')
                    <h3>Are you sure delete this data? </h3>
                    <button type="submit" class="btn btn-sm btn-outline-danger mb-3">
                        Yes
                    </button>
                    <button type="button" class="btn btn-sm btn-alt-secondary mb-3" data-bs-dismiss="modal">No</button>
                </form>
                <!-- END Form Grid with Labels -->
            </div>
        </div>
    </div>
</div>