<?php
include "./functions/flatDetails_functions.php";
include "../functions/testimonials.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="../assets/css/style.css" rel="stylesheet">

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
.intro-single {
padding: 2.5rem 0 0rem;
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

.grid-container {
  
  display: grid;
  grid-gap: 2rem;
  grid-template-areas: 
  'intro intro intro section2 section2'
  'section1 section1 section1 section2 section2'
  'section3 section3 section3 section4 section4' 
  'section5 section5 section6 section6 section6' 
  ;
  justify-content: center;
  padding-right: 2rem;
  margin-bottom: 5rem;
}
#navbar{
  grid-area: navbar;
}

#section1{
  grid-area: section1;
  min-width: 800px;
  padding-left: 3rem !important;
}

#section2{
  padding: 6rem 0 0rem !important;
  grid-area: section2;
  min-width: 420px;
  justify-self: center;
  align-self: center;
}

#section3{
  grid-area: section3;
  padding-left: 5rem !important;
  padding-right: 3rem !important;
  justify-self: center;
 
}

#section4{
  grid-area: section4;
  padding-right: 3rem !important;
  justify-self: center;
 
}

#section5{
  grid-area: section5;
  max-width:500px;
  padding-left: 10rem !important;
  padding-right: 3rem !important;
  justify-self: center;
 
}
#section6{
  grid-area: section6;
  min-width: 500px;
  padding-right: 2rem !important;
  justify-self: center;
}



/* On screens that are 600px or less, set the background color to olive */
@media screen and (max-width: 650px) {
  .grid-container{
  padding-left:2rem;
  padding-right: 2rem;
  grid-gap: 1.5rem;
  grid-template-areas: 
  'intro '
  'section1'
  'section2' 
  'section3' 
  'section4' 
  'section5' 
  'section6' 
  ;
  justify-items: center;
  }

   .input-box {
  height: 50px;
  margin: 12px 0;
}
 .input-box input,textarea{
  height: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
 .message-box{
  min-height: 110px;
}
 .input-box textarea{
  padding-top: 6px;
}
 .button-contact{
  display: inline-block;
  margin-top: 12px;
}
}


</style>

<body>
  <?php include '../navbar.php' ?>
  <div class="grid-container">
    <section class="intro-single" id="intro">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="title-single-box">
              <h1 class="title-single"><?php echo $house_name?></h1>
              <span class="color-text-a">Road no:<?php echo $road_no?> ,  <?php echo $thana?> , <?php echo $district?></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="slideshow-container" style="float:left;" id="section1">

      <?php foreach ($images as $img){?>
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="../img/flat_images/<?php echo $img;?>" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>
      <?php };?>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <div id="section2">
      <div class="title-box-d section-t4">
        <h3 class="title-d">Quick Summary</h3>
      </div>
      <div class="summary-list">
        <ul class="list">
          <li class="d-flex justify-content-between">
            <strong>Property ID:</strong>1134
            <span></span>
          </li>
          
          <li class="d-flex justify-content-between">
            <strong>Available from:</strong> <?php echo $available_from; ?>
            <span></span>
          </li>

          <li class="d-flex justify-content-between">
            <strong>Location:</strong>  <?php echo $thana?> , <?php echo $district?>
            <span></span>
          </li>

          <li class="d-flex justify-content-between">
            <strong>Ward:</strong><?php echo $ward?>
            <span></span>
            <strong>Road No:</strong><?php echo $road_no?>
            <span></span>
          </li>
          
          <li class="d-flex justify-content-between">
            <strong>Floor:</strong><?php echo $floor?>
            <span></span>
            <strong>Flat No:</strong><?php echo $flat_no?>
            <span></span>
          </li>
          <li class="d-flex justify-content-between">
            <strong>Bedroom:</strong><?php echo $bedroom_no?>
            <span></span>
            <strong>Bathroom:</strong><?php echo $bathroom_no?>
            <span></span>
            
          </li>
          <li class="d-flex justify-content-between">
            <strong>Kitchen:</strong><?php echo $kitchen_no?>
            <span></span>
            <strong>Dining Room:</strong><?php echo $dining_room_no?>
            <span></span>
          </li>

        </ul>  
      </div>
      <center><button style="background-color:#00B98E;margin-top:50px;width:300px;" id="popup" onclick= 'location.href = "../booking.php?view=<?php echo $flat_id;?>"'>Confirm Booking</button></center>  
    </div>
    <div id="section3">
      <div class="title-box-d">
        <h3 class="title-d">Property Description</h3>
      </div>
      <div class="property-description ">
        <p class="description">
          <?php echo $description?>
        </p>
        <p class="description">
          Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
          malesuada. Quisque velit nisi,
          pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
        </p>
      </div>
    </div>
    <div id="section4">
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
    <div id="section5">
      <div class="title-box-d">
        <h3 class="title-d">Contact Agent</h3>
      </div>
      <div class="property-agent">
        <h4 class="title-agent"><strong>Name: </strong><?php echo $user_name;?></h4>
        <ul class="list-unstyled">
          <li class="d-flex justify-content-between">
            <strong>Contact No:</strong>
            <span class="color-text-a"><?php echo $contact_no?></span>
          </li>
          <li class="d-flex justify-content-between">
            <strong>NID:</strong>
            <span class="color-text-a"><?php echo $nid;?></span>
          </li>
          <li class="d-flex justify-content-between">
            <strong>Email:</strong>
            <span class="color-text-a"><?php echo $user_email;?></span>
          </li>
          <li class="d-flex justify-content-between">
            <strong>Location:</strong>
            <span class="color-text-a"><?php echo $user_address ?></span>
          </li>
        </ul>
      </div>
    </div>
    <!-- <div id="section6">
      <div class="title-box-d">
        <h3 class="title-d">Send a message</h3>
      </div>
      <div>
        <input type="name" class="form-control" placeholder="Your Name" />
        <input type="email" class="form-control" placeholder="Your email" />
        <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
        <button style="background-color:#00B98E;margin-top:20px;">Send Message</button>
      </div>
    </div> -->
    <div id="section6">
      <div class="title-box-d">
        <h3 class="title-d">Send a message</h3>
      </div>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="name" value="<?php echo $name; ?>">
        </div>
        <div class="input-box">
          <input type="text" placeholder="Enter your email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-box">
          <textarea placeholder="Enter your Message" name="message" value="<?php echo $message; ?>" cols="60" rows="8" required></textarea>
        </div>
        
        <div class="button-contact">
          <input type="submit" class="btn-primary"value="Send Now">
        </div>
      </form>
    </div>
  </div>


  
  <?php include '../footer.php' ?>
  <script src="../js/main.js"></script>
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
  </script>
</body>
</html>