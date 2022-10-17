<?php
include_once('database/config.php');
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

<style>
.grid-container {
  background-color: transparent !important;
  display: grid;
  grid-template-columns: repeat(3,1fr); /*fr means fraction */
  grid-template-rows: repeat(auto,1fr);
  grid-gap: 2rem;
  padding-left:30px;
  padding-right: 30px;
  justify-items: center;
}
.grid-items{
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  text-align: center;
  font-family: sans-serif;
  transition: all 0.5s ease-in-out;
}
.grid-items:hover{
  transform: scale(1.07);
}

@media screen and (max-width: 992px) {
  .grid-container{
  grid-template-columns: repeat(2,1fr); /*fr means fraction */
  grid-gap: 1.5rem;
  padding-left:25px;
  padding-right: 25px;
  justify-items: center;
  }
}


/* On screens that are 600px or less, set the background color to olive */
@media screen and (max-width: 600px) {
  .grid-container{
  grid-template-columns: repeat(1,1fr); /*fr means fraction */
  grid-gap: 1rem;
  padding-left:20px;
  padding-right: 20px;
  justify-items: center;
  }
}

</style>

<body>


<?php include 'navbar.php'?>

  
  <!-- property-->
  <div class="container my-5 py-5">
    <div class="text-center mx-auto my-5" style="max-width: 600px;font-size:18px;">
        <h1 class="mb-3 mt-5">Property List</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe magni alias facilis excepturi est, voluptatum dicta, aut quod consequuntur minus voluptate tempora temporibus explicabo modi et, error nisi nihil nostrum accusantium eaque velit? Fuga, doloribus!</p>
    </div>
    <div class="grid-container">
      <?php 
      $i =1;
      $sql = $link->query("SELECT * FROM flats natural join flat_details where is_available = 1");
      while ($row = $sql->fetch_assoc()) :
      ?>
      <div class="grid-items">
        <?php $images = explode(",", $row['flat_images']);?>
        <img src="img/flat_images/<?php echo  $images[0]?>" alt="property-1" style="width:100%">
        <div class="container">
          <h2>৳<?php echo $row['price'] ?></h2>
          <?php $home_id = $row['home_id'];
            $house_data = $link->query("SELECT * FROM homes natural join locations where home_id = $home_id");
            $house = mysqli_fetch_array($house_data);
          ?>
          <a class="d-block h5 mb-2" href="house-details.php?view=<?php echo $row["flat_id"];?>"><h3 class="text-primary text-center"><?php echo $house['house'] ?></h3></a>
          <p><i class="fa fa-map-marker-alt text-primary me-2"></i>IslamNagar,Khulna</p>
          <p><b class="text-primary me-2">Available from: </b> <?php echo $row['available_from'] ?> </p>
          <div class="d-flex border-top">
              <small class="text-center py-2 px-3"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
              <small class="text-center py-2 px-3"><i class="fa fa-building text-primary me-2"></i>Floor: <?php echo $row['floor'] ?></small>
              <small class="text-center py-2 px-3"><i class="fa fa-bed text-primary me-2"></i> <?php echo $row['bedroom_no'] ?> Bed</small>
              <small class="text-center py-2 ps-3"><i class="fa fa-bath text-primary me-2"></i> <?php echo $row['bathroom_no'] ?> Bath</small>
          </div>
          <p><button class="button my-2 py-3" onclick= 'location.href = "house-details.php?view=<?php echo $row["flat_id"];?>"'>View Details</button></p>
        </div>
        <?php $i++; 
        if ($i == 7) $i=1;
        ?>
      </div>
      <?php endwhile; ?>   
    </div>
  </div>

  <?php include 'footer.php'?>
  <script src="js/main.js"></script>
</body>

</html>