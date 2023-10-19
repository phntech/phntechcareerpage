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
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">


</head>

<body>

    <!-- header section start -->
    <section class="Header_section">
        <div class="container-fluid">
            <div class="container">
            <div className="logo">
            <img src="{{ asset('img/phn_tech_logo.png') }}" alt="PHN_logo" />
          </div>
          <div className="header">
            <div className="row">
              <div
                className="col-sm-12 col-md-12 col-lg-6 col-12 header_details_div"
              >
                <p className="career_title">#JOB</p>
                <p className="header_title">
                  Join our Innovative Team and Shape the Future with us!
                </p>
                <p className="header_subtitle">
                  Explore exciting career opportunities at PHN Technology
                </p>

                <button className="apply_btn btn">Apply Now</button>
              </div>

              <div
                className="col-sm-12 col-md-12 col-lg-6 col-12 header_img_div"
              >
                <img
                  src="{{ asset('img/header_img.webp') }}"
                  alt="header_img"
                  className="header_img img-fluid"
                />
              </div>
            </div>
          </div>
            </div>
        </div>
    </section>
    <!-- header section end -->

</body>

</html>
