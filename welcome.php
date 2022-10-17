<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
     header("location: login.php");
     exit;
}

?>

<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="admin/assets/css/admin.css">
</head>

<body>

     <div class="sidebar">
          <a class="active" href="welcome.php">HomeLand</a>
          <a href="index.php"><i class="fa-solid fa-house-user"></i> HomeLand WebSite</a>
          <a href="admin/create_home.php"><i class="fa-solid fa-plus" style="padding-right: 5px;"></i>Create Home</a>
          <a href="admin/create_flat.php"><i class="fa-solid fa-plus" style="padding-right: 5px;"></i>Create Flat</a>
          <a href="admin/create_post.php"><i class="fa-solid fa-plus" style="padding-right: 5px;"></i>Create Post</a>
          <hr />
          <a href="reset-password.php" class="btn btn-warning"><i class="fa-solid fa-pen-to-square" style="padding-right: 5px;"></i>Reset Your Password</a>
          <a href="logout.php" class="btn btn-danger ml-3"> <i class="fa-solid fa-right-from-bracket" style="padding-right: 5px;"></i>Sign Out</a>
     </div>

     <div class="content">
          <h1 style="margin-left:240px;">Hi, <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b>. Welcome to Admin Panel.</h1>
     </div>

</body>