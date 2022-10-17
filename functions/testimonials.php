<?php
// Include config file
require_once "database/config.php";


// Define variables and initialize with empty values
$name = $email= $message = "";
$name_err = $email_err = $message_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Validate Name
     if (empty(trim($_POST["name"]))) {
          $name_err = "Please Enter Your name";
     } else {
          $name = trim($_POST["name"]);
     }

     // Validate email
     if (empty(trim($_POST["email"]))) {
          $email_err = "Please Enter Your email.";
     } else {
          $email = trim($_POST["email"]);
     }
    
    // Validate message
     if (empty(trim($_POST["message"]))) {
          $message_err = "Please Enter Your message.";
     } else {
          $message = trim($_POST["message"]);
     }


     // Check input errors before inserting in database
     if (empty($name_err)&& empty($email_err) && empty($message_err) ) {
          // Prepare an insert statement
          $sql =$link->query("INSERT INTO testimonials (test_id,name,message,email) VALUES ('', '$name','$message','$email')");
    
          if ($sql) {
               header("location: http://localhost/House_Rent_Web/contact.php");
          }
          else{
            print_r("error");
          }
     }

     // Close connection
     mysqli_close($link);
}
