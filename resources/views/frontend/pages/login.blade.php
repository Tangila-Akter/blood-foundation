@extends('frontend.layouts.app')
@section('content')
    <section class="hero">
        <div class="container">
            <div class="login">
                <h1>Login</h1>
                <form action="{{route('store_login')}}" method="post">
                    @csrf
                    <div class="form_group">
                        <label for="user">
                            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg>
                        </label>
                        <input type="text" id="user" name="email" placeholder="Phone or Email" required>
                    </div>
                    <div class="form_group">
                        <label for="pass">
                            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                            </svg>
                        </label>
                        <div class="log_eye">
                            <input type="password" id="pass" name="password" placeholder="Password" required>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="check_padd">
                        <span>Forget Password</span>
                    </div>
                    <div class="profile_countinue">
                        <input type="submit" value="Login">
                    </div>
                    <div class="no_login">
                        <p><a href="registation.html"><span>General Registration</span></a></p>
                        <p><a href="logout.html"><span>Foundation Password</span></a></p>
                    </div>

                </form>
            </div>
        </div>
    </section>
@endsection
