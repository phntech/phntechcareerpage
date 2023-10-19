<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/career_page.css') }}">
    <script src="{{ asset('js/career.js') }}"></script>
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
                            <p class="career_title">#JOB</p>
                            <p class="header_title">
                                Get IT jobs in your city
                            </p>
                            <p class="header_subtitle">
                                Explore exciting career opportunities at
                                PHN Technology
                            </p>

                            <button class="apply_btn btn">Apply Now</button>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-6 col-12 header_img_div">
                            <img src="{{ asset('img/header_img.webp') }}" alt="header_img" class="header_img img-fluid" />
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

                <form action="#" method="#" id="enquiryForm">
                @csrf
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <input type="text" class="form-control" name="first_name">
                            <label >First name*</label>
                            <span name="first_name"></span>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <input type="text" class="form-control">
                            <label for="last_name">Last name*</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <input type="text" class="form-control">
                            <label for="wtsp_mob_no">WhatsApp mobile number*</label>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                            <input type="text" class="form-control">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                          <select class="form-control">
                            <option value="state">State*</option>
                            <option value="maharashtra">Maharashtra</option>
                         </select>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                        <select class="form-control">
                            <option value="district">District*</option>
                            <option value="sangli">Sangli</option>
                         </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                        <select class="form-control">
                            <option value="taluka">Taluka*</option>
                            <option value="walwa">Walwa</option>
                         </select>
                        </div>
                        <div class="col-sm-6 col-lg-6 col-md-6 col-12">
                        <select class="form-control">
                            <option value="high_qualification">Highest qualification*</option>
                            <option value="bca">BCA</option>
                         </select>
                        </div>
                    </div>
                    <p class="captcha_title">Captcha</p>
                    <div class="row">
                        <div class="col-sm-1 col-lg-1 col-md-1 col-1">
                            11
                        </div>
                        <div class="col-sm-1 col-lg-1 col-md-1 col-1">
                            +
                        </div>
                        <div class="col-sm-1 col-lg-1 col-md-1 col-1">
                            3
                        </div>
                        <div class="col-sm-1 col-lg-1 col-md-1 col-1">
                            =
                        </div>
                        <div class="col-sm-4 col-lg-4 col-md-4 col-4">
                        <input type="text" class="form-control">
                            <label for="addtion">Enter the addition here</label>
                        </div>
                    </div>

                    <input type="submit" id="submit_btn"  value="Submit"> 
                </form>
            </div>
        </div>
    </section>
    <!-- form section end -->
</body>

</html>
