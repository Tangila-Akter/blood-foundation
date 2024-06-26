@extends('admin.layouts.app')

@section('title')
Carousel
@endsection



@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2 float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Carousel
  </button><br>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Carousel</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    <form action="{{route('admin.carousel.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Title:</label>
            <input class="form-control" name="title"  placeholder="Write a title" >
        </div>
        <div>
            <label>Bangla Title:</label>
            <input class="form-control" name="bn_title"  placeholder="Write a bangla title" >
        </div>
        <div>
            <label>Image:</label>
            <input class="form-control" name="image" type="file">
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  <br>


  {{-- table list starts --}}
  <div class="block-content block-content-full">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Bangla Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{ $data->title }}</td>
                <td>{{ $data->bn_title }}</td>
                <td><img height="100" width="100" src="../carousel/{{ $data->image }}"></td>
                <td>
                    <a style="float: left;margin-right:10px;" class="btn btn-warning" href="{{route('admin.carousel.edit',$data->id)}}">Edit</a>
                    <form method="post" action="{{ route('admin.carousel.destroy',$data->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Bangla Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
  </div>


@endsection

