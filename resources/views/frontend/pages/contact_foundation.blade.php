@extends('frontend.layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Contact Us</h5>
                @foreach($foundation_id as $f_id)

                <form action="{{route('contactFoundationUpload',['f_id'=>$f_id->id])}}" method="post">
                @endforeach
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" class="form-control" name="message" placeholder="Enter Your Message" rows="10"></textarea>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection
