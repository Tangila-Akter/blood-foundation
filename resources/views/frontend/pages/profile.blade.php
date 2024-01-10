@extends('frontend.layouts.app')
@section('content')
    <!-- ---------- Profile ---------- -->
    <!-- ---------- Profile ---------- -->
    <section class="hero">
        <div class="container">
            <div class="profile">
                <div>
                    <div class="id_profile">
                        <div class="text_id_profile">
                            <div class="img_icon_profile">
                                <div class="img_profile">
                                    <img src="assets/Image/profile1.jpg" alt="">
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                                </svg>
                            </div>
                            <h3>Md Sibgatullah</h3>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>
                                <span>01700000000</span>
                            </p>
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                </svg>
                                <span>info.ebondhu@gmail.com</span>
                            </p>
                            <hr>
                        </div>
                        <div class="content_profile">
                            <div class="item_profile">
                                <p>
                                    <span>Do you want to <br> donate Blood ?</span>
                                </p>
                                <div style="display: flex; gap: 5px;">
                                    <h4 class="varefy_profile" id="bloodWant">Yes</h4>
                                    <h4 class="varefy_profile">No</h4>

                                </div>
                            </div>
                            <div class="item_profile">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                    </svg>
                                    <span>NID</span>
                                </p>
                                <h4 class="varefy_profile">Verify</h4>
                            </div>
                            <div class="item_profile">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                    </svg>
                                    <span>BRN</span>
                                </p>
                                <h4 class="varefy_profile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                    </svg>
                                </h4>
                            </div>
                            <div class="item_profile">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                    </svg>
                                    <span>Password</span>
                                </p>
                                <h4 class="varefy_profile">Edit</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- adderss profile -->
                <div class="adderss_profile">
                    <!-- <h4>Profile</h4> -->
                    {{-- <div class="all_profile">
                        <div class="profile_content">
                            <div class="profile_item active">
                                <h4>My <br> Profile</h4>
                            </div>
                            <div class="profile_item">
                                <h4>Birthplace <br> Address</h4>
                            </div>
                            <div class="profile_item">
                                <h4>Parmament <br> Address</h4>
                            </div>
                            <div class="profile_item">
                                <h4>Current <br> Address</h4>
                            </div>
                            <div class="profile_item">
                                <h4>Check & <br> Review</h4>
                            </div>
                        </div>
                    </div> --}}
                    
                    <div class="data_profile">
                        
                        <form action="#" method="post">
                            <div class="profile_items" id="myProfile">
                               <!-- My Profile -->
                               <h2>My Profile</h2>
                               <div class="profile_form">
                                   <div class="form_group">
                                       <label for="name">Name</label>
                                       <input type="text" id="name" placeholder="Your Name" required>
                                   </div>

                                   <div class="form_group">
                                       <label for="fatherName">Father Name</label>
                                       <input type="text" id="fatherName" placeholder="Father Name">
                                   </div>

                                   <div class="form_group">
                                       <label for="motherName">Mother Name</label>
                                       <input type="text" id="motherName" placeholder="Mother Name">
                                   </div>

                                   <div class="form_group">
                                       <label for="gender">Gender</label>
                                       <div class="form_select">
                                           <select id="gender">
                                               <option value="select">Select</option>
                                               <option value="male">Male</option>
                                               <option value="female">Female</option>
                                           </select>
                                       </div>
                                   </div>

                                   <div class="form_group">
                                       <label for="email">Email</label>
                                       <input type="email" id="email" placeholder="Email">
                                   </div>

                                   <div class="form_group">
                                       <label for="phone">Phone</label>
                                       <input type="number" id="email" placeholder="Phone" required>
                                   </div>

                                   <div class="form_group">
                                       <label for="blood">Blood Group</label>
                                       <div class="form_select">
                                           <select id="gender">
                                               <option value="select">Select</option>
                                               <option value="male">Male</option>
                                               <option value="female">Female</option>
                                           </select>
                                       </div>
                                   </div>

                                   <div class="form_group">
                                       <label for="occupation">Occupation</label>
                                       <div class="form_select">
                                           <select id="gender">
                                               <option value="select">Select</option>
                                               <option value="male">Male</option>
                                               <option value="female">Female</option>
                                           </select>
                                       </div>
                                   </div>
                               </div>

                                <div class="profile_countinue" id="profileNext">
                                    <a href="#birthAdd"><input type="submit" value="continue"></a>
                                </div>
                            </div>
                            
                            <div class="profile_items" id="birthAdd">
                                <h2>Birthplace Address</h2>
                                <div class="profile_form">
                                    <div class="form_group">
                                        <label for="Division">Division</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="District">District</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Upzilla">Upzilla</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="District">Union</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Ward">Ward</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Village">Village</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="profile_countinue" id="birthNext">
                                    <input type="submit" value="continue">
                                </div>
                            </div>
                            
                            <div class="profile_items" id="ParmAdd">
                               <!-- current Address -->
                               <h2>Parmament Address</h2>
                               <div class="profile_form">
                                   <div class="form_group">
                                       <label for="Division">Division</label>
                                       <div class="form_select">
                                           <select id="gender">
                                               <option value="select">Select</option>
                                               <option value="male">Male</option>
                                               <option value="female">Female</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="form_group">
                                       <label for="District">District</label>
                                       <div class="form_select">
                                           <select id="gender">
                                               <option value="select">Select</option>
                                               <option value="male">Male</option>
                                               <option value="female">Female</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="form_group">
                                       <label for="Upzilla">Upzilla</label>
                                       <div class="form_select">
                                           <select id="gender">
                                               <option value="select">Select</option>
                                               <option value="male">Male</option>
                                               <option value="female">Female</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="form_group">
                                       <label for="District">Union</label>
                                       <div class="form_select">
                                           <select id="gender">
                                               <option value="select">Select</option>
                                               <option value="male">Male</option>
                                               <option value="female">Female</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="form_group">
                                       <label for="Ward">Ward</label>
                                       <div class="form_select">
                                           <select id="gender">
                                               <option value="select">Select</option>
                                               <option value="male">Male</option>
                                               <option value="female">Female</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="form_group">
                                       <label for="Village">Village</label>
                                       <div class="form_select">
                                           <select id="gender">
                                               <option value="select">Select</option>
                                               <option value="male">Male</option>
                                               <option value="female">Female</option>
                                               <option value="female">Female</option>
                                           </select>
                                       </div>
                                   </div>
                               </div>
                                
                                <div class="profile_countinue" id="parmNext">
                                    <input type="submit" value="continue">
                                </div>
                            </div>
                            
                            <div class="profile_items" id="currAdd">
                                <!-- current Address -->
                                <h2>Current Adderss</h2>
                                <div class="profile_form">
                                    <div class="form_group">
                                        <label for="Division">Division</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="District">District</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Upzilla">Upzilla</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="District">Union</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Ward">Ward</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Village">Village</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="profile_countinue" id="currNext">
                                    <input type="submit" value="continue">
                                </div>
                            </div>
                            
                            <div class="profile_items" id="checkProfiles">
                                
                                <!-- My Profile -->
                                <h2>My Profile</h2>
                                <div class="profile_form">
                                    <div class="form_group">
                                        <label for="name">Name</label>
                                        <input type="text" id="name" placeholder="Your Name" required>
                                    </div>

                                    <div class="form_group">
                                        <label for="fatherName">Father Name</label>
                                        <input type="text" id="fatherName" placeholder="Father Name">
                                    </div>

                                    <div class="form_group">
                                        <label for="motherName">Mother Name</label>
                                        <input type="text" id="motherName" placeholder="Mother Name">
                                    </div>

                                    <div class="form_group">
                                        <label for="gender">Gender</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form_group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" placeholder="Email">
                                    </div>

                                    <div class="form_group">
                                        <label for="phone">Phone</label>
                                        <input type="number" id="email" placeholder="Phone" required>
                                    </div>

                                    <div class="form_group">
                                        <label for="blood">Blood Group</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form_group">
                                        <label for="occupation">Occupation</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- birthplace Address -->
                                <h2>Birthplace Address</h2>
                                <div class="profile_form">
                                    <div class="form_group">
                                        <label for="Division">Division</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="District">District</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Upzilla">Upzilla</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="District">Union</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Ward">Ward</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Village">Village</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- current Address -->
                                <h2>Parmament Address</h2>
                                <div class="profile_form">
                                    <div class="form_group">
                                        <label for="Division">Division</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="District">District</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Upzilla">Upzilla</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="District">Union</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Ward">Ward</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Village">Village</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- current Address -->
                                <h2>Current Adderss</h2>
                                <div class="profile_form">
                                    <div class="form_group">
                                        <label for="Division">Division</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="District">District</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Upzilla">Upzilla</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="District">Union</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Ward">Ward</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form_group">
                                        <label for="Village">Village</label>
                                        <div class="form_select">
                                            <select id="gender">
                                                <option value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile_countinue" id="currNext">
                                    <input type="submit" value="submit">
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <div class="overlay"></div>
        <div class="bloodPopup">
            <form action="#" method="post">
                <div class="form_group">
                    <label for="weight">Weight</label>
                    <input type="number" id="weight" placeholder="Your Eeight" required>
                </div>
                <div class="form_group">
                    <label for="age">Age</label>
                    <input type="number" id="age" placeholder="Your Age" required>
                </div>
                <div class="form_group">
                    <label for="sms">Massage</label>
                    <textarea id="sms" rows="5" placeholder="Massage"></textarea>
                </div>
                <div class="profile_countinue">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </section>
    <!-- ---------- Profile end ---------- -->

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
    <script>

        // header
        const navToggol = document.querySelector('.nav_toggol');
        const closeToggol = document.querySelector('.close_toggol');
        navToggol.addEventListener('click',function () {
            document.querySelector('.nav_list').classList.add('show_list');
            closeToggol.style.display = "block"
            navToggol.style.display = "none"
        })

        closeToggol.addEventListener('click', function () {
            document.querySelector('.nav_list').classList.remove('show_list');
            closeToggol.style.display = "none"
            navToggol.style.display = "block"

        })

        // profile
        const bloodWant = document.querySelector('#bloodWant');
        const bloodPopup = document.querySelector('.bloodPopup');
        const profile = document.querySelector('.profile');
        const overlay = document.querySelector('.overlay');

        bloodWant.addEventListener('click', function (){
            overlay.style.display = 'block';
            bloodPopup.style.display = 'block';
            profile.style.filter = 'blur(4px)';
        })
        overlay.addEventListener('click', function (){
            bloodPopup.style.display = 'none';
            overlay.style.display = 'none';
            profile.style.filter = 'blur(0px)';
        })

        const myProfile = document.querySelector('#myProfile');
        const birthAdd = document.querySelector('#birthAdd');
        const ParmamentAdd = document.querySelector('#ParmAdd');
        const currentAdd = document.querySelector('#currAdd');
        const checkProfiles = document.querySelector('#checkProfiles');

        // continue__
        const profileNext = document.querySelector('#profileNext');
        const birthNext = document.querySelector('#birthNext');
        const parmNext = document.querySelector('#parmNext');
        const currNext = document.querySelector('#currNext');

        function allProfile(){
            myProfile.style.display = 'none';
            birthAdd.style.display = 'none';
            ParmamentAdd.style.display = 'none';
            currentAdd.style.display = 'none';
            checkProfiles.style.display = 'none';
        }
        profileNext.addEventListener('click', function (){
            allProfile()
            birthAdd.style.display = 'block';
        })
        birthNext.addEventListener('click', function (){
            allProfile()
            ParmamentAdd.style.display = 'block';
        })
        parmNext.addEventListener('click', function (){
            allProfile()
            currentAdd.style.display = 'block';
            console.log('clicked');
        })
        currNext.addEventListener('click', function (){
            allProfile()
            checkProfiles.style.display = 'block';
        })
        // ---------- Footer ----------
        const hero = document.querySelector('.hero');
        const privacyText = document.querySelector('.privacy_text');
        const aboutText = document.querySelector('.about_text');
        const transCondi = document.querySelector('.trans_condition');

        function footerAll(){
            hero.style.display = 'none';
            privacyText.style.display = 'none';
            aboutText.style.display = 'none';
            transCondi.style.display = 'none';
        }
        function Privacy() {
            footerAll();
            privacyText.style.display = 'block';
        }
        function About() {
            footerAll();
            aboutText.style.display = 'block';
        }
        function TransCondition() {
            footerAll();
            transCondi.style.display = 'block';
        }
    </script>
    <!-- ---------- JS end ---------- -->
@endsection
