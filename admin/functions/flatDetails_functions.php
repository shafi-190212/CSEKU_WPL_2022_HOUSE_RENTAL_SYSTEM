<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
     header("location: ../login.php");
     exit;
}
// Include config file
require_once "database/config.php";

// Define variables and initialize with empty values
$flat_id=$home_id = $flat_images = $floor = $flat_no = $available_from = $price = $bedroom_no = $kitchen_no = $bathroom_no = $dining_room_no = $short_description = "";


if (isset($_GET['view'])) {
     $id = $_GET['view'];
     $update = true;
     $data = mysqli_query($link, "SELECT * FROM flats natural join flat_details WHERE flat_id=$id");

     if ($data) {

          $value = mysqli_fetch_array($data);

          $flat_id = $value['flat_id'];
          $home_id = $value['home_id'];
          $images = explode(",", $value['flat_images']);
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
          $description = $value['short_description'];
          $house_data = mysqli_query($link, "SELECT * FROM homes natural join locations where home_id = $home_id");
          $house = mysqli_fetch_array($house_data);
          $house_name = $house['house'];
          $district = $house['district'];
          $thana = $house['thana'];
          $ward = $house['ward'];
          $road_no = $house['road_no'];
          $user_id = $house['user_id'];
          
          $userdetail = mysqli_query($link, "SELECT * FROM users natural join userdetails where user_id = $user_id");
          $user_detail = mysqli_fetch_array($userdetail);
          $user_address = $user_detail['address'];
          $user_email = $user_detail['email'];
          $user_name = $user_detail['name'];
          $contact_no = $user_detail['contact_no'];
          $nid = $user_detail['nid'];
     }
}
