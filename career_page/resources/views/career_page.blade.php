<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Page</title>

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


    <link rel="stylesheet" href="{{ asset('css/career_page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">

    <script src="{{ asset('js/career.js') }}"></script>
    <script src="{{ asset('js/states.js') }}"></script>
</head>

<body>

    <!-- header section start -->
    <section class="Header_section">
        <div class="container-fluid">
            <div class="container">
                <div class="logo">
                    <img src="{{ asset('img/phn_tech_logo.png') }}" alt="PHN_logo" />
                </div>

                <div class="header">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-12 header_details_div">

                            <p class="header_title">
                                Get <span style="color:#3C50E0;  text-transform: uppercase;"> IT jobs</span> in your
                                city
                            </p>
                            <div class="ul_list">
                                <ul class="mobile_data_list">
                                    <li>Any Graduate/12th Pass/Housewife can apply</li>
                                    <li> No IT knowledge is required</li>
                                    <li> Company will provide job with training</li>
                                    <li> Industry's Best salary and 100% Job guarantee</li>
                                    <li> 500+ Vacancies for your city</li>
                                </ul>
                            </div>
                            <p class="header_subtitle">
                                Explore exciting career opportunities at
                                PHN Technology
                            </p>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-6 col-12 header_img_div">
                            <img src="{{ asset('img/header_img.webp') }}" alt="header_img" class="img-fluid desktop_header_img" />
                            <img src="{{ asset('img/header_img_mob.webp') }}" alt="header_img" class="img-fluid mobile_header_img" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header section end -->

    <!-- form section start-->
    <section class="Form_section">
        <div class="container-fluid">
            <div class="container">
                @if (\Session::has('otpcorrect'))
                <div class="alert alert-success" id="alert_fail_id">
                    {!! \Session::get('otpcorrect') !!}
                </div>
                @endif
                <p class="apply_text">Apply</p>

                <form id="enquiryForm" method="POST" action="/application">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <input type="text" class="form-control focus-input" placeholder="First name*" name="first_name" id="first_name">
                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <input type="text" class="form-control focus-input" placeholder="Last name*" name="last_name" id="last_name">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <input type="text" class="form-control focus-input" placeholder="WhatsApp mobile number*" name="wtsp_mob_no" id="wtsp_mob_no">
                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <input type="text" class="form-control focus-input" placeholder="Email" name="email" id="email">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <select class="form-control " name="state" id="state">
                                <option value="">State*</option>
                                <option value="maharashtra">Maharashtra</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <select class="form-control " name="district" id="district_dropdown">
                                <option value="">District*</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <select class="form-control " name="taluka" id="taluka_dropdown">
                                <option value="">Taluka*</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <select class="form-control " name="qualification" id="qualification_dropdown">
                                <option value="">Highest qualification*</option>
                                <option value="ssc">SSC</option>
                                <option value="hsc">HSC</option>
                                <option value="graduate">Graduate</option>
                                <option value="postgraduate">Post Graduate</option>
                                <option value="iti">ITI</option>
                                <option value="diploma">Diploma</option>
                                <option value="mcvc">MCVC</option>
                            </select>
                        </div>
                    </div>
                    <p class="captcha_title">Captcha</p>
                    <div class="row ml-1">
                        <div class="col-sm-1 col-lg-1 col-md-1 col-1 number_div">
                            <input type="text" class="random_num mt-2" value="11" readonly name="captcha_num_one" id="captcha_num_one" />
                        </div>
                        <div class="col-sm-1 col-lg-1 col-md-1 col-1">
                            <p class="plus_equal_icon">+</p>
                        </div>
                        <div class="col-sm-1 col-lg-1 col-md-1 col-1 number_div">
                            <input type="text" class="random_num mt-2" value="3" readonly name="captcha_num_two" id="captcha_num_two" />
                        </div>
                        <div class="col-sm-1 col-lg-1 col-md-1 col-1">
                            <p class="plus_equal_icon">=</p>
                        </div>
                        <div class="col-sm-8 col-lg-4 col-md-8 col">
                            <input type="text" class="form-control focus-input mt-0" placeholder="Enter addition" name="addition" id="addition">
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" id="submit_btn" class="submit_btn btn" value="Submit" data-toggle="modal">
                    </div>

                </form>



                <div class="otp_modal">
                    @if (\Session::has('status') || \Session::has('otpincorrect'))
                    <div class="modals" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form method="POST" action="/OTPverify">
                                    @csrf
                                    <div class="modal_body text-center">
                                        <img src="{{ asset('/img/otp_success_animation.gif') }}" alt="">
                                        <p class="verify_title">Verify mobile number</p>
                                        <p class="verify_mob_no">OTP is sent to <span style="color: #00005C;">9876543210</span></p>


                                        <div class="row mt-3">
                                            <div class="col-2">
                                                <input type="text" name="num_one" id="num_one" class="num_input" maxlength="1" style="background:  @if (\Session::has('otpincorrect')) #FEE @endif;">
                                            </div>
                                            <div class="col-2">
                                                <input type="text" name="num_two" id="num_two" class="num_input" maxlength="1">
                                            </div>
                                            <div class="col-2">
                                                <input type="text" name="num_three" id="num_three" class="num_input" maxlength="1">
                                            </div>
                                            <div class="col-2">
                                                <input type="text" name="num_four" id="num_four" class="num_input" maxlength="1">
                                            </div>
                                            <div class="col-2">
                                                <input type="text" name="num_five" id="num_five" class="num_input" maxlength="1">
                                            </div>
                                            <div class="col-2">
                                                <input type="text" name="num_six" id="num_six" class="num_input" maxlength="1">
                                            </div>
                                        </div>
                                        @if (\Session::has('otpincorrect'))

                                        <div class="wrong_otp" id="alert_fail_id">
                                            {!! \Session::get('otpincorrect') !!}
                                        </div>
                                        @endif
                                        <!-- <p class="otp_time">Your OTP will expire in <span style="font-weight: 500;">00:30</span></p> -->
                                        <a href="#" class="resend_otp"> Resend OTP</a>

                                    </div>
                                    <div class="text-center modal_buttons">
                                        <button type="button" class="btn cancel_btn mr-3" data-dismiss="modal">CANCEL</button>
                                        <input type="submit" value="SUBMIT" class="btn otp_submit_btn">
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>



            </div>
        </div>
        </div>
        </div>



        </div>
        </div>

    </section>
    <!-- form section end -->
</body>

</html>
