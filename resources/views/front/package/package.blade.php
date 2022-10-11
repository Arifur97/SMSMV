@extends('front.master')

@section('body')
    <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h2 class="text-center" style="margin-top: 150px">Simple Pricing with no hidden costs</h2>
            <hr/>

            <div class="text-center">
                <h6 class="pb-3">Where are you sending to?</h6>

                <div style="margin-left: 35%;margin-right: 35%">
                    <select class="m-auto" name="country_id" id="country_id" >
                        <option value="0" disabled selected data-description=" ">Select Country</option>
                        @foreach($countries as $country)
                            <option  value="{{$country->id}}" data-imagesrc="{{asset('country_images/'.$country->image)}}" data-description=" ">{{$country->name}}</option>
                        @endforeach
                    </select>
                    <small style="display: none;" id="show1" class="text-danger ">Select Country</small>
                </div>

            </div>

            <div class="text-center m-auto">
                <h6 class="pb-3 pt-3">Select Operator</h6>
                <select class="mdb-select md-form" id="operator_id" name="operator_id" onchange="getRate();">
                    <option value="0" selected disabled>SELECT COUNTRY FIRST</option>
                </select>
                <small style="display: none;" id="show2" class="text-danger ">Select Operator</small>

            </div>

            <div class="abt-inner-one pb-lg-3 pb-3 mt-5 text-center" style="background-color: whitesmoke">
                <!--<h5 class="mb-5">How many messages will you send per month?</h5>-->

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" style="font-size: 20px" id="home-tab" data-toggle="tab" href="#500" role="tab" aria-controls="home" aria-selected="true"><span class="fa fa-caret-square-right"></span> Pay-as-you-go</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 20px" id="profile-tab" data-toggle="tab" href="#1000" role="tab" aria-controls="profile" aria-selected="false"><span class="fa fa-bookmark"></span> Custom Packages for High Volumes</a>
                    </li>
                </ul>


                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="500" role="tabpanel" aria-labelledby="home-tab">
                        <div class="m-auto col-md-12 priceing-tag">

                            <div class="">

                                <h5 class="pt-5 pb-5">Have a look at our pay-as-you-go rates by dragging the slider below</h5>

                                <div class="row package-row">
                                    <div class="col-12 package-options">
                                        <div class="row text-white" style="background-color: #ff6600;margin-left: 50px;margin-right: 50px;border-radius: 10px">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tab1-option-col1">
                                                <div class="tab1-divide-lines">
                                                    <p class="option-top mt-5">NO. OF SMSES</p>
                                                    <p class="option-numbes" style="font-size: 57px" id="num-sms">200</p>
                                                    <p class="option-dot mb-5">.</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 tab1-option-col2">
                                                <div class="tab1-divide-lines">
                                                    <p class="option-top mt-5">COST PER SMS</p>
                                                    <p class="option-numbes" style="font-size: 57px" id="sms_cost">0</p>
                                                    <p id="sms-cost-vat-label" class="option-tax mb-5" style="color: rgb(255, 255, 255);">Excl. VAT</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 tab1-option-col3">
                                                <p class="option-top pt-5">TOTAL PACKAGE COST</p>
                                                <p class="option-numbes" style="font-size: 57px" id="package-cost">0</p>
                                                <p id="package-cost-vat-label" class="option-tax pb-5">Incl. VAT</p>
                                            </div>
                                        </div>
                                        <p class="text-dark font-italic">*The estimated no. of SMSes is based on the average credit cost of messages over the last month to that country. (more details shown below)</p>
                                    </div>
                                </div>

                                <style>
                                    .slidecontainer {
                                        width: 85%;
                                        margin: auto;
                                        margin-top: 50px;
                                        margin-bottom: 50px;
                                    }

                                    .slider {
                                        -webkit-appearance: none;
                                        width: 100%;
                                        height: 10px;
                                        border-radius: 5px;
                                        background: black;
                                        outline: none;
                                        opacity: 0.7;
                                        -webkit-transition: .2s;
                                        transition: opacity .2s;
                                    }

                                    .slider:hover {
                                        opacity: 1;
                                    }

                                    .slider::-webkit-slider-thumb {
                                        -webkit-appearance: none;
                                        appearance: none;
                                        width: 23px;
                                        height: 24px;
                                        border: 0;
                                        background-color: #ff6600;
                                        border-radius: 50px;
                                        cursor: pointer;
                                    }

                                    .slider::-moz-range-thumb {
                                        width: 23px;
                                        height: 24px;
                                        border: 0;
                                        background-color: #ff6600;
                                        border-radius: 50px;
                                        cursor: pointer;
                                    }
                                </style>

                                <div class="slidecontainer">
                                    <input type="range" min="200" max="50000" value="200" class="slider" id="myRange" onchange="sliderChange(this)">
                                    <p style="font-size: 25px">Credits: <span style="color: #ff6600" id="demo"></span></p>
                                </div>

                                <script>
                                    var slider = document.getElementById("myRange");
                                    var output = document.getElementById("demo");
                                    output.innerHTML = slider.value;

                                    slider.oninput = function() {
                                        output.innerHTML = this.value;
                                    }
                                </script>

                                <div class="m-auto">
                                    <a href="#"><button class="btn text-white mb-5" style="background-color: #ff6600">Buy SMS Credits Now</button></a>
                                </div>

                                <section style="background-color: white">
                                    <div class="container">
                                        <div class="row">
                                            <h1 class="m-auto pt-5">Supported Networks & How They Use Credits</h1>
                                            <h5 class="m-auto pb-5">The number of credits used to send a single SMS will vary between networks.</h5>
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th style="font-weight: bold;font-size: 16px;color: #6c849e" class="table-font" scope="col">Name</th>
                                                    <th style="font-weight: bold;font-size: 16px;color: #6c849e" scope="col">Standard Rate</th>
                                                </tr>
                                                </thead>
                                                <tbody id="operatorRateTable">
                                                <tr>
                                                    <th style="font-weight: bold;font-size: 16px;color: #6c849e" scope="row">3 UK</th>
                                                    <td style="font-weight: bold;font-size: 16px;color: #6c849e">1.00</td>
                                                </tr>
                                                <tr>
                                                    <th style="font-weight: bold;font-size: 16px;color: #6c849e" scope="row">Cable&Wireless</th>
                                                    <td style="font-weight: bold;font-size: 16px;color: #6c849e">1.00</td>
                                                </tr>
                                                <tr>
                                                    <th style="font-weight: bold;font-size: 16px;color: #6c849e" scope="row">Cloud9</th>
                                                    <td style="font-weight: bold;font-size: 16px;color: #6c849e">1.00</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </section>

                            </div>

                        </div>
                    </div>


                    <div class="tab-pane fade" id="1000" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="m-auto col-md-12 priceing-tag ">

                            <div class="">

                                <h5 class="pt-5 text-dark">We offer custom packages for bundles over <span class="font-weight-bold">50,000</span> SMS credits.</h5>
                                <div class="pb-4">________</div>
                                <h6 class="pb-4">Features Include:</h6>

                                <div class="row package-row">
                                    <div class="col-12 package-options">
                                        <div class="row " style="color: #818182;margin-left: 50px;margin-right: 50px;border-radius: 10px">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 tab1-option-col1">
                                                <div class="tab1-divide-lines">
                                                    <p class="option-top mt-5"><span class="fa fa-check fa-3x mb-2"></span></p>
                                                    <p class="option-numbes mb-5" style="font-size: 18px">Premium Support</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 tab1-option-col2">
                                                <div class="tab1-divide-lines">
                                                    <p class="option-top mt-5"><span class="fa fa-tags fa-3x mb-2"></span></p>
                                                    <p class="option-numbes mb-5" style="font-size: 18px">Premium Support</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 tab1-option-col3">
                                                <p class="option-top mt-5"><span class="fa fa-smile fa-3x mb-2"></span></p>
                                                <p class="option-numbes mb-5" style="font-size: 18px">Premium Support</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <section style="background-color: darkblue">
                                    <div class="container">
                                        <div class="">
                                            <h6 class="text-white pt-5 pb-3">For more information, please contact us</h6>
                                            <div class="">
                                                <a href="#"><button class="btn text-white mb-5" style="background-color: #ff6600">Contacts Sales</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>

                        </div>
                    </div>


                    <div class="tab-pane fade" id="2000" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="m-auto col-md-6 priceing-tag card">

                            <div class="table_cost clr-three ">
                                <ul class="nav nav-tabs" id="myTab-three" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="one-three" data-toggle="tab" href="#five" role="tab" aria-controls="home" aria-selected="true">Monthly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-three" data-toggle="tab" href="#six" role="tab" aria-controls="profile" aria-selected="false">Annually</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent-three">
                                    <div class="tab-pane fade show active" id="five" role="tabpanel" aria-labelledby="one-three">
                                        <span class="cost">25<p>$/ Month</p></span>
                                        <h5>500 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                    <div class="tab-pane fade" id="six" role="tabpanel" aria-labelledby="two-three">
                                        <span class="cost">33.75<p>$/ Month</p></span>
                                        <h5>12,000 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                </div>
                            </div>

                            <div class="price-tags-grid">
                                <div class="agileits-banner-grid">
                                    <div class="list-price">
                                        <ul class="text-left ml-5">
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free incoming SMS messages</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited contacts</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free number that’s all yours</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Short code access</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Support 7 days per week</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited keywords</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Rollover credits</li>
                                        </ul>
                                    </div>
                                    <div class="buy-buttn  ">
                                        <a class="w3_play_icon1 scroll" href="#join-form"> Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="3000" role="tabpanel" aria-labelledby="contact-tab-two">
                        <div class="m-auto col-md-6 priceing-tag card">

                            <div class="table_cost clr-three ">
                                <ul class="nav nav-tabs" id="myTab-four" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="one-four" data-toggle="tab" href="#seven" role="tab" aria-controls="home" aria-selected="true">Monthly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-four" data-toggle="tab" href="#eight" role="tab" aria-controls="profile" aria-selected="false">Annually</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent-four">
                                    <div class="tab-pane fade show active" id="seven" role="tabpanel" aria-labelledby="one-four">
                                        <span class="cost">25<p>$/ Month</p></span>
                                        <h5>500 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                    <div class="tab-pane fade" id="eight" role="tabpanel" aria-labelledby="two-four">
                                        <span class="cost">33.75<p>$/ Month</p></span>
                                        <h5>12,000 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                </div>
                            </div>

                            <div class="price-tags-grid">
                                <div class="agileits-banner-grid">
                                    <div class="list-price">
                                        <ul class="text-left ml-5">
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free incoming SMS messages</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited contacts</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free number that’s all yours</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Short code access</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Support 7 days per week</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited keywords</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Rollover credits</li>
                                        </ul>
                                    </div>
                                    <div class="buy-buttn  ">
                                        <a class="w3_play_icon1 scroll" href="#join-form"> Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="7500" role="tabpanel" aria-labelledby="contact-tab-three">
                        <div class="m-auto col-md-6 priceing-tag card">

                            <div class="table_cost clr-three ">
                                <ul class="nav nav-tabs" id="myTab-five" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="one-five" data-toggle="tab" href="#nine" role="tab" aria-controls="home" aria-selected="true">Monthly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-five" data-toggle="tab" href="#teen" role="tab" aria-controls="profile" aria-selected="false">Annually</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent-five">
                                    <div class="tab-pane fade show active" id="nine" role="tabpanel" aria-labelledby="one-five">
                                        <span class="cost">25<p>$/ Month</p></span>
                                        <h5>500 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                    <div class="tab-pane fade" id="teen" role="tabpanel" aria-labelledby="two-five">
                                        <span class="cost">33.75<p>$/ Month</p></span>
                                        <h5>12,000 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                </div>
                            </div>

                            <div class="price-tags-grid">
                                <div class="agileits-banner-grid">
                                    <div class="list-price">
                                        <ul class="text-left ml-5">
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free incoming SMS messages</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited contacts</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free number that’s all yours</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Short code access</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Support 7 days per week</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited keywords</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Rollover credits</li>
                                        </ul>
                                    </div>
                                    <div class="buy-buttn  ">
                                        <a class="w3_play_icon1 scroll" href="#join-form"> Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="25000" role="tabpanel" aria-labelledby="contact-tab-four">
                        <div class="m-auto col-md-6 priceing-tag card">

                            <div class="table_cost clr-three ">
                                <ul class="nav nav-tabs" id="myTab-six" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="one-six" data-toggle="tab" href="#eleven" role="tab" aria-controls="home" aria-selected="true">Monthly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-six" data-toggle="tab" href="#twelve" role="tab" aria-controls="profile" aria-selected="false">Annually</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent-six">
                                    <div class="tab-pane fade show active" id="eleven" role="tabpanel" aria-labelledby="one-six">
                                        <span class="cost">25<p>$/ Month</p></span>
                                        <h5>500 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                    <div class="tab-pane fade" id="twelve" role="tabpanel" aria-labelledby="two-six">
                                        <span class="cost">33.75<p>$/ Month</p></span>
                                        <h5>12,000 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                </div>
                            </div>

                            <div class="price-tags-grid">
                                <div class="agileits-banner-grid">
                                    <div class="list-price">
                                        <ul class="text-left ml-5">
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free incoming SMS messages</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited contacts</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free number that’s all yours</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Short code access</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Support 7 days per week</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited keywords</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Rollover credits</li>
                                        </ul>
                                    </div>
                                    <div class="buy-buttn  ">
                                        <a class="w3_play_icon1 scroll" href="#join-form"> Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="50000" role="tabpanel" aria-labelledby="contact-tab-five">
                        <div class="m-auto col-md-6 priceing-tag card">

                            <div class="table_cost clr-three ">
                                <ul class="nav nav-tabs" id="myTab-seven" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="one-seven" data-toggle="tab" href="#thirteen" role="tab" aria-controls="home" aria-selected="true">Monthly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-seven" data-toggle="tab" href="#fourteen" role="tab" aria-controls="profile" aria-selected="false">Annually</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent-seven">
                                    <div class="tab-pane fade show active" id="thirteen" role="tabpanel" aria-labelledby="one-seven">
                                        <span class="cost">25<p>$/ Month</p></span>
                                        <h5>500 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                    <div class="tab-pane fade" id="fourteen" role="tabpanel" aria-labelledby="two-seven">
                                        <span class="cost">33.75<p>$/ Month</p></span>
                                        <h5>12,000 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                </div>
                            </div>

                            <div class="price-tags-grid">
                                <div class="agileits-banner-grid">
                                    <div class="list-price">
                                        <ul class="text-left ml-5">
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free incoming SMS messages</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited contacts</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free number that’s all yours</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Short code access</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Support 7 days per week</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited keywords</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Rollover credits</li>
                                        </ul>
                                    </div>
                                    <div class="buy-buttn  ">
                                        <a class="w3_play_icon1 scroll" href="#join-form"> Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="more-than50000" role="tabpanel" aria-labelledby="contact-tab-six">
                        <div class="m-auto col-md-6 priceing-tag card">

                            <div class="table_cost clr-three ">
                                <ul class="nav nav-tabs" id="myTab-eight" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="one-eight" data-toggle="tab" href="#fifteen" role="tab" aria-controls="home" aria-selected="true">Monthly</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="two-eight" data-toggle="tab" href="#sixteen" role="tab" aria-controls="profile" aria-selected="false">Annually</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent-eight">
                                    <div class="tab-pane fade show active" id="fifteen" role="tabpanel" aria-labelledby="one-eight">
                                        <span class="cost">25<p>$/ Month</p></span>
                                        <h5>500 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                    <div class="tab-pane fade" id="sixteen" role="tabpanel" aria-labelledby="two-eight">
                                        <span class="cost">33.75<p>$/ Month</p></span>
                                        <h5>12,000 credits </h5>
                                        <p>4.5 ¢ per additional credit </p>
                                    </div>
                                </div>
                            </div>

                            <div class="price-tags-grid">
                                <div class="agileits-banner-grid">
                                    <div class="list-price">
                                        <ul class="text-left ml-5">
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free incoming SMS messages</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited contacts</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Free number that’s all yours</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Short code access</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Support 7 days per week</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Unlimited keywords</li>
                                            <li><img src="{{ asset('/') }}front/images/rightsign.png" alt="" style="height: 30px;width: 30px"> Rollover credits</li>
                                        </ul>
                                    </div>
                                    <div class="buy-buttn  ">
                                        <a class="w3_play_icon1 scroll" href="#join-form"> Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!--//about-->
    <div class="text-center mb-5">
        <a href="{{ route('pricing') }}" class="btn text-white" style="background-color: #ff6600">Our Pricing <span class="fa fa-arrow-right"></span></a>
    </div>


    <!--about-two-->
    <section class="abt-inner-agile py-lg-4 py-md-3 py-sm-3 py-3">
        <div class="container-fluid text-center py-lg-5 py-md-4 py-sm-4 py-3">
            <div class="row">
                @foreach($features as $feature)
                    <div class="col-lg-3 col-md-3 col-sm-6 abut-inner-img">
                        <div class="using-icon-inner" style="height: 350px;border-radius: 10px">
                            <img src="{{ asset($feature->image) }}" alt="">
                            <div class="w3l-abt-sub-txt mt-lg-4 mt-3">
                                <h4 class="mt-3">{{ $feature->title }}</h4>
                                <p>{{ $feature->des }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

<script>

    function sliderChange(elm) {
        var sms = document.getElementById("num-sms");
        sms.innerText = elm.value;
        calculateTotal();
    }

    function calculateTotal() {
        var totalSms = parseFloat(document.getElementById("num-sms").innerText);
        var rate = parseFloat(document.getElementById("sms_cost").innerText);
        var total = totalSms * rate;
        var totalCost = document.getElementById("package-cost");
        totalCost.innerText = total.toString();

    }
    function getOperator(id) {

        // console.log(document.getElementById('country_id'));
        $.ajax({
            url: '{{ url('country/get-operator') }}',
            type: 'get',
            data: {id:id},
            success: function (data) {
                var operator_id = $('#operator_id');
                document.getElementById("show1").style.display = 'none';
                operator_id.empty();
                operator_id.append('<option value="0" disabled selected>' + "SELECT OPERATOR"+ '</option>');
                var tbody = document.getElementById("operatorRateTable");
                tbody.innerHTML = "";
                for (var i = 0; i < data.operators.length; i++) {
                    operator_id.append('<option value=' + data.operators[i].id + '>' + data.operators[i].name + '</option>');

                    var tr = document.createElement("tr");
                    var th = document.createElement("th");
                    th.setAttribute("style", "font-weight: bold;font-size: 16px;color: #6c849e");
                    th.setAttribute("scope", "row");
                    th.innerText = data.operators[i].name;
                    tr.appendChild(th);
                    var td = document.createElement("td");
                    td.setAttribute("style", "font-weight: bold;font-size: 16px;color: #6c849e");
                    td.innerText = data.operators[i].rate;
                    tr.appendChild(td);
                    tbody.appendChild(tr);
                }



                var rate = document.getElementById("sms_cost");
                rate.innerText = "0";
                calculateTotal();
            },
        })
    }
    function getRate() {
        var id = document.getElementById('operator_id').value;
        $.ajax({
            url: '{{ url('operator/get-rate') }}',
            type: 'get',
            data: {id:id},
            success: function (data) {
                var sms_cost = document.getElementById("sms_cost");
                document.getElementById("show2").style.display = 'none';

                sms_cost.innerText = data.operators.rate.toString();
                console.log(data.operators.rate);
                setTimeout(calculateTotal(), 2000);

            },
        });


    }
</script>

@push('jscript')
    <script src="{{ asset('/') }}front/ddslick/ddslick/dist/jquery.ddslick.min.js"></script>
    <script src="{{ asset('/') }}front/ddslick/style.js"></script>
@endpush

@push('customCss')
    <script src="{{ asset('/') }}front/ddslick/style.css"></script>
@endpush