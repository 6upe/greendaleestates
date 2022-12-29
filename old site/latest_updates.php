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
          <h5 class="modal-title" id="exampleModalLabel"><?php echo $getId[$i]['property_name'] ?></h5>
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
                          <img class="d-block w-100" src="<?php echo $getMedia[$k]['media_name'] ?>" alt="Second slide">
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

      

  <!-- find section -->
  <section class="find_section" style="margin-top: 120px;">
    <div class="container">
      <form action="">
        <div class=" form-row">
          <div class="col-md-5">
          <select onChange="change_estates();" id="estate-for" class="form-control form-select" aria-label="Default select example">
            <option selected>Select [Rent, Rent Out, Buy, Sale]</option>
            <option value="rent">Rent Property</option>
            <option value="rentOut">Rent Out Property</option>
            <option value="buy">Buy Property</option>
            <option value="sale">Sale Out Property</option>
          </select>
          </div>
          <div class="col-md-5">
            <input id="myInput" type="text" onkeyup="myFunction()" class="form-control" placeholder="Location">
          </div>
          <div class="col-md-2">
            <button type="submit" class="">
              search
            </button>
          </div>
        </div>

      </form>
    </div>
  </section>

  <!-- end find section -->

  <script>

function change_estates(){
  var estate_for = document.getElementById('estate-for').value;
  switch(estate_for){
    case 'rentOut':
      if(confirm('Fill in the following form to RENT OUT your Property')){
       let name = prompt('Enter Name:');
       let phone = prompt('Enter Phone Number:');
       let email =  prompt('Enter Email:');
       let desc = prompt('Description of Property:');
      
       let message = 'I want to rent out property, My name is: ' + name + ' Phone Number: ' + phone + ' Email: ' + email + ' Property Descirption: ' + desc;

        window.location.href = "https://wa.me/260962893773?text=" + message;
    }
      else
        window.location.href = "latest_updates.php";
        break;
      
    case 'sale':
      if(confirm('Fill in the following form to SALE your Property')){
       let name = prompt('Enter Name:');
       let phone = prompt('Enter Phone Number:');
       let email =  prompt('Enter Email:');
       let desc = prompt('Description of Property:');
      
       let message = 'I want to SALE property, My name is: ' + name + ' Phone Number: ' + phone + ' Email: ' + email + ' Property Descirption: ' + desc;

        window.location.href = "https://wa.me/260962893773?text=" + message;
    }
      else
        window.location.href = "latest_updates.php";
        break;
    
    
  }
}

function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("sale_container");
  li = ul.getElementsByTagName('li');



  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>




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

      
      <ul class="sale_container" id="sale_container" style="list-style: none;">
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
  

  <li class="box" id="property">
          <div class="img-box">
            <img src="<?php echo $ActiveMediaPath ?>" alt=""   width="150px" height="200px">
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
            

            <p>
              <?php echo $getId[$i]['property_desc']?>
            </p>

            <div class="property-control">
              <a href="" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg<?php echo $getId[$i]['property_id']?>">View More</a>
              <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter<?php echo $getId[$i]['property_id'] ?>"><?php 
              if($getId[$i]['estate_for'] == 'rent')
                echo 'Rent';
              else
                echo 'Buy';
              ?></a>

            </div>
          </div>
  </li>
  
  <?php

  }
 
?>
      </ul>
      
    </div>
    <div class="btn-box">
    <a href="index.php">
      Go Back
    </a>
  </div>
  </section>

  <!-- end sale section -->


  

  


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