@extends('foundation.layouts.app')
@section('content')
    {{-- <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Contact</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-borderless table-striped table-vcenter font-size-sm">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Message</th>
                    </tr>
                    @foreach($contacts as $data)

                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->account_id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->message}}</td>
                </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div> --}}
    <button class="show-modal" data-url="{{ route('foundation.contact') }}" type="submit">submit</button>

@endsection
