<?php
// Include config file
require_once "database/config.php";


// Define variables and initialize with empty values
$flat_id = $home_id = $flat_images = $floor = $flat_no = $available_from = $price = $bedroom_no = $kitchen_no = $bathroom_no = $dining_room_no = $short_description = "";


if (isset($_GET['edit'])) {
     $id = $_GET['edit'];
     $update = true;
     $data = mysqli_query($link, "SELECT * FROM flats natural join flat_details WHERE flat_id=$id");

     if ($data) {

          $value = mysqli_fetch_array($data);

          $flat_id = $value['flat_id'];
          $home_id = $value['home_id'];
          $flat_images = $value['flat_images'];
          $is_available = $value['is_available'];
          $flat_details_id =  $value['flat_details_id'];
          $floor =  $value['floor'];
          $flat_no =  $value['flat_no'];
          $available_from = $value['available_from'];
          $price = $value['price'];
          $bedroom_no =  $value['bedroom_no'];
          $kitchen_no =  $value['kitchen_no'];
          $bathroom_no = $value['bathroom_no'];
          $dining_room_no =  $value['dining_room_no'];
          $short_description = $value['short_description'];
          $house_data = mysqli_query($link, "SELECT * FROM homes natural join locations where home_id = $home_id");
          $house = mysqli_fetch_array($house_data);
          $house_name = $house['house'];
     }
}

$home_id_err = $flat_images_err = $floor_err = $flat_no_err = $available_from_err = $price_err = $bedroom_no_err = $kitchen_no_err = $bathroom_no_err = $dining_room_no_err = $short_description_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Validate Name
     if (empty(trim($_POST["home_id"]))) {
          $home_id_err = "Please Enter Your home_id.";
     } else {
          $home_id = trim($_POST["home_id"]);
     }

     // Validate floor
     if (empty(trim($_POST["floor"]))) {
          $floor_err = "Please Enter Your floor.";
     } else {
          $floor = trim($_POST["floor"]);
     }

     // Validate flat_no
     if (empty(trim($_POST["flat_no"]))) {
          $flat_no_err = "Please Enter Your flat_no.";
     } else {
          $flat_no = trim($_POST["flat_no"]);
     }

     // Validate Is available
     if (empty(trim($_POST["available_from"]))) {
          $available_from_err = "Please Enter Your available_from.";
     } else {
          $available_from = trim($_POST["available_from"]);
     }

     // Validate price
     if (empty(trim($_POST["price"]))) {
          $price_err = "Please Enter Your price.";
     } else {
          $price = trim($_POST["price"]);
     }

     // Validate bedroom_no
     if (empty(trim($_POST["bedroom_no"]))) {
          $bedroom_no_err = "Please Enter Your bedroom_no.";
     } else {
          $bedroom_no = trim($_POST["bedroom_no"]);
     }

     // Validate kitchen_no
     if (empty(trim($_POST["kitchen_no"]))) {
          $kitchen_no_err = "Please Enter Your kitchen_no.";
     } else {
          $kitchen_no = trim($_POST["kitchen_no"]);
     }

     // Validate bathroom_no
     if (empty(trim($_POST["bathroom_no"]))) {
          $bathroom_no_err = "Please Enter Your bathroom_no.";
     } else {
          $bathroom_no = trim($_POST["bathroom_no"]);
     }

     // Validate dining_room_no
     if (empty(trim($_POST["dining_room_no"]))) {
          $dining_room_no_err = "Please Enter Your dining_room_no.";
     } else {
          $dining_room_no = trim($_POST["dining_room_no"]);
     }

     // Validate short_description
     if (empty(trim($_POST["short_description"]))) {
          $short_description_err = "Please Enter Your short_description.";
     } else {
          $short_description = trim($_POST["short_description"]);
     }


     // Check input errors before inserting in database
     if (empty($home_id_err) && empty($flat_images_err) && empty($floor_err) && empty($flat_no_err) && empty($road_no_err) && empty($available_from_err)) {

          $user_id = $_SESSION["user_id"];
          $flat_id = $_POST["id"];

          //Multiple Image Upload
          foreach ($_FILES['flat_images']["name"] as $pm) {
               $imName[] = $pm;
          }
          $imageNameString = implode(',', $imName);

          $targetDir = "../img/flat_images/";
          foreach ($_FILES['flat_images']['name'] as $key => $val) {
               // File upload path 
               $fileName = basename($_FILES['flat_images']['name'][$key]);
               $targetFilePath = $targetDir . $fileName;

               // Check whether file type is valid 
               $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
               move_uploaded_file($_FILES["flat_images"]["tmp_name"][$key], $targetFilePath);
          }

          // Prepare an insert statement
          $sql = $link->query(
               "UPDATE flats 
                SET home_id ='$home_id',flat_images='$imageNameString',is_available='1' 
                WHERE flat_id = $flat_id"
          );
          $sql1 = $link->query(
               "UPDATE flat_details 
                SET floor='$floor',flat_no ='$flat_no',available_from='$available_from',
                price='$price',bedroom_no='$bedroom_no',kitchen_no='$kitchen_no',
                bathroom_no='$bathroom_no',dining_room_no='$dining_room_no',short_description='$short_description'   
                WHERE flat_id = $flat_id;"
          );

          if ($sql && $sql1) {
               header("location: ./all_flats.php");
          } else {
               echo "Oops! Something went wrong. Please try again later.";
          }
     }

     // Close connection
     mysqli_close($link);
}
