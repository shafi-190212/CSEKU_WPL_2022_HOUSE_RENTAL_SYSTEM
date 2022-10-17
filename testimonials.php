<?php
include_once('database/config.php');
$sql = $link->query("SELECT * FROM testimonials");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonials</title>
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

<?php include 'navbar.php'?>

  <div class="hero mt-4 pt-5">
    <h1>Testimonials</h1>
    <div class="container-t mt-5 pt-2">
      <div class="testimonial">
        <div class="slide-row"  id= "slide">
          <?php 
            $i =0;
            while ($row = $sql->fetch_assoc()) :
          ?>
          <div class="slide-col">
            <div class="user-text">
              <p><?php echo $row['message'] ?></p>
              <h3 style="color:darkslategrey"><?php echo $row['name'] ?></h3>
              <p><?php echo $row['email'] ?></p>
            </div>
            <div class="user-img">
              <img src="img/agent-6.jpg" alt="agent-6">
            </div>
            <?php $i++;?>
            </div>
          <?php if($i>=4) break; endwhile; ?>  
        </div>

      </div>
      <div class="indicator">
        <span class="indicator-btn ind-active"></span>
        <?php $j=$i; while($i>1):?>
          <span class="indicator-btn"></span>
        <?php $i--;?>  
        <?php endwhile; ?>  
      </div>
    </div>

  </div>
  <?php include 'footer.php'?>
</body>
<script>
  var btn = document.getElementsByClassName("indicator-btn");
  var slide = document.getElementById("slide");

<?php $k=0;while($k<=$j):?>
btn[<?php echo $k;?>].onclick = function() {
	slide.style.transform = "translateX(<?php echo $k*(-800)?>px)";
	for(i=0;i< <?php echo $j?>;i++){
		btn[i].classList.remove("ind-active");
	}
	this.classList.add("ind-active");
}
<?php $k++;endwhile;?>

</script>
</html>