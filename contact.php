<?php
include "functions/testimonials.php"
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/contact.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
.grid-container {
  
  display: grid;
  grid-gap: 2rem;
  grid-template-areas: 
  'section1 section2 section2'
  'section3 section2 section2'
  ;
  padding-left: 2rem;
  padding-right: 3rem;
  padding-top: 4rem;
  margin-top: 5rem;

}
#navbar{
  grid-area: navbar;
}

#section1{
  grid-area: section1;
  max-width:600px;
  justify-self: left;
}

#section2{
  grid-area: section2;
  max-width:600px;
  padding-left: 3rem;
}

#section3{
  grid-area: section3;
  max-width:600px;
  justify-self: center;
}


/* On screens that are 600px or less, set the background color to olive */
@media screen and (max-width: 650px) {
  .grid-container{
    grid-template-areas: 
  'section1'
  'section2'
  ;
  padding-left:2rem;
  padding-right: 2rem;
  justify-items: center;
  }
}
</style>

<body>

  <?php include 'navbar.php'?>

  <div class="grid-container">
      <div class="section1">
        <div>
          <img class="img-fluid-contact rounded" src="img/call-to-action.jpg" alt="" style="width:100%; height:55vh">
        </div>
      </div>
      <div class="content pt-5" id="section2">
        <div class="right-side">
          <div class="topic-text">Send us a message</div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque sed facilis a, doloremque architecto fugit officiis velit earum facere dicta officia exercitationem ea perferendis, hic nobis qui aliquam perspiciatis illo et inventore. Quaerat, sint illo!</p>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="input-box">
              <input type="text" placeholder="Enter your name" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="input-box">
              <input type="text" placeholder="Enter your email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="input-box message-box">
              <input type="text" placeholder="Enter your Message" name="message" value="<?php echo $message; ?>">
            </div>
            <div class="button-contact">
              <input type="submit" class="btn-primary"value="Send Now">
            </div>
          </form>
        </div>
      </div>
      <div class=" text-center" id="section3">
        <h2>Contact With Our Certified Agent</h2>
        <p >Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit diam justo sed vero dolor duo.</p>
        <a href="" class="btn-primary py-3 px-4 mx-5" id='call'><i class="fa fa-phone-alt me-2 mb-4"></i>Make A Call</a>
        <a href="" class="btn-dark py-3 px-4 mx-5" id='appointment'><i class="fa fa-calendar-alt me-2 mt-2"></i>Appoinment</a>
      </div>
  </div>

      
  <script src="js/main.js"></script>
</body>

</html>