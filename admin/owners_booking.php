<?php
include "./pertials/header.php";
include "./database/config.php";
$user_id = $_SESSION['user_id'];
?>
<div class="col-8 mt-5">
     <div class="card">
          <div class="card-body">
               <div>
                    <span class="text-center h4">Booking List</span>
                    <a href="./create_booking.php">
                         <div class="btn btn-outline-dark float-right"><i class="fa-solid fa-plus" style="padding-right: 5px;"></i>Book Now</div>
                    </a>
               </div>
               <table id="example" class="table table-bordered mt-5">
                    <thead>
                         <tr>
                              <th scope="col">SL</th>
                              <th scope="col">Customer Name</th>
                              <th scope="col">Payment Id</th>
                              <th scope="col">Home Name</th>
                              <th scope="col">Flat No</th>
                              <th scope="col">Booking Date</th>
                              <th scope="col">Duration</th>
                              <th scope="col">No of Guest</th>
                              <th scope="col">Actions</th>
                              <th scope="col">Confirm Booking</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $i = 1;
                         $sql = "SELECT* FROM (SELECT * FROM homes NATURAL JOIN 
                         ((SELECT flat_id,home_id,
                         user_id as customer_id,booking_date,duration,no_of_guest,is_available 
                         FROM flats NATURAL JOIN booking)AS custom) 
                         WHERE custom.home_id = homes.home_id)AS new_table 
                         WHERE new_table.user_id = $user_id;";
                         $bookings = $link->query($sql);

                         while ($row = $bookings->fetch_assoc()) :
                         ?>
                              <tr>
                                   <td class="text-center"><?php echo $i++ ?></td>
                                   <td class="text-center">
                                        <?php
                                        $customer_id = $row['customer_id'];
                                        $user_data = $link->query("SELECT * FROM users WHERE user_id = $customer_id");
                                        $user = $user_data->fetch_assoc();
                                        ?>
                                        <p><?php echo $user['name'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <p>Cash on spot</p>
                                   </td>
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
                                        <div><a class="btn btn-outline-primary" href="editFlat.php?edit=<?php echo $row['flat_id']; ?>">Edit</a></div>
                                   </td>
                                   <?php if ($row['flat_id']) { ?>
                                        <td class="text-center">
                                             <div><a class="btn btn-warning" href="confirmFlat.php?edit=<?php echo $row['flat_id']; ?>">Confirm</a></div>
                                        </td>
                                   <?php } ?>
                              </tr>
                         <?php endwhile; ?>
                    </tbody>
               </table>
          </div>

     </div>

</div>
<?php
include "./pertials/footer.php";
?>