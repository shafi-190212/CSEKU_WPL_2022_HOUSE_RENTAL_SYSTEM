<?php
// Include config file
require_once "functions/reset_password_functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Login</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
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
                              Reset Password
                         </div>
                         <div class="card-body">
                              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                   <!-- Email input -->
                                   <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password" name="new_password" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>">
                                        <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                                   </div>

                                   <!-- Password input -->
                                   <div class="form-outline mb-4">
                                        <div class="form-group">
                                             <label>Confirm Password</label>
                                             <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                                             <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                        </div>
                                   </div>

                                   <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                        <a class="btn btn-link ml-2" href="welcome.php">Cancel</a>
                                   </div>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </div>
</body>

</html>