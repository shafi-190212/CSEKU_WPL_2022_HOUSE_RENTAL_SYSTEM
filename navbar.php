<?php session_start();
?>

<style>
  :root {
    --primary: #00B98E;
    --secondary: #FF6922;
    --light: #EFFDF5;
    --dark: #0E2E50;
  }

  .text-primary {
    color: #00B98E !important
  }

  /*Navbar*/
  /* Add a black background color to the top navigation */
  /* Create a sticky/fixed navbar */
  #navbar {
    overflow: hidden;
    background-color: #f1f1f1;
    padding: 30px 10px;
    /* Large padding which will shrink on scroll (using JS) */
    transition: 0.4s;
    /* Adds a transition effect when the padding is decreased */
    position: fixed;
    /* Sticky/fixed navbar */
    width: 100%;
    top: 0;
    /* At the top */
    z-index: 99;
    display: grid;
    grid-template-rows: repeat(auto, 1fr);
    grid-template-columns: repeat(3, minmax(300px, 1fr));
    align-items: center;
  }

  /* Style the navbar links */
  #navbar a {
    float: left;
    color: black;
    text-align: center;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
  }

  /* Style the logo */
  #navbar #logo {
    font-size: 35px;
    font-weight: bold;
    transition: 0.4s;
  }

  /* Links on mouse-over */
  #navbar a:hover {
    background-color: #ddd;
    color: black;
  }

  /* Style the active/current link */
  #navbar a.active {
    background-color: dodgerblue;
    color: white;
  }

  /* Display some links to the right */
  #navbar-right {
    grid-column-start: 2;
    grid-column-end: 4;
    justify-self: right;
    padding-right: 25px;
  }

  #navbar .icon {
    display: none;
  }

  /* Dropdown container - needed to position the dropdown content */
  .dropdown {
    float: left;
    overflow: hidden;
  }

  /* Style the dropdown button to fit inside the topnav */
  .dropdown .dropbtn {
    font-size: 18px;
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: inherit;
    font-family: inherit;
    color: black;
    margin: 0;
  }

  /* Style the dropdown content (hidden by default) */
  .dropdown-content {
    display: none;
    background-color: transparent;
    color: black;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  /* Style the links inside the dropdown */
  .dropdown-content a {
    float: none !important;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block !important;
    text-align: left !important;
  }

  /* Add a grey background to dropdown links on hover */
  .dropdown-content a:hover {
    background-color: #ddd;
    color: black;
  }

  /* Show the dropdown menu when the user moves the mouse over the dropdown button */
  .dropdown:hover .dropdown-content {
    display: block;
  }

  .btn-book {
    position: relative;
    background-color: #00B98E;
    border: none;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
    border-radius: 40%;
    font-weight: 400;

  }

  /*Icon*/
  .icon-a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 40px;
  }

  .img-fluid {
    max-width: 100%;
    height: auto
  }

  /* Add responsiveness - on screens less than 580px wide, display the navbar vertically instead of horizontally */

  @media screen and (max-width: 600px) {
    #navbar {
      grid-template-columns: repeat(2, 1fr);
      align-items: center;
      padding: 15px 5px;
    }

    #navbar-right {
      display: hidden !important;
      grid-column-start: 1;
      grid-column-end: 3;
      align-self: left;
      justify-self: start;
      padding: 0px all;
    }

    #navbar-right a:not(:first-child) .dropdown .dropbtn {
      display: none;
    }

    #navbar a.icon {
      float: right;
      display: block;
    }
  }

  /* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
  @media screen and (max-width: 600px) {
    #navbar.responsive .dropdown-content {
      position: relative;
    }

    #navbar.responsive a.icon {
      position: absolute;
      right: 0;
      top: 0;
    }

    #navbar.responsive a {
      float: none;
      display: block;
      text-align: left;
    }

    #navbar.responsive .dropdown {
      float: none;
    }

    #navbar.responsive .dropdown .dropbtn {
      display: block;
      width: 100%;
      text-align: left;
    }
  }
</style>

<div id="navbar">
  <a href="http://localhost/House_Rent_Web/index.php" class="d-flex align-items-center text-center">
    <div class="icon-a p-1 me-3" id="logo">
      <img class="img-fluid" src="http://localhost/House_Rent_Web/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
    </div>
    <h1 class="m-0 text-primary">HomeLand</h1>
  </a>
  <a href="javascript:void(0);" class="icon" style="justify-self:end;" onclick="myFunction()"><i class="fa fa-bars"></i></a>
  <div id="navbar-right">
    <a href="http://localhost/House_Rent_Web/index.php" id="home">Home</a>
    <a href="http://localhost/House_Rent_Web/about.php" id="about">About</a>
    <a href="http://localhost/House_Rent_Web/house.php" id="house">House</a>
    <div class="dropdown">
      <button class="dropbtn">Pages
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="http://localhost/House_Rent_Web/testimonials.php" id="testimonial">Testimonials</a>
      </div>
    </div>
    <a href="http://localhost/House_Rent_Web/contact.php" id="contact">Contact</a>
    <div class="dropdown">
      <?php if (!isset($_SESSION["loggedin"])) { ?>
        <button class="dropbtn" id="login">Login
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="http://localhost/House_Rent_Web/login.php">Login</a>
          <a href="http://localhost/House_Rent_Web/register.php">Signup</a>
        </div>

      <?php } else if (htmlspecialchars($_SESSION["role_id"] == 1 or $_SESSION["role_id"] == 2)) { ?>
        <button class="dropbtn" id="login">Dashboard
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="http://localhost/House_Rent_Web/admin/welcome.php">Dashboard</a>
          <a href="http://localhost/House_Rent_Web/user_profile.php">Profile</a>
          <a href="http://localhost/House_Rent_Web/logout.php">Logout</a>
        </div>
      <?php } else { ?>
        <button class="dropbtn" id="login">Profile
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="http://localhost/House_Rent_Web/user_profile.php">Profile</a>
          <div class="dropdown-content">
            <a href="http://localhost/House_Rent_Web/user_bookings.php">Bookings</a>
          </div>
          <a href="http://localhost/House_Rent_Web/logout.php">Logout</a>
        </div>
      <?php } ?>


    </div>

    <?php if (!isset($_SESSION["loggedin"])) { ?>
      <a href="http://localhost/House_Rent_Web/login.php" class="btn-book">BOOK NOW</a>
    <?php } else { ?>
      <a href="http://localhost/House_Rent_Web/house.php" class="btn-book">BOOK NOW</a>
    <?php } ?>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
  function myFunction() {
    var x = document.getElementById("navbar");
    if (x.className === "navbar") {
      x.className += " responsive";
    } else {
      x.className = "navbar";
    }
  }

  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop >= 20 || document.documentElement.scrollTop >= 20) {
      document.getElementById("navbar").style.padding = "8px 8px";
      document.getElementById("logo").style.fontSize = "25px";
    } else {
      document.getElementById("navbar").style.padding = "35px 10px";
      document.getElementById("logo").style.fontSize = "30px";
    }
  }

  $(document).ready(function() {
    console.log(window.location.href);

    if (window.location.href == "http://localhost/House_Rent_Web/index.php") {
      $("#home").addClass("active");
    } else {
      $("#home").removeClass("active");
    }

    if (window.location.href == "http://localhost/House_Rent_Web/about.php") {
      $("#about").addClass("active");
    } else {
      $("#about").removeClass("active");
    }

    if (window.location.href == "http://localhost/House_Rent_Web/contact.php") {
      $("#contact").addClass("active");
    } else {
      $("#contact").removeClass("active");
    }
    if (window.location.href == "http://localhost/House_Rent_Web/testimonials.php") {
      $("#testimonial").addClass("active");
    } else {
      $("#testimonial").removeClass("active");
    }
    if (window.location.href == "http://localhost/House_Rent_Web/house.php") {
      $("#house").addClass("active");
    } else {
      $("#house").removeClass("active");
    }
    if (window.location.href == "http://localhost/House_Rent_Web/login.php") {
      $("#login").addClass("active");
    } else {
      $("#login").removeClass("active");
    }
  });
</script>