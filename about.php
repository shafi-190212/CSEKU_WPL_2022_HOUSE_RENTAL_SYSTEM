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


  <?php include 'navbar.php';?>


  <div class="container pt-5 mt-2">
    <div class="row align-items-center col-container">
        <div class="col-items">
            <div class="about-img position-relative overflow-hidden p-5">
                <img class="img-fluid" src="img/about.jpg">
            </div>
        </div>
        <div class="col-items p-2">
            <h1 class="mb-4" style="font-size:45px;">#1 Place To Find The Perfect Room</h1>
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
            <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
            <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
            <p><i class="fa fa-check text-primary me-3 mb-4"></i>Clita duo justo magna dolore erat amet</p>
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

  <?php include 'footer.php'; ?>
  <script src="js/main.js"></script>
</body>

</html>