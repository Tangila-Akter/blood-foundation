@extends('frontend.layouts.app')
@section('content')
    <section class="bldR hero">
        <div class="container">
            <div class="data_profile">
                <form action="{{route('bloodRequestUpload')}}" method="post">
                    @csrf
                    <div class="profile_items">
                        <h2>Blood Request</h2>
                        <div class="profile_form">
                            <div class="form_group">
                                <label for="Division">Division</label>
                                <div class="form_select">
                                    <select id="gender" name="division" required>
                                        <option value="" selected >Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form_group">
                                <label for="District">District</label>
                                <div class="form_select">
                                    <select id="gender" name="district" required>
                                        <option value="" selected >Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form_group">
                                <label for="Upzilla">Upzilla</label>
                                <div class="form_select">
                                    <select id="gender" name="upzilla" required>
                                        <option value="" selected >Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form_group">
                                <label for="hospital">Hospital</label>
                                <div class="form_select">
                                    <select id="hospital" name="hospital" required>
                                        <option value="" selected >Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form_group">
                                <label for="patient">Patient Name</label>
                                <input type="text" id="patient" placeholder="Patient Name" name="patientName" required>
                            </div>
                            <div class="form_group">
                                <label for="pasientNum">Patient Phone number</label>
                                <input type="number" id="pasientNum" placeholder="Patient Phone number" name="patientPhone" required>
                            </div>
                            <div class="form_group">
                                <label for="refNam">Reference name</label>
                                <input type="name" id="refNam" placeholder="Reference name" name="referenceName" required>
                            </div>
                            <div class="form_group">
                                <label for="refNum">Reference  Phone number </label>
                                <input type="number" id="refNum" placeholder="Reference  Phone number "  name="referenceNumber" required>
                            </div>
                            <div class="form_group">
                                <label for="bldG">Blood Group</label>
                                <div class="form_select">
                                    <select id="bldG"  name="bloodGroup" required>
                                        <option value="" selected >Select</option>
                                        <option value="a">A+</option>
                                        <option value="ab">B</option>
                                        <option value="o">O+</option>
                                        <option value="b">B</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form_group">
                                <label for="bldG">How many bag of blood</label>
                                <div class="form_select">
                                    <select id="bldG" name="bagBlood" required>
                                        <option value="" selected >Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form_group bldr_sms">
                            <label for="sms">Massage</label>
                            <textarea id="sms" rows="7" name="message" placeholder="Massage"></textarea>
                        </div>
                        <div class="profile_countinue">
                            <input type="submit" value="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- ---------- Blood request end ---------- -->

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
    <section class="container">
        <div class="add">
            <div class="add_slider">
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
                <div class="add_item"><a href="#"><img src="frontend/assets/Image/logo.png" alt="Logo"></a></div>
            </div>
        </div>
    </section>
@endsection
