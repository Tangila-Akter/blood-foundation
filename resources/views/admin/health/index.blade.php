@extends('admin.layouts.app')

@section('title')
Health
@endsection



@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2 float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Health
  </button><br>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Health</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    <form action="{{route('admin.health.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <label>Name:</label>
            <input type="text" class="form-control" name="name"  placeholder="Write a name" >
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
            <label>Bangla Name:</label>
            <input type="text" class="form-control" name="bn_name"  placeholder="Write a name in bangla">
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
              <label>Text:</label>
              <textarea class="form-control" name="text"  placeholder="Write a message" ></textarea>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
              <label>Bangla Text:</label>
              <textarea class="form-control" name="bn_text"  placeholder="Write a message in bangla" ></textarea>
            </div>
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
  </div>
  <br>


  {{-- table list starts --}}
  <div class="block-content block-content-full">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Bangla Name</th>
                <th>Text</th>
                <th>Bangla Text</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->bn_name }}</td>
                <td>{{ $data->text }}</td>
                <td>{{ $data->bn_text }}</td>
                <td><img height="100" width="100" src="../health/{{ $data->image }}"></td>
                <td>
                    <a class="btn btn-warning" href="{{route('admin.health.edit',$data->id)}}">Edit</a>
                    <form method="post" action="{{ route('admin.health.destroy',$data->id) }}">
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
              <th>Text</th>
              <th>Bangla Text</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
        </tfoot>
    </table>
  </div>


@endsection

