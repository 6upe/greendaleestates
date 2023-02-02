<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="Estate, House, Apartment, Rent, Buy, Land" />
  <meta name="description" content="Greendale Estate Limited is a pre-eminent focused property
  company with a large, well balanced portfolio comprised of residential,
  commercial and mixed-use properties. It is renowned for its
  impressive development of residential properties and its landmark
  development of a shopping mall in Zambia.
  The Company also has a small but growing portfolio of property
  investments in Nigeria and
  an interest in prop erty
  development acros s borders." />
  <meta name="author" content="Greendale Head Office" />

  <title>Greendale</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="icon" type="image/png" href="icon.png">
</head>

<body>

  <!-- ADMIN MODAL LOG IN STARTS -->

  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade mt-5" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Admin Log In</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form name="adminForm" action="/admin.php" onsubmit="return auth()" method="get">
            <div class="form-group">
              <!-- <label for="inputEmail">Email</label> -->
              <input name="user_email" type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
              <!-- <label for="inputPassword">Password</label> -->
              <input name="user_password" type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
            <!-- <div class="form-group">
              <label class="form-check-label"><input type="checkbox"> Remember me</label>
            </div> -->
            <input type="submit" value="Sign In"  class="btn btn-success"/>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADMIN MODAL LOG IN ENDS -->


    <!-- header section strats -->
    <header class="header_section" style="background-color: rgb(241, 241, 241);">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.php">
            <img class="logo" src="images/logo1.png" alt="" />
          </a>
          <div class="navbar-collapse" id="">
            <!-- <ul class="navbar-nav justify-content-between ">
              <div class="User_option">
                <li class="">
                  <a type="button" class="" data-toggle="modal" data-target="#exampleModal">
                    Admin
                  </a>
                </li>
              </div>
            </ul> -->

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="/latest_updates.php">Latest Updates</a>
                <a href="/about_us.php">About Us</a>
                <a href="">Chat with Us</a>
                <a onclick="openNav()" type="button" class="" data-toggle="modal" data-target="#exampleModal">Admin</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->


  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    
    <div class="square-box">
      <img src="images/square.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About <span class="green">Greendale</span>
              </h2>
            </div>
            <p>
              Greendale Estate Limited is a pre-eminent focused property
              company with a large, well balanced portfolio comprised of residential,
              commercial and mixed-use properties. It is renowned for its
              impressive development of residential properties and its landmark
              development of a shopping mall in Zambia.</p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- deal section -->

  <section class="deal_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Make a Deal with Us!
              </h2>
            </div>
            <p>
              We aspire to
              provide flawless execution and delivery of our products and
              services. execution and delivery of our products and services.</p>
            <a href="">
              Download Company Profile
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <div class="box b1">
              <img src="images/d-1.jpg" alt="">
            </div>
            <div class="box b1">
              <img src="images/d-2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end deal section -->


  <!-- us section -->
  <section class="us_section layout_padding2">

    <div class="container">
      <div class="heading_container">
        <h2>
          Vision & Mission
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-1.png" alt="">
            </div>
            <div class="detail-box">
              <h3 class="price">
                Mission
              </h3>
              <h6>
                To be a recognized leader
                in the Property Management
                industry in Zambia and
                then Africa; while maintaining
                our authentic level of service
                founded on basic core values
                of integrity and partnership.
              </h6>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-1.png" alt="">
            </div>
            <div class="detail-box">
              <h3 class="price">
                Vision
              </h3>
              <h6>
                To be a recognized leader
                in the Property Management
                industry in Zambia and
                then Africa; while maintaining
                our authentic level of service
                founded on basic core values
                of integrity and partnership.
              </h6>
            </div>
          </div>
        </div>




      </div>
      <!-- <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div> -->
    </div>
  </section>

  <!-- end us section -->

  <!-- client secction -->

  <section class="client_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          Our Core Values
        </h2>
      </div>
      <div class="client_container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <div class="box">

                <div class="detail-box">
                  <h5>
                    <span class="green">Integrity</span>
                    <hr>
                  </h5>
                  <p>
                    We embrace the highest standards of ethical behavior
                    and transparency in every aspect of our business to yield a
                    company that is trusted by its clients and stakeholders.</p>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="box">

                <div class="detail-box">
                  <h5>
                    <span class="green">Partnership</span>
                    <hr>
                  </h5>
                  <p>
                    Our success and delivery of quality programs and
                    services are largely dependent upon the partnerships that we
                    create with all of our internal and external stakeholders. </p>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="box">

                <div class="detail-box">
                  <h5>
                    <span class="green">Excellence</span>
                    <hr>
                  </h5>
                  <p>
                    Our commitment to professional excellence ensures
                    that our clients receive the highest quality service. We aspire to
                    provide flawless execution and delivery of our products and
                    services. execution and delivery of our products and services.</p>
                </div>
              </div>
            </div>

            <div class="carousel-item ">
              <div class="box">

                <div class="detail-box">
                  <h5>
                    <span class="green">Team Work</span>
                    <hr>
                  </h5>
                  <p>
                    Our culture of teamwork allows us to combine the
                    quality and expertise of our professional staff to deliver optimum
                    solutions to our clients.</p>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="box">

                <div class="detail-box">
                  <h5>
                    <span class="green">Innovation</span>
                    <hr>
                  </h5>
                  <p>
                    We thrive on creativity and ingenuity. In today’s fastpaced
                    technological climate, innovative ideas, concepts, and
                    processes are essential to the continued success and growth of a
                    company.</p>
                </div>
              </div>
            </div>

            <div class="carousel-item ">
              <div class="box">

                <div class="detail-box">
                  <h5>
                    <span class="green">Leadership</span>
                    <hr>
                  </h5>
                  <p>
                    The spirit of leadership is instilled in every
                    employee.</p>
                </div>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- end client section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              Our Offices
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location.png" width="18px" alt="">
              </div>
              <p>
                Room 207, <br>
                2nd Floor, Mpelembe House<br>
                Broadway Round About<br>
                Ndola - Zambia<br>
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/phone.png" width="12px" alt="">
              </div>
              <p>
                +260 969 941801 <br>
                +260 768 660612
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/mail.png" width="18px" alt="">
              </div>
              <p>
                <small>greenadaleestateltd@gmail.com</small>

              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              On public holidays & other days
            </h5>
            <p> <i>We are available to provide technical support services via our
                mobile access number(s) that connects our client directly to
                the attendant engineer for the site; depending on the nature of
                request or help/service needed, unless otherwise stated in our
                SLA.</i>

            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_links">
            <h5>
              For all enquiries and technical support:
            </h5>
            <ul>
              <li>
                <a href="">
                  We offer:
                  24 Hours support
                  7 Days a week
                  365 days a year
                </a>
              </li>
              <li>
                <a href="">
                  Mondays to Fridays:
                  From 8am to 6pm
                </a>
              </li>

            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <div class="container">
      <!-- <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p> -->
    </div>
  </section>
  <!-- end  footer section -->


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript" src="index.js"></script>


</body>

</html>