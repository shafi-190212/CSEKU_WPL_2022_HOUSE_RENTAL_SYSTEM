<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
  <link href= "http://fonts.googleapis.com/css?family=Raleway">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<style>

  /*------/ Intro Single /------*/

.intro-single {
padding: 12rem 0 3rem;
}

.intro-single .title-single-box {
padding: 1rem 0 1rem 2rem;
}

.intro-single .title-single-box {
border-left: 3px solid #2eca6a;
}

.intro-single .title-single-box .title-single {
font-weight: 600;
font-size: 2.2rem;
}

.intro-single .breadcrumb-box {
padding: 1rem 0 0 .5rem;
}

.intro-single .breadcrumb {
background-color: transparent;
padding-right: 0;
padding-left: 0;
}

.title-c {
  font-size: 2.5rem;
  font-weight: 600;
  margin-left: -40px;
}
  .summary-list {
    padding-right: 1rem;
    color: #000000;
  }

  .summary-list .list {
    padding: 0;
    line-height: 1.5;
    font-size: 20px;
  }

  .summary-list .list span {
    color: #555555;
  }

  .title-box-d {
    padding-bottom: 0.5rem;
    margin-bottom: 0.5rem;
    position: relative;
  }

  .title-box-d .title-d {
    font-weight: 600;
    font-size: 2rem;
    color: var(--primary)
  }

  .title-box-d .title-d:after {
    content: '';
    position: absolute;
    width: 35%;
    height: 4px;
    background-color: #2eca6a;
    bottom: 20px;
    left: 0;
  }

  .col-items-a {
    flex: 2;
    padding: 16px;
  }

  .col-items-b {
    flex: 1;
    padding: 16px;
  }

  .description {
    line-height: 1.5;
    font-size: 18px;
    color: gray;
    padding-left: 2%;
    padding-right: 12%;

  }

  .list-a {
    display: inline-block;
    line-height: 1.5;
    padding: 0;
    list-style: none;
    font-size: 20px;
  }

  .list-a li {
    position: relative;
    width: 50%;
    float: left;
    padding-left: 25px;
    padding-right: 5px;
  }

  .list-a li:before {
    content: '';
    width: 10px;
    height: 2px;
    position: absolute;
    background-color: #313131;
    top: 15px;
    left: 0;
  }

  .property-agent .title-agent {
    font-weight: 600;
  }

  .property-agent ul {
    line-height: 2;
    color: #000000;
  }

  .property-agent .socials-a {
    text-align: center;
  }

  .list-unstyled {
    padding-left: 0;
    list-style: none
  }

  .list-inline {
    padding-left: 0;
    list-style: none
  }

  .list-inline-item {
    display: inline-block
  }

  .list-inline-item:not(:last-child) {
    margin-right: .5rem
  }

  .title-agent {
    font-size: 24px;
    font-weight: 400;

  }
  .row{
    padding: 1rem 2rem;
  }
/*----------------------------------------------
CSS settings for HTML div Exact Center
------------------------------------------------*/
#abc {
width: 100%;
height:100%;
opacity:1;
top:0;
left:0;
display:none;
position:fixed;
background-color:#313131;
overflow:auto;
}
img#close {
position:absolute;
right:-14px;
top:-14px;
cursor:pointer
}
div#popupContact {
position:absolute;
top: 50%;
left: 50%;
transform: translate(-100%, -40%);
font-family:'Raleway',sans-serif
}
form {
max-width:600px;
min-width:400px;
padding:10px 50px;
border:2px solid gray;
border-radius:10px;
font-family:raleway;
background-color:#fff
}
p {
margin-top:30px
}
h2 {
background-color:#FEFFED;
padding:20px 35px;
margin:-10px -50px;
text-align:center;
border-radius:10px 10px 0 0
}
hr {
margin:10px -50px;
border:0;
border-top:1px solid #ccc
}
input[type=text] {
width:100%;
padding:10px;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway
}
#name {
background-image:url(../images/name.jpg);
background-repeat:no-repeat;
background-position:5px 7px
}
#email {
background-image:url(../images/email.png);
background-repeat:no-repeat;
background-position:5px 7px
}
textarea {
background-image:url(../images/msg.png);
background-repeat:no-repeat;
background-position:5px 7px;
width:100%;
height:95px;
padding:10px;
resize:none;
margin-top:30px;
border:1px solid #ccc;
padding-left:40px;
font-size:16px;
font-family:raleway;
margin-bottom:30px
}
#submit {
text-decoration:none;
width:100%;
text-align:center;
display:block;
background-color:#FFBC00;
color:#fff;
border:1px solid #FFCB00;
padding:10px 0;
font-size:20px;
cursor:pointer;
border-radius:5px
}

</style>

<body>

  <?php include 'navbar.php' ?>
  <section class="intro-single pt-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="title-single-box">
            <h1 class="title-single">Golden Urban House</h1>
            <span class="color-text-a">23 Street, New York, USA</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row col-container">

      <div class="col-items-a">
        <div class="slideshow-container" style="float:left;">

          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img/property-1.jpg" style="width:100%; height:70vh">
            <div class="text">Caption Text</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/property-2.jpg" style="width:100%; height:70vh">
            <div class="text">Caption Two</div>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/property-3.jpg" style="width:100%; height:70vh">
            <div class="text">Caption Three</div>
          </div>

          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div id="abc">
        <!-- Popup Div Starts Here -->
        <div id="popupContact">
            <!-- Contact Us Form -->
            <form action="#" id="form" method="post" name="form">
                <img id="close" src="img/close.png" onclick ="div_hide()" style="width: 5%;">
                <h2>Contact Us</h2>
                <hr>
                <input id="name" name="name" placeholder="Name" type="text">
                <input id="email" name="email" placeholder="Email" type="text">
                <textarea id="msg" name="message" placeholder="Message"></textarea>
                <a href="javascript:%20check_empty()" id="submit">Send</a>
            </form>
        </div>
        <!-- Popup Div Ends Here -->
        </div>
      </div>
      <div class="col-items-b pt-0"  style="padding-left:10px; margin-right:10px;">
        <div class="title-box-d section-t4">
          <h3 class="title-d">Quick Summary</h3>
        </div>
        <div class="summary-list">
          <ul class="list">
            <li class="d-flex justify-content-between">
              <strong>Property ID:</strong>
              <span>1134</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Location:</strong>
              <span>23 Street, New York, USA</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Property Type:</strong>
              <span>House</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Status:</strong>
              <span>Rent</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Area:</strong>
              <span>340m
                <sup>2</sup>
              </span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Beds:</strong>
              <span>4</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Baths:</strong>
              <span>2</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Garage:</strong>
              <span>1</span>
            </li>
          </ul>
        </div>

        <center><button style="background-color:#00B98E;margin-top:50px;width:300px;" id="popup" onclick="div_show()">Confirm Boooking</button></center>
        
      </div>


    </div>

    <div class="row col-container">
      <div class="col-items-a">
        <div class="title-box-d">
          <h3 class="title-d">Property Description</h3>
        </div>
        <div class="property-description ">
          <p class="description">
            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
            neque, auctor sit amet
            aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
            Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
            nibh pulvinar quam id dui posuere blandit.
          </p>
          <p class="description">
            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
            malesuada. Quisque velit nisi,
            pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
          </p>
        </div>
      </div>
      <div class="col-items-b">
        <div class="title-box-d">
          <h3 class="title-d">Facilities</h3>
        </div>
        <div class="amenities-list">
          <ul class="list-a" style="margin:0;">
            <li>Balcony</li>
            <li>Outdoor Kitchen</li>
            <li>Cable Tv</li>
            <li>Internet</li>
            <li>Parking</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row col-container">
      <div class="col-4">
        <img src="img/agent-4.jpg" alt="" style="width:100%;height:auto">
      </div>
      <div class="col-4 px-5">
        <div class="title-box-d">
          <h3 class="title-d">Contact Agent</h3>
        </div>
        <div class="property-agent">
          <h4 class="title-agent">Anabella Geller</h4>
          <p class="description">
            Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
            dui. Quisque velit nisi,
            pretium ut lacinia in, elementum id enim.
          </p>
          <ul class="list-unstyled">
            <li class="d-flex justify-content-between">
              <strong>Phone:</strong>
              <span class="color-text-a">(222) 4568932</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Mobile:</strong>
              <span class="color-text-a">777 287 378 737</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Email:</strong>
              <span class="color-text-a">annabella@example.com</span>
            </li>
            <li class="d-flex justify-content-between">
              <strong>Skype:</strong>
              <span class="color-text-a">Annabela.ge</span>
            </li>
          </ul>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="title-box-d">
          <h3 class="title-d">Send a message</h3>
        </div>
        <div>
          <input type="name" class="form-control" placeholder="Your Name" />
          <input type="email" class="form-control" placeholder="Your email" />
          <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>

          <button style="background-color:#00B98E;margin-top:20px;">Send Message</button>
        </div>
      </div>
    </div>


  </div>
  </div>
  <?php include 'footer.php' ?>
  <script src="js/main.js"></script>
  <script>
          // Validating Empty Field
      function check_empty() {
      if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
      alert("Fill All Fields !");
      } else {
      document.getElementById('form').submit();
      alert("Form Submitted Successfully...");
      }
      }
      //Function To Display Popup
      function div_show() {
      document.getElementById('abc').style.display = "block";
      }
      //Function to Hide Popup
      function div_hide(){
      document.getElementById('abc').style.display = "none";
      }
  </script>
</body>

</html>