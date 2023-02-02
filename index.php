<?php
  include 'php/db_connection.php';
?>
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
  <link rel="icon" type="image/png" href="/images/icon.ico">
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
          <form name="adminForm" onsubmit="return auth()" method="post">
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

  <?php
  for($i = 0; $i < count($getId); $i++){
?>
  <!-- PROPERTY MODAL STARTS -->

  <!-- <button type="button" class="btn btn-primary" >Large modal</button> -->

  <div class="modal fade bd-example-modal-lg<?php echo $getId[$i]['property_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">

        <div class="modal-header"> 
          <h5 class="modal-title" id="exampleModalLabel"><?php echo $getId[$i]['property_name'] ?> | <a href="">Watch Short Video </a></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <?php
              $mediaId = $getId[$i]['property_id'];
              // echo "Property ID: " . $mediaId;
              $getMedia = $con->prepare("select * from property_media where property_id = '$mediaId' ");
              $getMedia->execute();
              $getMedia = $getMedia->fetchAll(PDO::FETCH_ASSOC);

              $getAllMedia =  $con->prepare("select * from property_media");
              $getAllMedia->execute();
              $getAllMedia = $getAllMedia->fetchAll(PDO::FETCH_ASSOC);

                  // echo '<pre>';
                  // print_r($getAllMedia);
                  // echo '</pre>';
        ?>

        <div class="modal-body">
          <div id="carouselExampleControls<?php echo $getId[$i]['property_id'] ?>" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

            <?php
                for($k = 0; $k < count($getMedia); $k++){
                  
            ?>
                      <div class="carousel-item
                        <?php
                          if($k == 0)
                            echo ' active';
                        ?>
                      ">
                          <img class="d-block img-fluid mx-auto" src="<?php echo $getMedia[$k]['media_name'] ?>" alt="Second slide">
                      </div>
            <?php
                }
            ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls<?php echo $getId[$i]['property_id'] ?>" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls<?php echo $getId[$i]['property_id'] ?>" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="modal-footer">
          <span>
            <?php echo $getId[$i]['property_desc'] ?>
          </span>
          <hr>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
  <!-- PROPERTY MODAL ENDS -->
  <?php
  }
?>

<!-- RENT BUY MODAL STARTS -->
<?php
  for($i = 0; $i < count($getId); $i++){

    $j = $i + 1;

    $getActiveMedia = $con->prepare("select * from property_media where property_id = '$j'");
    $getActiveMedia->execute();
    $getActiveMedia = $getActiveMedia->fetchAll(PDO::FETCH_ASSOC);

    // if($i == 0)
    //   $ActiveMediaPath = $getAllMedia[0]['media_name'];
    // else
      $ActiveMediaPath = $getActiveMedia[0]['media_name'];
    ?>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter<?php echo $getId[$i]['property_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $getId[$i]['property_name'] ?> <b>K<?php echo $getId[$i]['price']?></b> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="box">
      <div class="img-box">
        <img src="<?php echo $ActiveMediaPath ?>" alt=""   width="450px" height="350px">
      </div>
      <small>
      
      <a href="" id="location">Location: <?php echo $getId[$i]['location']?></a>
    </small>
      <div class="detail-box">
        

        <p>
          <?php echo $getId[$i]['property_desc']?>
        </p>
    </div>
</div>
        <hr>
      <form name="r_form" action="send_request.php" method="post">
              <div>
                <input name="r_name" class="form-control my-3" type="text" placeholder="Name" required/>
              </div>
              <div>
                <input  name="r_email" class="form-control my-3" type="email" placeholder="Email" required />
              </div>
              <div>
                <input  name="r_phone" class="form-control my-3" type="text" placeholder="Phone Number" required />
              </div>
              <div>
                <input name="r_message" class="form-control my-3" type="text" class="message-box" placeholder="Message" required />
              </div>
              <input class="d-none" type="text" name="id" value="<?php echo $i?>">
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input name="send-request"  type="submit" class="btn btn-primary" value="Send Request">
      </div>
      </form>





    </div>
  </div>
</div>


<?php
  }
?>
<!-- RENT BUY MODAL ENDS -->




  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
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
                <a href="latest_updates.php">Latest Updates</a>
                <a href="about_us.php">About Us</a>
                <a href= "https://wa.me/260964840235">Chat with Us</a>
                <a onclick="openNav()" type="button" class="" data-toggle="modal" data-target="#exampleModal">Admin</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 offset-md-1">
            <div class="detail-box">
              <h1>
                <span> Real Estate</span> <br>
                Buy | Sale <br>
                <span class="span1">Rent</span>
              </h1>
              <p>
                Our commitment to professional excellence ensures
                that our clients receive the highest quality service.
              </p>
              <div class="btn-box">
                <a href="latest_updates.php" class="">
                  Get Started
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


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
            <a href="about_us.php">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- sale section -->

  <section class="sale_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          Latest Updates
        </h2>
        <p>
          Currently Available Estates on the market</p>
      </div>
      <div class="sale_container">

<?php
if(count($getId) >= 3)
  for($i = count($getId) - 1; $i > count($getId) - 4; $i--){ 

    $j = $i + 1;

    $getActiveMedia = $con->prepare("select * from property_media where property_id = '$j'");
    $getActiveMedia->execute();
    $getActiveMedia = $getActiveMedia->fetchAll(PDO::FETCH_ASSOC);

    // if($i == 0)
    //   $ActiveMediaPath = $getAllMedia[0]['media_name'];
    // else
      $ActiveMediaPath = $getActiveMedia[0]['media_name'];
    ?>
  

  <div class="box">
          <div class="img-box">
            <img src="<?php echo $ActiveMediaPath ?>" alt="" >
          </div>
          <small>
          <i>posted <?php echo $getId[$i]['date_posted']?></i> <br>
          <a href="" id="location">Location: <?php echo $getId[$i]['location']?></a>
        </small>
          <div class="detail-box">
            <h6>
              <?php echo $getId[$i]['property_name']?>
              <sup>K<?php echo $getId[$i]['price']?></sup>
            </h6>
            

            <small>
              <?php echo $getId[$i]['property_desc']?>
  </small>

            <div class="property-control">
              <a href="" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg<?php echo $getId[$i]['property_id']?>">View More</a>
              <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter<?php echo $getId[$i]['property_id'] ?>"><?php 
              if($getId[$i]['estate_for'] == 'rent')
                echo 'Rent';
              else
                echo 'Buy';
              ?></a>

            </div>
          </div>
        </div>
  
  <?php

  }
 
?>

        


      </div>
      <div class="btn-box">
        <a href="latest_updates.php">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end sale section -->



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
              <a href= "https://wa.me/260964840235">
              Get A Quote
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

  <!-- contact section -->

  <section class="contact_section ">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
              <!-- <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe> -->
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1944.0221745807235!2d28.6496405!3d-12.969014!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x196cb56c7af5163d%3A0xa39e58385120986e!2sMpelembe%20House!5e0!3m2!1sen!2szm!4v1671432625927!5m2!1sen!2szm"
                width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 ">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Name" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="d-flex ">
                <button>
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end contact section -->



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
                <small>info@greendale-estates.com</small>

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