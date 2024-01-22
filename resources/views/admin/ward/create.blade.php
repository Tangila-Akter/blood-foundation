<div class="modal-dialog modal-lg modal-dialog-popout" role="document">
    <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-gd-default">
                <h3 class="block-title">@lang('ward.create_title')</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <!-- Form Grid with Labels -->
                <form method="POST" class="submit-form" action="{{ route('admin.ward.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mt-4" id="">
                            <select class="form-select form-select-sm js-select" name="division" id="division" onchange="return findDistrict()">
                                <option value="">-- @lang('common.select_division') ---</option>
                               @if(isset($param['division']))
                               @foreach ($param['division'] as $d)
                                <option value="{{ $d->id }}">
                                    @if($lang == 'en')
                                    {{ $d->title ?: $d->title_bn}}
                                    @else
                                    {{ $d->title_bn ?: $d->title }}
                                    @endif
                                </option>
                               @endforeach
                               @endif
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4" id="districtBox">
                            {{-- <select class="form-select form-select-sm js-select" name="district" id="district">
                                <option value="">-- Select District --</option>

                            </select> --}}
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4" id="upazilaBox">
                            {{-- <select class="form-select form-select-sm js-select" name="upazila" id="upazila">
                                <option value="">-- Select Upazila --</option>

                            </select> --}}
                        </div>
                        <div class="col-lg-3 col-md-6 col-12 mt-4" id="unionBox">
                            {{-- <select class="form-select form-select-sm js-select" name="union" id="union">
                                <option value="">-- Select Union --</option>

                            </select> --}}
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4" id="">
                            <textarea name="ward_en" id="ward_en" cols="" rows="" class="form-control d-none" onchange="wardInput()">1,2,3,4,5,6,7,8,9</textarea>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4" id="">
                            <textarea name="ward_bn" id="ward_bn" cols="" rows="" class="form-control d-none" onchange="wardBnInput()">১,২,৩,৪,৫,৬,৭,৮,৯</textarea>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-4 d-none" id="wardEnBox">

                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-4 d-none" id="wardBnBox">

                        </div>

                    </div>
                    <button type="submit" class="submit d-none btn btn-sm btn-outline-primary mb-3 mt-2">
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


<script>
    function findDistrict()
    {
        let division = $('#division').val();
        if(division != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('admin.ward.find_district') }}',

                type : 'GET',

                data : {division},

                beforeSend : () => {
                    $('#districtBox').html('Loading..');
                },

                success : (res) => {
                    $('#districtBox').html(res);
                }
            });
        }
        else
        {
            $('#districtBox').html('');
        }
    }
    //

    function findUpazila()
    {
        let district = $('#district').val();
        if(district != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('admin.ward.find_upazila') }}',

                type : 'GET',

                data : {district},

                beforeSend : function(){
                    $('#upazilaBox').html('Loading...');
                },

                success : function(res)
                {
                    $('#upazilaBox').html(res);
                }
            });
        }
        else
        {
            $('#upazilaBox').html('');
        }
    }

    function findUnion()
    {
        let upazila = $('#upazila').val();
        if(upazila != '')
        {
            $.ajax({
                headers:{
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },
                url : '{{ route('admin.ward.find_union') }}',
                type : 'GET',
                data : {upazila},
                beforeSend: function()
                {
                    $('#unionBox').html('Loading...');
                },
                success : function(res)
                {
                    $('#unionBox').html(res);
                }
            });
        }
        else
        {
            $('#unionBox').html('');
        }
    }

    function getSubmit()
    {
        let union = $('#union').val();
        if(union != '')
        {
            $('.submit').removeClass('d-none');
            $('#ward_en').removeClass('d-none');
            $('#ward_bn').removeClass('d-none');
            $('#wardEnBox').removeClass('d-none');
            $('#wardBnBox').removeClass('d-none');
        }
        else
        {
            $('.submit').addClass('d-none');
            $('#ward_en').addClass('d-none');
            $('#ward_bn').addClass('d-none');
            $('#wardEnBox').addClass('d-none');
            $('#wardBnBox').addClass('d-none');
        }
    }


    function convertToBN(number)
    {

    }

    function wardInput()
    {

        var finalEnlishToBanglaNumber={'0':'০','1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯'};

        String.prototype.getDigitBanglaFromEnglish = function() {
            var retStr = this;
            for (var x in finalEnlishToBanglaNumber) {
                retStr = retStr.replace(new RegExp(x, 'g'), finalEnlishToBanglaNumber[x]);
            }
            return retStr;
        };

        $('#wardEnBox').html('');
        let ward_en = $('#ward_en').val();
        let ward_bn = ward_en.getDigitBanglaFromEnglish();

        let wardArray = ward_en.split(',');

        $('#ward_bn').val(ward_bn);
        wardBnInput();

        for (let index = 0; index < wardArray.length; index++)
        {
            $('#wardEnBox').append('<input type="text" name="title[]" class="form-control form-control-sm mt-3" value="'+wardArray[index]+'" readonly>');
        }
    }

    function wardBnInput()
    {
        $('#wardBnBox').html('');
        let ward_bn = $('#ward_bn').val();
        let wardArray = ward_bn.split(',');
        for (let index = 0; index < wardArray.length; index++)
        {
            $('#wardBnBox').append('<input type="text" name="title_bn[]" class="form-control form-control-sm mt-3" value="'+wardArray[index]+'" readonly>');

        }
    }

    $(document).ready(function(){
        wardInput();
        wardBnInput();
    });
</script>

