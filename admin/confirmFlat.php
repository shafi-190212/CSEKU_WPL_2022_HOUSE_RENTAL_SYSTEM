<?php
// Include config file
require_once "database/config.php";


// Define variables and initialize with empty values
$flat_id = $home_id = $flat_images = $floor = $flat_no = $available_from = $price = $bedroom_no = $kitchen_no = $bathroom_no = $dining_room_no = $short_description = "";


if (isset($_GET['edit'])) {
     $flat_id = $_GET['edit'];
     $data = mysqli_query($link, "UPDATE flats SET is_available=0 WHERE flat_id=$flat_id");
     header("location: owners_booking.php");
     exit;
}
