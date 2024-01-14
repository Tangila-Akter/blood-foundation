<div class="modal-dialog modal-lg modal-dialog-popout" role="document">
    <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
            <div class="block-header bg-gd-default">
                <h3 class="block-title">Create New Villages</h3>
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
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12 mt-4" id="">
                            <select class="form-select form-select-sm js-select" name="division" id="division" onchange="return findDistrict()">
                                <option value="">-- Select Division ---</option>
                               @if(isset($param['division']))
                               @foreach ($param['division'] as $d)
                                <option value="{{ $d->id }}">{{ $d->title }}</option>
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
                        <div class="col-lg-3 col-md-6 col-12 mt-4" id="wardBox">

                        </div>
                        <div class="col-lg-12 col-md-12 col-12 mt-4" id="">
                            <textarea name="village_names" id="village_names" cols="" rows="" class="form-control d-none" onchange="villageInput()" placeholder="Give Vilages Name. If You Want to create multiple village then give , after every village name."></textarea>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mt-4 d-none" id="villageEn">

                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mt-4 d-none" id="villageBn">

                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mt-4 d-none" id="villageCode">

                        </div>

                    </div>
                    <button type="submit" class="submit d-none btn btn-sm btn-outline-primary mb-3 mt-2">
                        Save Villages
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
                url : '{{ route('admin.ward.find_all_union') }}',
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

    function getWard()
    {
        let union = $('#union_id').val();
        // alert(union);
        if(union != '')
        {
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                },

                url : '{{ route('admin.villages.find_ward') }}',

                type : 'GET',

                data : {union},

                beforeSend : () => {
                    $('#wardBox').html('Loading..');
                },

                success : (res) => {
                    $('#wardBox').html(res);
                }
            });
        }
        else
        {
            $('#wardBox').html('');
        }
    }

    function getSubmit()
    {
        let ward = $('#ward').val();
        if(ward != '')
        {
            $('.submit').removeClass('d-none');
            $('#village_names').removeClass('d-none');
        }
    }

    function villageInput()
    {
        $('#villageEn').html('');
        $('#villageBn').html('');
        $('#villageCode').html('');
        let village_input = $('#village_names').val();
        // alert(village_input);
        if(village_input != '')
        {
            $('#villageEn').removeClass('d-none');
            $('#villageBn').removeClass('d-none');
            $('#villageCode').removeClass('d-none');
            let villageArray = village_input.split(',');
            for (let index = 0; index < villageArray.length; index++)
            {
                $('#villageEn').append('<input type="text" name="title[]" class="form-control form-control-sm mt-3" value="'+villageArray[index]+'" required>');
                $('#villageBn').append('<input type="text" name="title_bn[]" class="form-control form-control-sm mt-3" value="" placeholder="Give Name In Bangla Here">');
                $('#villageCode').append('<input type="text" name="code[]" class="form-control form-control-sm mt-3" value="" placeholder="Give Code Here">');

            }
        }
    }
</script>

