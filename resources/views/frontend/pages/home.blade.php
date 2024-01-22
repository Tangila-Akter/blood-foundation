@extends('frontend.layouts.app')
@section('content')
<!-- ---------- Hero ---------- -->
<section class="hero">
    <div class="container">
        <div class="">
            <!-- <div class="hero_img1">
                <img class="it_logo" src="assets/Image/hero_img.jpg" alt="img">
                <div class="hero_user">
                    <p>Ours Visitor's</p>
                    <br>
                    <div class="user">
                        <h4>oooo2</h4>
                    </div>
                </div>
            </div> -->
            <div class="hero_img2 mb-5">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">


                            {{-- <img src="" class="d-block w-100" alt="..."> --}}

                        @if(count($carousel) > 0)
                          @foreach ($carousel as $carousel)
                          <div class="carousel-item">
                          <img src="../carousel/{{ $carousel->image }}" class="d-block w-100" style="height: 60vh;">
                        </div>
                        @endforeach
                        @else
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/assets/Image/logo.png') }}" class="d-block w-100" style="height: 60vh;">
                        </div>
                          @endif

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                <!-- <div class="live"></div> -->
                <!-- <video autoplay loop src="assets/Video/video_2.mp4"></video> -->
                <!-- <img src="assets/Image/hero_img2.jpg" alt="img"> -->
            </div>
            <div class="hero_img1">
                <!-- <img class="it_logo" src="assets/Image/hero_img.jpg" alt="img">
                <div class="hero_user">
                    <p>Total Member's</p>
                    <br>
                    <div class="user">
                        <h4>oooo2</h4>
                    </div>
                </div> -->
            </div>
        </div>
        <marquee>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam earum ex,
            fugit enim amet laudantium laboriosam! Ad quisquam reiciendis error?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam earum ex,
            fugit enim amet laudantium laboriosam! Ad quisquam reiciendis error?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam earum ex,
            fugit enim amet laudantium laboriosam! Ad quisquam reiciendis error?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam earum ex,
            fugit enim amet laudantium laboriosam! Ad quisquam reiciendis error?
        </marquee>
    </div>

</section>
<!-- ---------- Hero end ---------- -->

<!-- ---------- Privacy ---------- -->
<section class="privacy_text">
    <div class="container">
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis dolores provident harum recusandae deserunt inventore repellat quisquam error, nostrum sunt incidunt quos eius maiores architecto dolore modi voluptas omnis ad dicta molestias, labore itaque laudantium corrupti? Autem modi iure deleniti ea ratione blanditiis quis, saepe odit eaque labore unde voluptatem asperiores quae quo non mollitia ipsum enim voluptate culpa libero nesciunt. Dolore eaque dolorem iusto reiciendis sint libero delectus illo quod reprehenderit at, molestias sapiente saepe sed eum in ipsa adipisci quis labore consectetur necessitatibus fugit. Consectetur, facere molestiae? Necessitatibus qui vitae perspiciatis excepturi, reiciendis voluptate reprehenderit tempora nisi nobis nemo, inventore, eligendi aut suscipit laudantium facilis sint itaque iure in mollitia voluptatibus impedit. Et atque temporibus commodi est quos doloribus, fugiat ad necessitatibus? Culpa sequi facere, iste, at ipsum consectetur qui nisi iure laudantium quisquam animi quas officiis aspernatur voluptatibus enim tempore aperiam recusandae eos, obcaecati natus non itaque impedit rem. Mollitia eos eveniet vero veniam suscipit magni unde! Vel quos nesciunt quaerat accusamus consequatur cupiditate deserunt quam inventore iste numquam modi officia impedit adipisci explicabo ipsa sed quod perferendis facilis molestiae magnam beatae, quo hic? Pariatur totam accusantium sapiente iure nostrum, laboriosam odit aliquam ratione sed sint, obcaecati vero mollitia, illum animi amet necessitatibus ipsam debitis provident. Tempore dicta fugit eius corporis. Non rerum eius maxime est praesentium delectus veritatis minima mollitia odit error eligendi, nam quae culpa provident modi esse. Accusamus deserunt necessitatibus temporibus magni optio impedit corporis, quo ducimus? Unde nobis non laborum, aut commodi deleniti aliquam nam aperiam magnam velit eius ipsam, eum corrupti a? Voluptates aut sequi quisquam aperiam amet dolores quidem quos esse quam, perspiciatis omnis commodi velit fuga. Dolorum, fugit ducimus. Aperiam dolorum porro laudantium quaerat repellendus quibusdam voluptas, alias exercitationem voluptates culpa dolor provident laboriosam ratione. Reprehenderit sequi dicta laborum ratione iure est omnis quisquam nesciunt sint sit, assumenda quod. Aspernatur sunt debitis rerum architecto et numquam voluptatem placeat eveniet corporis eius eligendi repudiandae, dolore dicta expedita hic blanditiis! Delectus, at deserunt? Odio ex autem dolore, fugit blanditiis consequatur eos beatae cupiditate iusto eaque cum a cumque exercitationem similique illum corrupti perferendis quos molestiae vel, natus voluptatum ipsa officiis. Doloribus omnis pariatur optio excepturi nihil voluptatibus officiis quod ipsum magni similique facere quis, ex tempora sapiente, expedita nulla cumque. Delectus eius est pariatur sint dolor, quod aspernatur recusandae voluptatem fuga itaque reiciendis. Maxime debitis sequi quisquam perferendis eius eum aliquam minima consequuntur qui, animi quae! Recusandae quas reiciendis amet reprehenderit, harum perspiciatis aliquid vitae ipsum ipsa consequuntur aperiam sunt quis doloribus eaque minus in pariatur fuga ducimus eum, hic exercitationem, voluptatum nemo tempora.
        </p>
    </div>
</section>
<!-- ---------- Privacy end ---------- -->

<!-- ---------- Privacy ---------- -->
<section class="about_text">
    <div class="container">
        <p>
            nostrum sunt incidunt quos eius maiores architecto dolore modi voluptas omnis ad dicta molestias, labore itaque laudantium corrupti? Autem modi iure deleniti ea ratione blanditiis quis, saepe odit eaque labore unde voluptatem asperiores quae quo non mollitia ipsum enim voluptate culpa libero nesciunt. Dolore eaque dolorem iusto reiciendis sint libero delectus illo quod reprehenderit at, molestias sapiente saepe sed eum in ipsa adipisci quis labore consectetur necessitatibus fugit. Consectetur, facere molestiae? Necessitatibus qui vitae perspiciatis excepturi, reiciendis voluptate reprehenderit tempora nisi nobis nemo, inventore, eligendi aut suscipit laudantium facilis sint itaque iure in mollitia voluptatibus impedit. Et atque temporibus commodi est quos doloribus, fugiat ad necessitatibus? Culpa sequi facere, iste, at ipsum consectetur qui nisi iure laudantium quisquam animi quas officiis aspernatur voluptatibus enim tempore aperiam recusandae eos, obcaecati natus non itaque impedit rem. Mollitia eos eveniet vero veniam suscipit magni unde! Vel quos nesciunt quaerat accusamus consequatur cupiditate deserunt quam inventore iste numquam modi officia impedit adipisci explicabo ipsa sed quod perferendis facilis molestiae magnam beatae, quo hic? Pariatur totam accusantium sapiente iure nostrum, laboriosam odit aliquam ratione sed sint, obcaecati vero mollitia, illum animi amet necessitatibus ipsam debitis provident. Tempore dicta fugit eius corporis. Non rerum eius maxime est praesentium delectus veritatis minima mollitia odit error eligendi, nam quae culpa provident modi esse. Accusamus deserunt necessitatibus temporibus magni optio impedit corporis, quo ducimus? Unde nobis non laborum, aut commodi deleniti aliquam nam aperiam magnam velit eius ipsam, eum corrupti a? Voluptates aut sequi quisquam aperiam amet dolores quidem quos esse quam, perspiciatis omnis commodi velit fuga. Dolorum, fugit ducimus. Aperiam dolorum porro laudantium quaerat repellendus quibusdam voluptas, alias exercitationem voluptates culpa dolor provident laboriosam ratione. Reprehenderit sequi dicta laborum ratione iure est omnis quisquam nesciunt sint sit, assumenda quod. Aspernatur sunt debitis rerum architecto et numquam voluptatem placeat eveniet corporis eius eligendi repudiandae, dolore dicta expedita hic blanditiis! Delectus, at deserunt? Odio ex autem dolore, fugit blanditiis consequatur eos beatae cupiditate iusto eaque cum a cumque exercitationem similique illum corrupti perferendis quos molestiae vel, natus voluptatum ipsa officiis. Doloribus omnis pariatur optio excepturi nihil voluptatibus officiis quod ipsum magni similique facere quis, ex tempora sapiente, expedita nulla cumque. Delectus eius est pariatur sint dolor, quod aspernatur recusandae voluptatem fuga itaque reiciendis. Maxime debitis sequi quisquam perferendis eius eum aliquam minima consequuntur qui, animi quae! Recusandae quas reiciendis amet reprehenderit, harum perspiciatis aliquid vitae ipsum ipsa consequuntur aperiam sunt quis doloribus eaque minus in pariatur fuga ducimus eum, hic exercitationem, voluptatum nemo tempora.
        </p>
    </div>
</section>
<!-- ---------- Privacy end ---------- -->

<!-- ---------- Trans And Condition ---------- -->
<section class="trans_condition">
    <div class="container">
        <p>
            Dolore eaque dolorem iusto reiciendis sint libero delectus illo quod reprehenderit at, molestias sapiente saepe sed eum in ipsa adipisci quis labore consectetur necessitatibus fugit. Consectetur, facere molestiae? Necessitatibus qui vitae perspiciatis excepturi, reiciendis voluptate reprehenderit tempora nisi nobis nemo, inventore, eligendi aut suscipit laudantium facilis sint itaque iure in mollitia voluptatibus impedit. Et atque temporibus commodi est quos doloribus, fugiat ad necessitatibus? Culpa sequi facere, iste, at ipsum consectetur qui nisi iure laudantium quisquam animi quas officiis aspernatur voluptatibus enim tempore aperiam recusandae eos, obcaecati natus non itaque impedit rem. Mollitia eos eveniet vero veniam suscipit magni unde! Vel quos nesciunt quaerat accusamus consequatur cupiditate deserunt quam inventore iste numquam modi officia impedit adipisci explicabo ipsa sed quod perferendis facilis molestiae magnam beatae, quo hic? Pariatur totam accusantium sapiente iure nostrum, laboriosam odit aliquam ratione sed sint, obcaecati vero mollitia, illum animi amet necessitatibus ipsam debitis provident. Tempore dicta fugit eius corporis. Non rerum eius maxime est praesentium delectus veritatis minima mollitia odit error eligendi, nam quae culpa provident modi esse. Accusamus deserunt necessitatibus temporibus magni optio impedit corporis, quo ducimus? Unde nobis non laborum, aut commodi deleniti aliquam nam aperiam magnam velit eius ipsam, eum corrupti a? Voluptates aut sequi quisquam aperiam amet dolores quidem quos esse quam, perspiciatis omnis commodi velit fuga. Dolorum, fugit ducimus. Aperiam dolorum porro laudantium quaerat repellendus quibusdam voluptas, alias exercitationem voluptates culpa dolor provident laboriosam ratione. Reprehenderit sequi dicta laborum ratione iure est omnis quisquam nesciunt sint sit, assumenda quod. Aspernatur sunt debitis rerum architecto et numquam voluptatem placeat eveniet corporis eius eligendi repudiandae, dolore dicta expedita hic blanditiis! Delectus, at deserunt? Odio ex autem dolore, fugit blanditiis consequatur eos beatae cupiditate iusto eaque cum a cumque exercitationem similique illum corrupti perferendis quos molestiae vel, natus voluptatum ipsa officiis. Doloribus omnis pariatur optio excepturi nihil voluptatibus officiis quod ipsum magni similique facere quis, ex tempora sapiente, expedita nulla cumque. Delectus eius est pariatur sint dolor, quod aspernatur recusandae voluptatem fuga itaque reiciendis. Maxime debitis sequi quisquam perferendis eius eum aliquam minima consequuntur qui, animi quae! Recusandae quas reiciendis amet reprehenderit, harum perspiciatis aliquid vitae ipsum ipsa consequuntur aperiam sunt quis doloribus eaque minus in pariatur fuga ducimus eum, hic exercitationem, voluptatum nemo tempora.
        </p>
    </div>
</section>
<!-- ---------- Trans And Condition end ---------- -->

<!-- ---------- add ---------- -->
<section class="container mb-3">
<div class="add">
    <div class="add_slider">
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
        <div class="add_item"><a href="#"><img src="{{asset('frontend/assets/Image/logo.png')}}" alt="Logo"></a></div>
    </div>
</div>
</section>
<!-- ---------- add end ---------- -->
@endsection
