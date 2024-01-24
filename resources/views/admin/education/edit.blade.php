@extends('admin.layouts.app')

@section('title')
Education
@endsection



@section('content')
  {{-- table list starts --}}
  <div class="block-content block-content-full">
    <form action="{{route('admin.education.update',$data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
          <label>Name:</label>
          <input type="text" class="form-control" name="name"  value="{{$data->name}}" >
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
          <label>Bangla Name:</label>
          <input type="text" class="form-control" name="bn_name"  value="{{$data->bn_name}}">
        </div>
      </div>
      <div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <label>Text:</label>
            <textarea class="form-control" name="text"  placeholder="Write a message" >{{$data->text}}</textarea>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <label>Bangla Text:</label>
            <textarea class="form-control" name="bn_text"  placeholder="Write a message in bangla" >{{$data->bn_text}}</textarea>
          </div>
        </div>

      <div>
          <label>Image:</label>
          <input class="form-control" name="image" type="file">
          <img src="{{ asset('education') }}/{{ $data->image }}" alt="" style="height:80px;" class="img-fluid">
      </div>


      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">update changes</button>
      </div>
  </form>
  </div>


@endsection

