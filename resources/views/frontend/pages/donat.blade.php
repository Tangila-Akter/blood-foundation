@extends('frontend.layouts.app')
@section('content')
<section class="donat hero">
    <div class="container">
        <div class="donat_head">
            <h2>Bank Information</h2>
            <button onclick="donatCei()"><a href="#"><b>Donation Certificate</b></a></button>
        </div>
            <div class="donat_profile">
                <div>
                    <h2>Donation Clarificarion Form</h2>
                    <form action="#" method="post">
                        <div class="profile_items">
                            <div class="profile_form">
                                <div class="form_group">
                                    <label for="Ammount">Ammount</label>
                                    <input type="number" id="name" placeholder="Ammount" required>
                                </div>

                                <div class="form_group">
                                    <label for="Recipient">Recipient No</label>
                                    <input type="number" id="fatherName" placeholder="Recipient" required>
                                </div>

                                <div class="form_group">
                                    <label for="Currency">Currency</label>
                                    <div class="form_select">
                                        <select id="Currency" required>
                                            <option value="select">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form_group">
                                    <label for="DonationR">Donation Reason</label>
                                    <div class="form_select">
                                        <select id="Donation Reason" required>
                                            <option value="select">Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form_group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" placeholder="Email" required>
                                </div>

                                <div class="form_group">
                                    <label for="Donars">Donar's Phone Number No</label>
                                    <input type="number" id="Donars" placeholder="Donar's Phone Number No" required>
                                </div>

                                <div class="form_group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" placeholder="Name" required>
                                </div>
                                <div class="form_group">
                                    <label for="Transaction">Transaction Id</label>
                                    <input type="text" id="Transaction" placeholder="Transaction Id" required>
                                </div>
                                <div class="form_group">
                                    <label for="Attachment">Attachment</label>
                                    <input type="file" id="Attachment" required>
                                </div>
                                <div class="form_group">
                                    <label for="message">Message</label>
                                    <br>
                                    <br>
                                    <textarea style="width: 100%; padding: 10px;" id="message" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="profile_countinue">
                                <input type="submit" value="continue">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <div class="donatBank_dtls">
            <div class="donat_bank">
                <div>
                    <h3>Payment With Mobail Banking</h3>
                    <ul>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            Bank Name:  TAP
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            A/C NAME: Bondhu Foundation</li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            A/C TYPE: Merchant
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            A/C NO: xxxxxx

                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            COUNTER NO: 1
                        </li>
                    </ul>
                </div>
                <div class="bank_dtl">
                    <div class="donat_logo">
                        <div class="donat_img">
                            <img src="{{asset('frontend/assets/Image/bkash.png')}}" alt="">
                        </div>
                    </div>
                    <h2>City Bank</h2>
                    <ul>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            Bank Name: TAP
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            A/C NAME: Bondhu Foundation</li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            A/C TYPE: Merchant
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            A/C NO: xxxxxx

                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            COUNTER NO: 1
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="donat_bank">
                <div>
                    <br>
                    <h3>Payment With International Bank</h3>
                    <ul>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            Bank Name: CITY BANK
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            A/C Name: Bondhu Foundation</li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            A/C No: xxxxxxxxxxxxxx
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            Seife Code: xxxxx
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            Routing No: xxxx
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            Branches: xxxxxxxxxxxx
                        </li>
                    </ul>
                </div>
                <div class="bank_dtl international_dtl">
                    <div class="donat_logo">
                        <div class="donat_img">
                            <img src="{{asset('frontend/assets/Image/bkash.png')}}" alt="">
                        </div>
                    </div>
                    <h2>International Bank</h2>
                    <ul>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            Bank Name: City Bank
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            A/C NAME: Bondhu Foundation</li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            A/C No: xxxxxxxxxxxx
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            Seife Code: xxxxxx

                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            Branches: xxxxxx
                        </li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="donat_bank">
                <div>
                    <br>
                    <h3>Payment With Bank</h3>
                    <ul>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            Paypal
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            donate@bondhu.org.bd
                        </li>
                        <!-- <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            A/C No: xxxxxxxxxxxxxx
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            Seife Code: xxxxx
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            Routing No: xxxx
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </span> 
                            Branches: xxxxxxxxxxxx
                        </li> -->
                    </ul>
                </div>
                
                <div class="bank_dtl">
                    <div class="donat_logo">
                        <div class="donat_img">
                            <img src="{{asset('frontend/assets/Image/bkash.png')}}" alt="">
                        </div>
                    </div>
                    <h2>Bank</h2>
                    <ul>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            Bank Name: TAP
                        </li>
                        <!-- <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            A/C NAME: Bondhu Foundation</li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            A/C TYPE: Merchant
                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            A/C NO: xxxxxx

                        </li>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span> 
                            COUNTER NO: 1
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
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

@endsection