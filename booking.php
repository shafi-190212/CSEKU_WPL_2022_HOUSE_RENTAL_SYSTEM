<?php
include 'database/config.php';
session_start();
$user_id = $_SESSION['user_id'];
$no_of_guest = 1;
$flat_id = $home_id = '';
if (isset($_GET['view'])) {
    $id = $_GET['view'];
    $update = true;
    $data = mysqli_query($link, "SELECT * FROM flats WHERE flat_id=$id");

    if ($data) {
         $value = mysqli_fetch_array($data);
         $flat_id = $value['flat_id'];
         $home_id = $value['home_id'];             
    }
}

if (isset($_POST['confirm_booking'])) {

    $booking_date = mysqli_real_escape_string($link, $_POST['booking_date']);
    $duration = mysqli_real_escape_string($link, $_POST['duration']);
    $no_of_guest = mysqli_real_escape_string($link, $_POST['no_of_guest']);
    $payment_id = 1;
    mysqli_query($link, "INSERT INTO booking (user_id,payment_id,flat_id,booking_date,duration,no_of_guest) VALUES ('$user_id','$payment_id','$flat_id','$booking_date','$duration','$no_of_guest') ") or die('query failed');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link href="assets/css/style.css" rel="stylesheet">
  
  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    :root {
        --blue: #3498db;
        --dark-blue: #2980b9;
        --red: #e74c3c;
        --dark-red: #c0392b;
        --black: #333;
        --white: #fff;
        --light-bg: #eee;
        --box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
    }

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
    }

    *::-webkit-scrollbar {
        width: 10px;
    }

    *::-webkit-scrollbar-track {
        background-color: transparent;
    }

    *::-webkit-scrollbar-thumb {
        background-color: var(--blue);
    }

    .btn,
    .delete-btn {
        width: 100%;
        border-radius: 5px;
        padding: 10px 30px;
        color: var(--white);
        display: block;
        text-align: center;
        cursor: pointer;
        font-size: 20px;
        margin-top: 10px;
    }

    .btn {
        background-color: var(--blue);
    }

    .btn:hover {
        background-color: var(--dark-blue);
    }

    .delete-btn {
        background-color: var(--red);
    }

    .delete-btn:hover {
        background-color: var(--dark-red);
    }

    .message {
        margin: 10px 0;
        width: 100%;
        border-radius: 5px;
        padding: 10px;
        text-align: center;
        background-color: var(--red);
        color: var(--white);
        font-size: 20px;
    }

    .form-container {
        min-height: 100vh;
        background-color: var(--light-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .form-container form {
        padding: 20px;
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        text-align: center;
        width: 500px;
        border-radius: 5px;
    }

    .form-container form h3 {
        margin-bottom: 10px;
        font-size: 30px;
        color: var(--black);
        text-transform: uppercase;
    }

    .form-container form .box {
        width: 100%;
        border-radius: 5px;
        padding: 12px 14px;
        font-size: 18px;
        color: var(--black);
        margin: 10px 0;
        background-color: var(--light-bg);
    }

    .form-container form p {
        margin-top: 15px;
        font-size: 20px;
        color: var(--black);
    }

    .form-container form p a {
        color: var(--red);
    }

    .form-container form p a:hover {
        text-decoration: underline;
    }

    .container {
        min-height: 100vh;
        background-color: var(--light-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .container .profile {
        padding: 20px;
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        text-align: center;
        width: 400px;
        border-radius: 5px;
    }

    .container .profile img {
        height: 150px;
        width: 150px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 5px;
    }

    .container .profile h3 {
        margin: 5px 0;
        font-size: 20px;
        color: var(--black);
    }

    .container .profile p {
        margin-top: 20px;
        color: var(--black);
        font-size: 20px;
    }

    .container .profile p a {
        color: var(--red);
    }

    .container .profile p a:hover {
        text-decoration: underline;
    }

    .booking {
        margin-top: 5%;
        min-height: 80vh;
        background-color: var(--light-bg);
        display: grid;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .booking form {
        padding: 20px;
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        text-align: center;
        width: 900px;
        text-align: center;
        border-radius: 20px;
    }

   

    .booking form .flex {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
        gap: 15px;
    }

    .booking form .flex .inputBox {
        width: 49%;
    }

    .booking form .flex .inputBox span {
        text-align: left;
        display: block;
        margin-top: 15px;
        font-size: 17px;
        color: var(--black);
    }

    .booking form .flex .inputBox .box {
        width: 100%;
        border-radius: 5px;
        background-color: var(--light-bg);
        padding: 12px 14px;
        font-size: 17px;
        color: var(--black);
        margin-top: 10px;
    }

    @media (max-width:650px) {
        .booking form .flex {
            flex-wrap: wrap;
            gap: 0;
        }

        .booking form .flex .inputBox {
            width: 100%;
        }
    }
</style>


<body>

    <?php include 'navbar.php' ?>
    <div class="booking">

        <form action="" method="post" enctype="multipart/form-data">
            <div class="flex">
                <div class="inputBox">
                    <span>Booking Date:</span>
                    <input type="date" name="booking_date" placeholder="Booking Date" class="box">
                    <span>Days to Stay</span>
                    <input type="text" name="duration" placeholder="Duration" class="box">     
                    <span>No. of Guest:</span>
                    <input type="number" name="no_of_guest" placeholder="No of Guest" class="box">                 
                </div>
                <div class="inputBox">
                    <img src="http://localhost/House_Rent_Web/img/property-1.jpg" style="width:100%;height:50vh;">                 
                </div>
                
            </div>
            <input type="submit" value="confirm booking" name="confirm_booking" class="btn">
        </form>

    </div>

</body>

</html>