<?php
// Include config file
require_once "database/config.php";


// ----------------------------------------------------------------------------------------------
//                               PHP FUNCTIONS FOR REGISTER
// ----------------------------------------------------------------------------------------------


// Define variables and initialize with empty values
$password = $confirm_password = $name = $email = $nid = $contact = $dob = $address = $occupation = $role = $gender = "";
$password_err = $confirm_password_err = $name_err = $email_err = $nid_err = $contact_err = $dob_err = $address_err = $occupation_err = $role_err = $gender_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Validate email
     if (empty(trim($_POST["email"]))) {
          $email_err = "Please enter a email.";
     } elseif (!preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', trim($_POST["email"]))) {
          $email_err = "Invalid Email";
     } else {
          // Prepare a select statement
          $sql = "SELECT user_id FROM users WHERE email = ?";

          if ($stmt = mysqli_prepare($link, $sql)) {
               // Bind variables to the prepared statement as parameters
               mysqli_stmt_bind_param($stmt, "s", $param_email);

               // Set parameters
               $param_email = trim($_POST["email"]);

               // Attempt to execute the prepared statement
               if (mysqli_stmt_execute($stmt)) {
                    /* store result */
                    mysqli_stmt_store_result($stmt);

                    if (mysqli_stmt_num_rows($stmt) == 1) {
                         $email_err = "This email is already taken.";
                    } else {
                         $email = trim($_POST["email"]);
                    }
               } else {
                    echo "Oops! Something went wrong. Please try again later.";
               }

               // Close statement
               mysqli_stmt_close($stmt);
          }
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
          $dob = trim($_POST["dob"]);
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

     // Validate role
     if (empty(trim($_POST["role"]))) {
          $role_err = "Please Enter Your role.";
     } else {
          $role = trim($_POST["role"]);
     }
     if (!empty($_POST["gender"])) {
          $gender = trim($_POST["gender"]);
     }
     // Validate password
     if (empty(trim($_POST["password"]))) {
          $password_err = "Please enter a password.";
     } elseif (strlen(trim($_POST["password"])) < 6) {
          $password_err = "Password must have atleast 6 characters.";
     } else {
          $password = trim($_POST["password"]);
     }

     // Validate confirm password
     if (empty(trim($_POST["confirm_password"]))) {
          $confirm_password_err = "Please confirm password.";
     } else {
          $confirm_password = trim($_POST["confirm_password"]);
          if (empty($password_err) && ($password != $confirm_password)) {
               $confirm_password_err = "Password did not match.";
          }
     }

     // Check input errors before inserting in database
     if (empty($name_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($nid_err) && empty($contact_err) && empty($address_err) && empty($occupation_err) && empty($dob_err) && empty($role_err)) {

          // Prepare an insert statement
          $sql = "INSERT INTO users (role_id,name,email,nid,contact_no,password) VALUES (?, ?, ?, ?, ?, ?)";
          $sql1 = "INSERT INTO userdetails (user_id,gender,dob,address,occupation) VALUES (LAST_INSERT_ID(), ?, ?, ?, ?)";

          if ($stmt = mysqli_prepare($link, $sql)) {
               // Bind variables to the prepared statement as parameters
               mysqli_stmt_bind_param($stmt, "issiis", $param_role_id, $param_name, $param_email, $param_nid, $param_contact_no, $param_password);

               // Set parameters
               $param_role_id = $role;
               $param_name = $name;
               $param_email = $email;
               $param_nid = $nid;
               $param_contact_no = $contact;
               $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash



               // Attempt to execute the prepared statement
               if (mysqli_stmt_execute($stmt)) {

                    $smtp1 = mysqli_prepare($link, $sql1);
                    mysqli_stmt_bind_param($smtp1, "ssss", $param_gender, $param_dob, $param_address, $param_occupation);
                    $param_gender = $gender;
                    $param_dob = $dob;
                    $param_address = $address;
                    $param_occupation = $occupation;
                    mysqli_stmt_execute($smtp1);
                    // Redirect to login page
                    header("location: login.php");
               } else {
                    echo "Oops! Something went wrong. Please try again later.";
               }

               // Close statement
               mysqli_stmt_close($stmt);
          }
     }

     // Close connection
     mysqli_close($link);
}
