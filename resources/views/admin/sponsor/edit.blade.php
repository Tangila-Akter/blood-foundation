@extends('admin.layouts.app')

@section('title')
Carousel
@endsection



@section('content')
  {{-- table list starts --}}
  <div class="block-content block-content-full">
    <form action="{{route('admin.sponsor.update',$data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      <div>
          <label>Link:</label>
          <input class="form-control" name="link"  value="{{$data->link}}" >
      </div>

      <div>
          <label>Image:</label>
          <input class="form-control" name="image" type="file">
          <img src="{{ asset('sponsor') }}/{{ $data->image }}" alt="" style="height:80px;" class="img-fluid">
      </div>


      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">update changes</button>
      </div>
  </form>
  </div>


@endsection

