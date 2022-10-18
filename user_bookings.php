<?php
include "./database/config.php";
session_start();
$user_id = $_SESSION['user_id'];
?>
<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
     <?php include 'navbar.php' ?>
     <div style="padding: 150px;">
          <div class="card">
               <div class="card-header text-center p-3 h2">
                    Your Bookings
               </div>
               <div class="card-body">
                    <table class="table table-bordered">
                         <thead>
                              <tr>
                                   <th scope="col">#</th>
                                   <th scope="col">Home Name</th>
                                   <th scope="col">Flat No</th>
                                   <th scope="col">Booking Date</th>
                                   <th scope="col">Duration</th>
                                   <th scope="col">No of Guest</th>
                                   <th scope="col">Status</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php
                              $i = 1;
                              $sql = "SELECT* FROM (SELECT * FROM homes NATURAL JOIN 
                         ((SELECT flat_id,home_id,
                         user_id as customer_id,booking_date,duration,is_available as booked,no_of_guest
                         FROM flats NATURAL JOIN booking)AS custom) 
                         WHERE custom.home_id = homes.home_id)AS new_table 
                         WHERE new_table.customer_id = $user_id;";
                              $bookings = $link->query($sql);

                              while ($row = $bookings->fetch_assoc()) :
                              ?>
                                   <tr>
                                        <td class="text-center"><?php echo $i++ ?></td>

                                        <td class="text-center">
                                             <?php
                                             $h = $row['flat_id'];
                                             $sqlf = "SELECT homes.* FROM homes inner JOIN flats ON homes.home_id=flats.home_id WHERE flats.flat_id = $h";
                                             $homes2 = $link->query($sqlf);
                                             while ($row3 = $homes2->fetch_assoc()) :
                                             ?>
                                                  <?php
                                                  $p = $row3['home_id'];
                                                  $sqlh = "SELECT homes.*, locations.* FROM homes inner JOIN locations ON homes.location_id=locations.location_id WHERE homes.home_id = $p";
                                                  $homes4 = $link->query($sqlh);
                                                  while ($row4 = $homes4->fetch_assoc()) :
                                                  ?>
                                                       <p><?php echo $row4['house'] ?></p>
                                                  <?php endwhile; ?>
                                             <?php endwhile; ?>
                                        </td>
                                        <td class="text-center">
                                             <?php
                                             $h = $row['flat_id'];
                                             $sqlo = "SELECT booking.*, flats.* FROM booking inner JOIN flats ON booking.flat_id=flats.flat_id WHERE booking.flat_id = $h";
                                             $homes1 = $link->query($sqlo);
                                             while ($row1 = $homes1->fetch_assoc()) :
                                             ?>
                                                  <p><?php echo $row1['flat_id'] ?></p>
                                             <?php endwhile; ?>
                                        </td>
                                        <td class="text-center">
                                             <p><?php echo $row['booking_date'] ?></p>
                                        </td>
                                        <td class="text-center">
                                             <p><?php echo $row['duration'] ?></p>
                                        </td>
                                        <td class="text-center">
                                             <p><?php echo $row['no_of_guest'] ?></p>
                                        </td>
                                        <td class="text-center"> 
                                             <?php if ($row['booked'] == 1) { ?>
                                                  <p class="text-warning">Pending</p>
                                             <?php } else if ($row['booked'] == 0) { ?>
                                                  <p class="text-info">Confirmed</p>
                                             <?php } ?>
                                        </td>

                                   </tr>
                              <?php endwhile; ?>
                         </tbody>
                    </table>
               </div>
          </div>
     </div>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>