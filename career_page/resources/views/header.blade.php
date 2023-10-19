<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Page</title>

        <!-- bootstrap cdn -->
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
                <p className="career_title">#Career</p>
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
