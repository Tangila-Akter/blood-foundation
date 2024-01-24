@extends('admin.layouts.app')

@section('title')
Marquee
@endsection



@section('content')
  {{-- table list starts --}}
  <div class="block-content block-content-full">
    <form action="{{route('admin.marquee.update',$data->id)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div>
          <label>Message:</label>
          <textarea class="form-control" name="text"  value="" >{{$data->text}}</textarea>
      </div>

      <div>
          <label>Bangla Message:</label>
          <textarea class="form-control" name="bn_text"  value="" >{{$data->bn_text}}</textarea>
      </div>
      </div>
      <div class="modal-footer">

        <button type="submit" class="btn btn-primary">update changes</button>
      </div>
  </form>
  </div>


@endsection

