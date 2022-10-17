<?php
// Include config file
require_once "database/config.php";

// Define variables and initialize with empty values
$id = $name = $email = $nid = $contact = $dob = $address = $occupation = $role = $gender = "";
$name_err = $email_err = $nid_err = $contact_err = $dob_err = $address_err = $occupation_err  = $gender_err = "";

if (isset($_GET['edit'])) {
     $id = $_GET['edit'];
     $update = true;
     $data = mysqli_query($link, "SELECT * FROM users natural join userdetails WHERE user_id=$id");

     if ($data) {

          $value = mysqli_fetch_array($data);

          $name = $value['name'];
          $email = $value['email'];
          $nid =  $value['nid'];
          $contact = $value['contact_no'];
          $role = $value['role_id'];
          $dob = $value['dob'];
          $address = $value['address'];
          $occupation = $value['occupation'];
          $gender = $value['gender'];

     }
}


// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Validate email
     if (empty(trim($_POST["email"]))) {
          $email_err = "Please enter a email.";
     } elseif (!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', trim($_POST["email"]))) {
          $email_err = "Invalid Email";
     }

     // Validate Name
     if (empty(trim($_POST["name"]))) {
          $name_err = "Please Enter Your Name.";
     } else {
          $name = trim($_POST["name"]);
     }

     // Validate Nid
     if (empty(trim($_POST["nid"]))) {
          $nid_err = "Please Enter Your nid.";
     } else {
          $nid = trim($_POST["nid"]);
     }

     // Validate contact
     if (empty(trim($_POST["contact"]))) {
          $contact_err = "Please Enter Your contact.";
     } else {
          $contact = trim($_POST["contact"]);
     }

     // Validate dob
     if (empty(trim($_POST["dob"]))) {
          $dob_err = "Please Enter Your dob.";
     } else {
          $dob = ($_POST["dob"]);
     }

     // Validate address
     if (empty(trim($_POST["address"]))) {
          $address_err = "Please Enter Your address.";
     } else {
          $address = trim($_POST["address"]);
     }

     // Validate occupation
     if (empty(trim($_POST["occupation"]))) {
          $occupation_err = "Please Enter Your occupation.";
     } else {
          $occupation = trim($_POST["occupation"]);
     }

     if (!empty($_POST["gender"])) {
          $gender = trim($_POST["gender"]);
     }

     // Check input errors before inserting in database
     if (empty($name_err) && empty($email_err) && empty($nid_err) && empty($contact_err) && empty($address_err) && empty($occupation_err) && empty($dob_err)) {


          $id = $_POST["user_id"];
          $name = $_POST['name'];
          $email = $_POST['email'];
          $nid =  $_POST['nid'];
          $contact = $_POST['contact'];
          $gender =  $_POST['gender'];
          $dob =  $_POST['dob'];
          print_r($dob);
          $address =  $_POST['address'];
          $occupation =  $_POST['occupation'];
          var_dump($occupation);

          // Prepare an insert statement
          $sql = $link->query("UPDATE users SET name='$name',email='$email',nid='$nid',contact_no=$contact WHERE user_id = $id");
          $sql1 = $link->query("UPDATE userdetails SET gender='$gender',dob='$dob',address='$address',occupation='$occupation' WHERE user_id = $id");

          if ($sql1 && $sql1) {
               header("location: ./all_user.php");
          } else {
               echo "Oops! Something went wrong. Please try again later.";
          }
     }

     // Close connection
     mysqli_close($link);
}
