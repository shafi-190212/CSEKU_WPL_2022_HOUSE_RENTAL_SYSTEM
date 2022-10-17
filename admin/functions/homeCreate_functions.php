<?php
// Include config file
require_once "database/config.php";


// ----------------------------------------------------------------------------------------------
//                               PHP FUNCTIONS FOR REGISTER
// ----------------------------------------------------------------------------------------------


// Define variables and initialize with empty values
$house = $district = $thana = $ward  = $road_no = $is_available = "";
$house_err = $district_err = $thana_err = $ward_err = $is_available_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Validate Name
     if (empty(trim($_POST["house"]))) {
          $house_err = "Please Enter Your house.";
     } else {
          $house = trim($_POST["house"]);
     }

     // Validate district
     if (empty(trim($_POST["district"]))) {
          $district_err = "Please Enter Your district.";
     } else {
          $district = trim($_POST["district"]);
     }

     // Validate thana
     if (empty(trim($_POST["thana"]))) {
          $thana_err = "Please Enter Your thana.";
     } else {
          $thana = trim($_POST["thana"]);
     }

     // Validate ward
     if (empty(trim($_POST["ward"]))) {
          $ward_err = "Please Enter Your ward.";
     } else {
          $ward = trim($_POST["ward"]);
     }

     // Validate road No
     if (empty(trim($_POST["road_no"]))) {
          $road_no_err = "Please Enter Your road_no.";
     } else {
          $road_no = trim($_POST["road_no"]);
     }

     // Validate Is available
     if (empty(trim($_POST["is_available"]))) {
          $is_available_err = "Please Enter Your is_available.";
     } else {
          $is_available = trim($_POST["is_available"]);
     }

     // Check input errors before inserting in database
     if (empty($house_err) && empty($district_err) && empty($thana_err) && empty($ward_err) && empty($road_no_err) && empty($is_available_err)) {

          $user_id = $_SESSION["user_id"];
          // Prepare an insert statement
          $sql = $link->query("INSERT INTO locations (district,thana,ward,road_no,house) VALUES ('$district', '$thana','$ward', $road_no, '$house')");
          $sql1 = $link->query("INSERT INTO homes (user_id,location_id,is_available) VALUES ($user_id,LAST_INSERT_ID(),$is_available)");

          if ($sql && $sql1) {
               header("location: ./all_home.php");
          }
     }

     // Close connection
     mysqli_close($link);
}
