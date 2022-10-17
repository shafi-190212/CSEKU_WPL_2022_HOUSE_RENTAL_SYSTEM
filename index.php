<?php
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

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

<?php include 'navbar.php' ?>

  
  <div class="container pt-5 mt-5">
  <div class="row col-container">
    <div class="col-items pt-5">
      <h1 class="display-5 mb-4">Find A <span class="text-primary">Perfect Place</span> To Live or Rent</h1>
      <p class=" mb-4 pb-2" style="font-size:20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea ipsum recusandae iste inventore minima dolore ex natus exercitationem nisi sequi necessitatibus possimus quos, vero at voluptatum temporibus!</p>
      <a href="" class="btn">Get Started</a>
    </div>
    <div class="col-items pt-5">
      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="img/slide-1.jpg" style="width:100%">
          <div class="text">Caption Text</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="img/slide-2.jpg" style="width:100%">
          <div class="text">Caption Two</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="img/slide-3.jpg" style="width:100%">
          <div class="text">Caption Three</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>

    
  </div>
  </div>

  <div class="container">
    <div class="row col-container">
        <div class="col-items">
            <div class="about-img position-relative overflow-hidden p-5">
                <img class="img-fluid" src="img/about.jpg" >
            </div>
        </div>
        <div class="col-items pt-5 mt-5">
            <h1 class="my-3" style="font-size:45px;">#1 Place To Find The <span class="text-primary">Perfect Room</span></h1>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, quibusdam unde! Incidunt quibusdam cupiditate odio rerum libero enim numquam esse, consequatur eligendi dolorum est voluptatem asperiores exercitationem porro sit voluptate eius, iusto voluptatum. Amet tenetur blanditiis non sit assumenda. Labore?</p>
            <p><i class="fa fa-check text-primary me-3"></i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat, expedita.</p>
            <p><i class="fa fa-check text-primary me-3"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <p><i class="fa fa-check text-primary me-3 mb-4"></i>Lorem, ipsum dolor.</p>
            <a class="btn" href="">Read More</a>
        </div>
    </div>
  </div>
  
  <!-- Popular Agents -->
  <div class="container">
    <div class="text-center mx-auto mb-2" style="max-width: 600px;font-size:20px;">
        <h1 class="mb-3">Popular Agents</h1>
        <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
    </div>
    <div class="row col-container">
      <div class="col-items">
        <div class="card">
          <img src="img/agent-7.jpg" alt="Jane" style="width:100%">
          <div class="container">
            <h2>Jane Doe</h2>
            <p class="title">CEO &amp; Founder</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button py-3">Contact</button></p>
          </div>
        </div>
      </div>

      <div class="col-items">
        <div class="card">
          <img src="img/agent-6.jpg" alt="Mike" style="width:100%">
          <div class="container">
            <h2>Mike Ross</h2>
            <p class="title">Art Director</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button py-3">Contact</button></p>
          </div>
        </div>
      </div>

      <div class="col-items">
        <div class="card">
          <img src="img/agent-3.jpg" alt="John" style="width:100%">
          <div class="container">
            <h2>John Doe</h2>
            <p class="title">Designer</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>example@example.com</p>
            <p><button class="button py-3">Contact</button></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Call to Action -->
  <div class="container">
    <div class="row col-container">
        <div class="col-items me-3">
            <img class="img-fluid rounded" src="img/call-to-action.jpg" alt="" style="width:100%;height:50vh;">
        </div>
        <div class="col-items ps-5 pt-4">
            <div class=" text-center mb-4">
                <h1 class="mb-3 pt-4">Contact With Our Certified Agent</h1>
                <p class="px-3">Eirmod sed ipsum dolor sit rebum magna erat. Tempor lorem kasd vero ipsum sit sit diam justo sed vero dolor duo.</p>
            </div>
            <a href="" class="btn py-2 px-4 mx-4"><i class="fa fa-phone-alt me-2"></i>Make A Call</a>
            <a href="" class="btn btn-dark py-2 px-4 mx-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
        </div>
    </div>
    </div>
    <?php include 'footer.php'?>
    <script src="js/main.js"></script>
</body>

</html>