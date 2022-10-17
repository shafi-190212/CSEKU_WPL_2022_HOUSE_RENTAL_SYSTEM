<?php
include "./pertials/header.php";
include "./functions/bookingCreate_functions.php"
?>

<div class="col-6 mt-5">
     <div class="card">
          <div class="card-body">
               <div>
                    <span class="text-center h4">Create New Booking</span>
                    <a href="./all_bookings.php">
                         <div class="btn btn-outline-dark float-right"><i class="fa-solid fa-plus" style="padding-right: 5px;"></i>All Bookings</div>
                    </a>
               </div>
               <!-- Register Start -->
               <div class="row border m-5">
                    <div class="col-12 p-4">
                         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">House Name</label>
                                             <select id="select_home" type="text" name="home_id" class="form-control" placeholder="Enter House Name">
                                                  <option selected disabled>---------Select-------</option>

                                                  <?php
                                                  $sql = "SELECT homes.*, locations.* FROM homes inner JOIN locations ON homes.location_id=locations.location_id ORDER BY homes.home_id";
                                                  $homes = $link->query($sql);
                                                  while ($row = $homes->fetch_assoc()) :
                                                  ?>
                                                       <option value="<?php echo $row['home_id']  ?>"><?php echo $row['house']  ?></option>
                                                  <?php endwhile; ?>
                                             </select>
                                             <span class="invalid-feedback"><?php echo $house_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Floor No</label>
                                             <select id="select_home" type="text" name="floor" class="form-control" placeholder="Enter House Name">
                                                  <option selected disabled>---------Select-------</option>

                                                  <?php
                                                  $sql = "SELECT flats.*, flat_details.* FROM flats inner JOIN flat_details ON flats.flat_id=flat_details.flat_id";
                                                  $homes = $link->query($sql);
                                                  while ($row = $homes->fetch_assoc()) :
                                                  ?>
                                                       <option value="<?php echo $row['floor']  ?>"><?php echo $row['floor']  ?></option>
                                                  <?php endwhile; ?>
                                             </select>
                                             <span class="invalid-feedback"><?php echo $house_err; ?></span>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Flat No</label>
                                             <select id="select_home" type="text" name="flat_id" class="form-control" placeholder="Enter House Name">
                                                  <option selected disabled>---------Select-------</option>

                                                  <?php
                                                  $sql = "SELECT flats.*, flat_details.* FROM flats inner JOIN flat_details ON flats.flat_id=flat_details.flat_id";
                                                  $homes = $link->query($sql);
                                                  while ($row = $homes->fetch_assoc()) :
                                                  ?>
                                                       <option value="<?php echo $row['flat_id']  ?>"><?php echo $row['flat_id']  ?></option>
                                                  <?php endwhile; ?>
                                             </select>
                                             <span class="invalid-feedback"><?php echo $flat_id_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Booking Date</label>
                                             <input type="date" name="booking_date" id="form2Example1" class="form-control <?php echo (!empty($booking_date_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $booking_date; ?>" placeholder="Enter booking_date" />
                                             <span class="invalid-feedback"><?php echo $booking_date_err; ?></span>
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Duration</label>
                                             <input type="text" name="duration" id="form2Example1" class="form-control <?php echo (!empty($duration_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $duration; ?>" placeholder="Duration" />
                                             <span class="invalid-feedback"><?php echo $duration_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">No of Guest</label>
                                             <input type="text" name="no_of_guest" id="form2Example1" class="form-control <?php echo (!empty($no_of_guest_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $no_of_guest; ?>" placeholder="Enter no_of_guest" />
                                             <span class="invalid-feedback"><?php echo $no_of_guest_err; ?></span>
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Select Payment Method</label>
                                             <select id="select_home" type="text" name="payment_id" class="form-control" placeholder="Enter House Name">
                                                  <option selected disabled>---------Select-------</option>
                                                  <option value="1">Cash On Spot</option>
                                             </select>
                                             <span class="invalid-feedback"><?php echo $house_err; ?></span>
                                        </div>
                                   </div>
                              </div>

                              <!-- Submit button -->
                              <div class="form-group text-center">
                                   <input type="submit" style="background-color:#00B98E; color:white;" class="btn" value="Book Now">
                              </div>


                         </form>
                    </div>
               </div>

          </div>

     </div>

</div>

<?php
include "./pertials/footer.php";
?>