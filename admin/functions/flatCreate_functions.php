<?php
// Include config file
require_once "database/config.php";


// ----------------------------------------------------------------------------------------------
//                               PHP FUNCTIONS FOR REGISTER
// ----------------------------------------------------------------------------------------------


// Define variables and initialize with empty values
$home_id = $flat_images = $floor = $flat_no = $available_from = $price = $bedroom_no = $kitchen_no = $bathroom_no = $dining_room_no = $short_description = "";
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
     // Validate flat_no
     // if (empty(($_POST["flat_images"]))) {
     //      $flat_images_err = "Please Enter Your flat_no.";
     // } else {
     //      $flat_images = ($_POST["flat_images"]);
     // }
     $flat_images = $_FILES["flat_images"];

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

          //Multiple Image Upload
          foreach ($flat_images['name'] as $pm) {
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

          $user_id = $_SESSION["user_id"];
          // Prepare an insert statement
          $sql = $link->query("INSERT INTO flats (home_id,flat_images,is_available) VALUES ('$home_id', '$imageNameString',1)");
          $sql1 = $link->query("INSERT INTO flat_details (flat_id,floor,flat_no,available_from,price,bedroom_no,kitchen_no,bathroom_no,dining_room_no,short_description) VALUES (LAST_INSERT_ID(),'$floor','$flat_no','$available_from','$price','$bedroom_no','$kitchen_no','$bathroom_no','$dining_room_no','$short_description')");

          if ($sql && $sql1) {
               header("location: ./all_flats.php");
          }
     }

     // Close connection
     mysqli_close($link);
}
