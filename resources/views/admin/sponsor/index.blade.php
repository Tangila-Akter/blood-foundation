@extends('admin.layouts.app')

@section('title')
Sponsor
@endsection



@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2 float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Sponsor
  </button><br>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Sponsor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    <form action="{{route('admin.sponsor.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Link:</label>
            <input class="form-control" name="link"  placeholder="Write a link" >
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
                <th>Link</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{ $data->link }}</td>
                <td><img height="100" width="100" src="../sponsor/{{ $data->image }}"></td>
                <td>
                    <a class="btn btn-warning" href="{{route('admin.sponsor.edit',$data->id)}}">Edit</a>
                    <a class="btn btn-danger" href="{{route('admin.sponsor.delete',$data->id)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Link</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
  </div>


@endsection

