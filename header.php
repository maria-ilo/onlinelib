<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>OnlineLib | #1 Online Library</title>
	<link rel="icon" href="img/favicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <script src="js/sweetalert.min.js"></script>

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
    
    if(isset($_GET['alert'])){
        switch($_GET['alert']){
            case 'reg_s':
            echo "<script> swal('Aunthentication','Registration Successful','success'); </script>";
            break;
            case 'reg_f':
            echo "<script> swal('Oooooppssss!','Registration unSuccessful','error'); </script>";
            break;
        }
        
    }

    ?>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logo-lib.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
            </ul>

            <ul class="nav-shop">
             
              <?php
              if(isset($_SESSION['customer_id'])){

                $customer_id = $_SESSION['customer_id'];
                $query = "SELECT * FROM users_dashboard WHERE customer_id = $customer_id";
                $result = mysqli_query($conn, $query);

                if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                    $name = $row['fullname'];
                    ?>
                  <li class="nav-item dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img style="width: 40px;" class="rounded-circle profile-user" src="img/tim-logo.png"
                            alt="">
                        <span class="d-none d-xl-inline-block ml-1">Hello <span class="text-primary"><?php echo $name; ?></span></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="ri-user-line align-middle mr-1"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="logout.php"><i class="ri-shut-down-line align-middle mr-1 text-danger"></i> Logout</a>
                    </div>
                  </li>
                    <?php
                  }
                }
              }
                ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->