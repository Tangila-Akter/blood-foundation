<div class="modal-dialog modal-lg modal-dialog-popout" role="document">
    <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-gd-default">
                <h3 class="block-title">Create New Village</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <!-- Form Grid with Labels -->
                <form method="POST" class="submit-form" action="{{ route('admin.villages.store') }}">
                    @csrf
                    <div class="col-12  mb-3">
                        <label class="form-label">Ward No</label>
                        <input type="number" class="form-control" name="ward_no"
                            value="{{ old('ward_no') }}" />
                    </div>

                    <textarea  placeholder="input text with comma separated for multiple field" class="inputTextArea form-control mb-3"></textarea>


                    <div id="outputFields">

                    </div>

                    <input type="hidden" name="union_id" value="{{ request()->get('union_id') }}" />

                    {{-- <div class="row">
                        <div class="col-12 col-md-6  mb-3">
                            <label class="form-label">Title</label>
                            <input type="text" class="form-control" name="title"
                                value="{{ old('title') }}">
                        </div>

                        <div class="col-12 col-md-6  mb-3">
                            <label class="form-label">Code</label>
                            <input type="text" class="form-control" name="code"
                                value="{{ old('code') }}">
                        </div>
                    </div> --}}


                    <button type="submit" class="btn btn-sm btn-outline-primary mb-3">
                        Save Village
                    </button>

                </form>
                <!-- END Form Grid with Labels -->
            </div>
            <div class="block-content block-content-full text-end bg-gray-lighter">
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>