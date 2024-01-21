@extends('admin.layouts.app')

@section('title')
Organization speece
@endsection



@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2 float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Organization speece
  </button><br>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Organization speece</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    <form action="{{route('admin.developer.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Name:</label>
            <input class="form-control" name="name"  placeholder="Write a name" >
        </div>
        <div>
            <label>Position:</label>
            <input class="form-control" name="Position"  placeholder="Write your position" >
        </div>
        <div>
            <label>Social Media Link:</label>
            <input class="form-control" name="SocialMediaLink"  placeholder="Write your social media link" >
        </div>
        <div>
            <label>Description:</label>
            <textarea class="form-control" name="Description" rows="3"></textarea>
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
                <th>Position</th>
                <th>Social Media Link</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->Position }}</td>
                <td>{{ $data->SocialMediaLink }}</td>
                <td>{{ $data->Description }}</td>
                <td><img height="100" width="100" src="../developer/{{ $data->image }}"></td>
                <td>
                    <a style="float: left;margin-right:10px;" class="btn btn-warning" href="{{route('admin.developer.edit',$data->id)}}">Edit</a>
                    <form method="post" action="{{ route('admin.developer.destroy',$data->id) }}">
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
                <th>Position</th>
                <th>Social Media Link</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
  </div>


@endsection

