<?php
// Initialize the session
session_start();
require_once "database/config.php";
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
     header("location: ../login.php");
     exit;
}

?>

<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <link rel="stylesheet" href="assets/css/bootstrap.css">
     <link rel="stylesheet" href="assets/css/dataTable.min.css">
     <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>

     <div class="row">
          <div class="col-3">
               <div class="sidebar">
                    <a class="active" href="welcome.php">HomeLand</a>
                    <?php if (htmlspecialchars($_SESSION["role_id"] == 1)) { ?>
                         <a href="../index.php"><i class="fa-solid fa-house-user"></i> HomeLand WebSite</a>
                         <a href="./all_user.php"><i class="fa fa-users" style="padding-right: 5px;"></i></i>Users</a>
                         <a href="all_home.php"><i class="fa-solid fa-house" style="padding-right: 5px;"></i>Houses</a>
                         <a href="all_flats.php"><i class="fa-solid fa-list" style="padding-right: 5px;"></i>Flats</a>
                         <a href="all_bookings.php"><i class="fa-solid fa-cart-shopping" style="padding-right: 5px;"></i>Bookings</a>
                    <?php } else if(htmlspecialchars($_SESSION["role_id"] == 2)){ ?>
                         <a href="../index.php"><i class="fa-solid fa-house-user"></i> HomeLand WebSite</a>
                         <a href="owners_home.php"><i class="fa-solid fa-house" style="padding-right: 5px;"></i>Houses</a>
                         <a href="owners_flats.php"><i class="fa-solid fa-list" style="padding-right: 5px;"></i>Flats</a>
                         <a href="owners_booking.php"><i class="fa-solid fa-cart-shopping" style="padding-right: 5px;"></i>Bookings</a>
                    <?php } else{
                         header("location: ../index.php");
                    }
                    ?>
                    <!-- <a href="all_flats.php"><i class="fa-solid fa-blog" style="padding-right: 5px;"></i>posts</a>
                    <a href="all_home.php"><i class="fa-solid fa-list" style="padding-right: 5px;"></i>Payments</a> -->
                    <hr />
                    <a href="../reset-password.php"><i class="fa-solid fa-pen-to-square" style="padding-right: 5px;"></i>Reset Your Password</a>
                    <a href="../logout.php"> <i class="fa-solid fa-right-from-bracket" style="padding-right: 5px;"></i>Sign Out</a>
               </div>
          </div>
          <div class="col-md-8">
               <div class="row">
                    <div class="col-12 col-md-4 col-lg-4" style="margin-top: 50px;">
                         <div class="card p-5 text-white bg-primary">
                              <div class="h3 text-center">
                                   Total Users
                              </div>
                              <div class="h4 p-3 text-center text-white">
                                   <?php
                                   $sql = "SELECT COUNT(user_id) as ut  FROM users";
                                   $homes = $link->query($sql);
                                   $data = $homes->fetch_assoc();
                                   echo $data["ut"];
                                   ?>
                              </div>
                         </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4" style="margin-top: 50px;">
                         <div class="card text-white bg-warning p-5">
                              <div class="h3 text-center">
                                   Total Houses
                              </div>
                              <div class="h4 p-3 text-center text-white">
                                   <?php
                                   $sql = "SELECT COUNT(home_id) as t FROM homes inner JOIN locations ON homes.location_id=locations.location_id ORDER BY homes.home_id";
                                   $homes = $link->query($sql);
                                   $data = $homes->fetch_assoc();
                                   echo $data["t"];
                                   ?>
                              </div>
                         </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4" style="margin-top: 50px;">
                         <div class="card text-white bg-info p-5">
                              <div class="h3 text-center">
                                   Total Flats
                              </div>
                              <div class="h4 p-3 text-center text-white">
                                   <?php
                                   $sql = "SELECT COUNT(flat_id) as ft  FROM flats";
                                   $homes = $link->query($sql);
                                   $data = $homes->fetch_assoc();
                                   echo $data["ft"];
                                   ?>
                              </div>
                         </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4" style="margin-top: 50px;">
                         <div class="card text-center text-white bg-success p-5">
                              <div class="h3 text-center">
                                   Total Bookings
                              </div>
                              <div class="h4 p-3 text-center text-white">
                                   <?php
                                   $sql = "SELECT COUNT(booking_id) as bt  FROM booking";
                                   $homes = $link->query($sql);
                                   $data = $homes->fetch_assoc();
                                   echo $data["bt"];
                                   ?>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>


     <script src="assets/js/jQuery.js"></script>
     <script src="assets/js/dataTables.bootstrap4.min.js"></script>
     <script src="assets/js/jquery.dataTables.min.js"></script>
     <script>
          $(document).ready(function() {
               $('#example').DataTable();
          });
     </script>
</body>