<header >
    <div class="container">
        <nav>
            <div class="nav_logo"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>

            <div class="nav_menu">
                <ul class="nav_list">
                    <div class="dropdown">
                        <li class="home"><a href="{{route('home')}}">Home</a>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg></span>
                        </li>
                        <ul class="dropdown_list">
                            <li><a href="ons.html">Orgaization's Speece</a></li>
                            <li><a href="docu.html">All Documentation</a></li>
                            <li><a href="bdr.html">Blood Request Cheek</a></li>
                            <li><a href="profile.html">Profile</a></li>
                        </ul>
                    </div>
                    <li><a href="donat.html">Donation</a></li>
                    <li><a href="{{route('bloodRequest')}}">Blood request</a></li>
                    <li><a href="incom.html">Income Expenditure</a></li>
                    <div class="dropdown">
                        <li class="home"><a href="./index.html">Project</a>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg></span>
                        </li>
                        <ul class="dropdown_list">
                            <li><a href="ffa.html">Food for All</a></li>
                            <li><a href="health.html">Health</a></li>
                            <li><a href="education.html">Education</a></li>
                        </ul>
                    </div>
                    <li><a href="gallery.html">Gallery</a></li>

                    <div class="dropdown">
                        @php
                            use App\Models\Foundation;
                            $foundation=Foundation::all();
                         @endphp
                        <li class="home"><a href="#">Foundation</a>
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                        </svg></span>
                        </li>
                        <ul class="dropdown_list">
                            @foreach($foundation as $data)
                            <li><a href="{{route('contactFoundation',['id'=>$data->id])}}">Contact</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <button class="logout_m"><a href="{{route('logout')}}">Logout</a></button>
                </ul>
                <div class="search">
                    <!-- <form action="#" method="post" class="form_search">
                        <input type="search" placeholder="Search">
                        <span type="submit"><img src="assets/Image/search.svg" alt="icon"></span>
                    </form> -->
                    @if(Auth::id())
                    <button class="logout " ><a href="{{route('logout')}}" class="mx-lg-5">Logout</a></button>
                    @else
                    <button class="logout " ><a href="{{route('login')}}" class="mx-lg-5">LogIn</a></button>
                    <button class="logout " ><a href="{{route('register')}}" class="mx-lg-5">Register</a></button>
                    @endif
                    <div class="nav_toggol" style="margin-left: 90%;"><img src="{{asset('frontend/assets/Image/circled-menu.png')}}" alt=""></div>
                    <div class="close_toggol"><img src="{{asset('frontend/assets/Image/close.svg')}}" alt=""></div>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- ---------- Header end ---------- -->
