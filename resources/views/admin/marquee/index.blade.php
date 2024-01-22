@extends('admin.layouts.app')

@section('title')
Marquee
@endsection



@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2 float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Marquee
  </button><br>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Marquee</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
    <form action="{{route('admin.marquee.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Message:</label>
            <textarea class="form-control" name="text"  placeholder="Write a message" ></textarea>
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
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{ $data->text }}</td>
                <td>
                    <a style="float: left;margin-right:10px;" class="btn btn-warning" href="{{route('admin.marquee.edit',$data->id)}}">@lang('common.edit')</a>
                    <form method="post" action="{{ route('admin.marquee.destroy',$data->id) }}">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are You Sure ?')" type="submit" class="btn btn-danger">@lang('common.delete')</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
              <th>Message</th>
              <th>Action</th>
            </tr>
        </tfoot>
    </table>
  </div>


@endsection

