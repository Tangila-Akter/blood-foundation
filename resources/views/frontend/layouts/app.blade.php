<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.header')
<body>
    <div class="wrapper">
        <!-- ---------- Header ---------- -->
@include('frontend.includes.navbar')
@yield('content')
@include('frontend.includes.sub-footer')       
@include('frontend.includes.footer')
    </div>

@include('frontend.includes.script')
</body>
</html>