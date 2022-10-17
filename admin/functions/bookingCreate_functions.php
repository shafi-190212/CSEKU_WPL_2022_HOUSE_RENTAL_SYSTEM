<?php
// Include config file
require_once "database/config.php";


// ----------------------------------------------------------------------------------------------
//                               PHP FUNCTIONS FOR REGISTER
// ----------------------------------------------------------------------------------------------


// Define variables and initialize with empty values
$flat_id = $booking_date = $no_of_guest = $duration = $payment_id = "";
$flat_id_err = $booking_date_err = $no_of_guest_err = $duration_err = $payment_id_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {


     $flat_id = trim($_POST["flat_id"]);
     $booking_date = trim($_POST["booking_date"]);
     $no_of_guest  = trim($_POST["no_of_guest"]);

     // Validate duration
     if (empty(trim($_POST["duration"]))) {
          $duration_err = "Please Enter Your duration.";
     } else {
          $duration = trim($_POST["duration"]);
     }

     // Validate Is available
     if (empty(trim($_POST["payment_id"]))) {
          $payment_id_err = "Please Enter Your payment_id.";
     } else {
          $payment_id = trim($_POST["payment_id"]);
     }


     // Check input errors before inserting in database
     if (empty($flat_id_err) && empty($booking_date_err) && empty($no_of_gaste_err) && empty($duration_err) && empty($payment_id_err)) {

          $user_id = $_SESSION["user_id"];
          // Prepare an insert statement
          $sql = $link->query("INSERT INTO booking (user_id,payment_id,flat_id,booking_date,duration,no_of_guest) VALUES ('$user_id','$payment_id','$flat_id','$booking_date','$duration','$no_of_guest')");

          if ($sql) {
               header("location: ./all_bookings.php");
          }
     }

     // Close connection
     mysqli_close($link);
}
