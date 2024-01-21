@extends('admin.layouts.app')

@section('title')
Organization speece
@endsection



@section('content')
  {{-- table list starts --}}
  <div class="block-content block-content-full">
    <form action="{{route('admin.developer.update',$data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div>
        <label>Name:</label>
        <input class="form-control" name="name"  value="{{$data->name}}" >
    </div>
    <div>
        <label>Position:</label>
        <input class="form-control" name="Position"  value="{{$data->Position}}"  >
    </div>
    <div>
        <label>Social Media Link:</label>
        <input class="form-control" name="SocialMediaLink"  value="{{$data->SocialMediaLink}}" >
    </div>
    <div>
        <label>Description:</label>
        <textarea class="form-control" name="Description" rows="3"></textarea>
    </div>

      <div>
          <label>Image:</label>
          <input class="form-control" name="image" type="file">
          <img src="{{ asset('developer') }}/{{ $data->image }}" alt="" style="height:80px;" class="img-fluid">
      </div>


      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">update changes</button>
      </div>
  </form>
  </div>


@endsection

