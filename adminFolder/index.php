<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greendale | Admin</title>
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
                            <input name="user_email" type="email" class="form-control" id="inputEmail"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <!-- <label for="inputPassword">Password</label> -->
                            <input name="user_password" type="password" class="form-control" id="inputPassword"
                                placeholder="Password">
                        </div>
                        <!-- <div class="form-group">
              <label class="form-check-label"><input type="checkbox"> Remember me</label>
            </div> -->
                        <input type="submit" value="Sign In" class="btn btn-success" />
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
                            <a class="btn btn-warning" onclick="alert('Call/Whatsapp: +260 962 893 773')">Get Help</a>
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
                            <span> Welcome!</span>
                        </h1>

                        <div class="btn-box">
                            <a href="" class="" data-toggle="modal" data-target="#exampleModal">
                                Log In
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="index.js"></script>


</body>

</html>