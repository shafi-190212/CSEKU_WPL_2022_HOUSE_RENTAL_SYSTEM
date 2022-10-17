<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
     header("location: welcome.php");
     exit;
}
// Include Functions file
require_once "functions/login_functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Login</title>
     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
     <link href="admin/assets/css/bootstrap.css" rel="stylesheet">
    
     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
     <?php include 'navbar.php'?>
     <div class="container-fluid header bg-white pt-5 ">
          <div class="row g-0 align-items-center justify-content-center flex-column-reverse flex-md-row">
               <div class="col-md-6 p-5 mt-lg-5">
                    <div class="card">
                         <?php
                         if (!empty($login_err)) {
                              echo '<div class="alert alert-danger">' . $login_err . '</div>';
                         }
                         ?>
                         <div class="pt-4 text-center h2 b" style="color:#00B98E">
                              Login
                         </div>
                         <div class="card-body">
                              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                   <!-- Email input -->
                                   <div class="form-outline mb-4">
                                        <div class="form-group">
                                             <label>Email address</label>
                                             <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                                             <span class="invalid-feedback"><?php echo $email_err; ?></span>
                                        </div>
                                   </div>

                                   <!-- Password input -->
                                   <div class="form-outline mb-4">
                                        <div class="form-group">
                                             <label>Password</label>
                                             <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                             <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                        </div>
                                   </div>

                                   <!-- 2 column grid layout for inline styling -->
                                   <div class="row mb-4">
                                        <div class="col d-flex justify-content-center">
                                             <!-- Checkbox -->
                                             <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                                             </div>
                                        </div>

                                        <div class="col">
                                             <!-- Simple link -->
                                             <a href="#!">Forgot password?</a>
                                        </div>
                                   </div>

                                   <!-- Submit button -->
                                   <input type="submit" class="btn btn-primary btn-block mb-4" value="Login">

                                   <!-- Register buttons -->
                                   <div class="text-center mb-5">
                                        <p>Not a member? <a href="register.php">Register</a></p>

                                   </div>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </div>
</body>

</html>