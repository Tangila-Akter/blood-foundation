<div class="modal-dialog modal-lg modal-dialog-popout" role="document">
    <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-gd-default">
                <h3 class="block-title">@lang('upazila.create_title')</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <!-- Form Grid with Labels -->
                <form method="POST" class="submit-form" action="{{ route('admin.upazillas.store') }}">
                    @csrf
                    <textarea  placeholder="input text with comma separated for multiple field" class="inputTextArea form-control mb-3"></textarea>

                    <div class="row">
                        <div class="col-6" id="outputFields">

                        </div>
                        <div class="col-6" id="outputFieldsBn">

                        </div>
                    </div>

                    <input type="hidden" name="district_id" value="{{ request()->get('district_id') }}" />


                    <button type="submit" class="btn btn-sm btn-outline-primary mb-3">
                        @lang('upazila.save')
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
