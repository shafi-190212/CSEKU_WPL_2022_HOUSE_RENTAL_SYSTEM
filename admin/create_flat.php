<?php
include "./pertials/header.php";
include "./functions/flatCreate_functions.php"
?>

<div class="col-6 mt-5">
     <div class="card">
          <div class="card-body">
               <div>
                    <span class="text-center h4">Create Flat</span>
                    <a href="./all_flats.php">
                         <div class="btn btn-outline-dark float-right"><i class="fa-solid fa-plus" style="padding-right: 5px;"></i>All Flats</div>
                    </a>
               </div>
               <!-- Register Start -->
               <div class="row border m-5">
                    <div class="col-12 p-4">
                         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">House Name</label>
                                             <select type="text" name="home_id" class="form-control" placeholder="Enter House Name">
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
                                             <label class="form-label" for="form2Example1" class="py-4">Flat Images</label>
                                             <input type="file" name="flat_images[]" id="form2Example1" class="form-control" multiple />
                                             <span class="invalid-feedback"><?php echo $district_err; ?></span>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Floor</label>
                                             <input type="text" name="floor" id="form2Example1" class="form-control <?php echo (!empty($floor_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $floor; ?>" placeholder="Enter floor" />
                                             <span class="invalid-feedback"><?php echo $floor_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Flat No</label>
                                             <input type="text" name="flat_no" id="form2Example1" class="form-control <?php echo (!empty($flat_no_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $floor; ?>" placeholder="Enter Flat No" />
                                             <span class="invalid-feedback"><?php echo $flat_no_err; ?></span>
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Available From</label>
                                             <input type="date" name="available_from" id="form2Example1" class="form-control <?php echo (!empty($available_from_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $available_from; ?>" placeholder="Enter available_from" />
                                             <span class="invalid-feedback"><?php echo $available_from_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Price</label>
                                             <input type="text" name="price" id="form2Example1" class="form-control <?php echo (!empty($price_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $price; ?>" placeholder="Enter floor" />
                                             <span class="invalid-feedback"><?php echo $price_err; ?></span>
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Bedroom No</label>
                                             <input type="text" name="bedroom_no" id="form2Example1" class="form-control <?php echo (!empty($bedroom_no_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $bedroom_no; ?>" placeholder="Enter bedroom_no" />
                                             <span class="invalid-feedback"><?php echo $bedroom_no_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Kitchen No</label>
                                             <input type="text" name="kitchen_no" id="form2Example1" class="form-control <?php echo (!empty($kitchen_no_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $kitchen_no; ?>" placeholder="Enter Kitchen_no" />
                                             <span class="invalid-feedback"><?php echo $kitchen_no_err; ?></span>
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Bathroom No</label>
                                             <input type="text" name="bathroom_no" id="form2Example1" class="form-control <?php echo (!empty($bathroom_no_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $bathroom_no; ?>" placeholder="Enter bedroom_no" />
                                             <span class="invalid-feedback"><?php echo $bathroom_no_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Dining Room No</label>
                                             <input type="text" name="dining_room_no" id="form2Example1" class="form-control <?php echo (!empty($dining_room_no_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $dining_room_no; ?>" placeholder="Enter dining_room_no" />
                                             <span class="invalid-feedback"><?php echo $dining_room_no_err; ?></span>
                                        </div>
                                   </div>
                              </div>

                              <div class="row">
                                   <div class="col-12">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Short Description</label>
                                             <textarea class="form-control" name="short_description" cols="30" rows="3"></textarea>
                                        </div>
                                   </div>
                              </div>

                              <!-- Submit button -->
                              <div class="form-group text-center">
                                   <input type="submit" style="background-color:#00B98E; color:white;" class="btn" value="Create Flat">
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