<div class="modal-dialog modal-lg modal-dialog-popout" role="document">
    <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                <h3 class="block-title">Assign Location Operator</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <!-- Form Grid with Labels -->
                <form method="POST" class="submit-form" action="{{ route('admin.operators.assign', $operator->id) }}">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6 mb-4">
                            <label class="form-label">Division</label>
                            {!! get_division_dropdown($operator->division_id) !!}
                        </div>
    
                        <div class="col-12 col-md-6 mb-4">
                            <label class="form-label">District</label>
                            <select name="district_id" class="form-control select2 district_id">
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}" @if ($district->id == $operator->district_id) selected @endif>
                                        {{ $district->title }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="col-12 col-md-6 mb-4">
                            <label class="form-label">Upazilla</label>
                            <select name="upazilla_id" class="form-control select2 upazilla_id">
                                @foreach ($upazillas as $upazilla)
                                    <option value="{{ $upazilla->id }}" @if ($upazilla->id == $operator->upazilla_id) selected @endif>
                                        {{ $upazilla->title }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="col-12 col-md-6 mb-4">
                            <label class="form-label">Union</label>
                            <select name="union_id" class="form-control select2 union_id">
                                @foreach ($unions as $union)
                                    <option value="{{ $union->id }}" @if ($union->id == $operator->union_id) selected @endif>
                                        {{ $union->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-outline-primary mb-3">
                        Save
                    </button>
    
                </form>
                <!-- END Form Grid with Labels -->
            </div>
            <div class="block-content block-content-full text-end bg-body">
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>