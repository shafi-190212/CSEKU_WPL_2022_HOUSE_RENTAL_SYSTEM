<?php
// Include config file
require_once "database/config.php";

// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Check if email is empty
     if (empty(trim($_POST["email"]))) {
          $email_err = "Please enter email.";
     } else {
          $email = trim($_POST["email"]);
     }

     // Check if password is empty
     if (empty(trim($_POST["password"]))) {
          $password_err = "Please enter your password.";
     } else {
          $password = trim($_POST["password"]);
     }

     // Validate credentials
     if (empty($email_err) && empty($password_err)) {
          // Prepare a select statement
          $sql = "SELECT user_id,role_id,name, email, password  FROM users WHERE email = ?";

          if ($stmt = mysqli_prepare($link, $sql)) {
               // Bind variables to the prepared statement as parameters
               mysqli_stmt_bind_param($stmt, "s", $param_email);

               // Set parameters
               $param_email = $email;

               // Attempt to execute the prepared statement
               if (mysqli_stmt_execute($stmt)) {
                    // Store result
                    mysqli_stmt_store_result($stmt);

                    // Check if email exists, if yes then verify password
                    if (mysqli_stmt_num_rows($stmt) == 1) {
                         // Bind result variables
                         mysqli_stmt_bind_result($stmt, $user_id, $role_id, $name, $email, $hashed_password);
                         if (mysqli_stmt_fetch($stmt)) {
                              if (password_verify($password, $hashed_password)) {
                                   // Password is correct, so start a new session
                                   session_start();

                                   // Store data in session variables
                                   $_SESSION["loggedin"] = true;
                                   $_SESSION["user_id"] = $user_id;
                                   $_SESSION["email"] = $email;
                                   $_SESSION["name"] = $name;
                                   $_SESSION["role_id"] = $role_id;

                                   // Redirect user to welcome page
                                   header("location: admin/welcome.php");
                              } else {
                                   // Password is not valid, display a generic error message
                                   $login_err = "Invalid email or password.";
                              }
                         }
                    } else {
                         // email doesn't exist, display a generic error message
                         $login_err = "Invalid email or password.";
                    }
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
