<?php
include "./pertials/header.php";
include "./functions/homeCreate_functions.php"
?>

<div class="col-6 mt-5">
     <div class="card">
          <div class="card-body">
               <div>
                    <span class="text-center h4">Create Home</span>
                    <a href="./all_home.php">
                         <div class="btn btn-outline-dark float-right"><i class="fa-solid fa-plus" style="padding-right: 5px;"></i>All Homes</div>
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
                                             <input type="text" name="house" class="form-control <?php echo (!empty($house_err)) ? 'is-invalid' : ''; ?>" placeholder="Enter House Name" value="<?php echo $house; ?>" />
                                             <span class="invalid-feedback"><?php echo $house_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" for="form2Example1" class="py-4">District</label>
                                             <input type="text" name="district" id="form2Example1" class="form-control <?php echo (!empty($district_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $district; ?>" placeholder="Enter District" />
                                             <span class="invalid-feedback"><?php echo $district_err; ?></span>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Thana</label>
                                             <input type="text" name="thana" class="form-control <?php echo (!empty($thana_err)) ? 'is-invalid' : ''; ?>" placeholder="Enter Thana" value="<?php echo $thana; ?>" />
                                             <span class="invalid-feedback"><?php echo $thana_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" for="form2Example1" class="py-4">Ward</label>
                                             <input type="text" name="ward" id="form2Example1" class="form-control <?php echo (!empty($ward_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ward; ?>" placeholder="Enter Ward" />
                                             <span class="invalid-feedback"><?php echo $ward_err; ?></span>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" for="form2Example1" class="py-4">Road No</label>
                                             <input type="text" name="road_no" id="form2Example1" class="form-control <?php echo (!empty($road_no_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $road_no; ?>" placeholder="Enter Address" />
                                             <span class="invalid-feedback"><?php echo $road_no_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" for="form2Example1" class="py-4">Is Available</label>
                                             <select type="text" name="is_available" id="form2Example1" class="form-control <?php echo (!empty($is_available_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $is_available; ?>">
                                                  <option selected disabled>-----Select------</option>
                                                  <option value="1">Yes</option>
                                                  <option value="2">No</option>
                                             </select>
                                             <span class="invalid-feedback"><?php echo $is_available_err; ?></span>
                                        </div>
                                   </div>
                              </div>
                              <!-- Email input -->

                              <!-- Submit button -->
                              <div class="form-group text-center">
                                   <input type="submit" style="background-color:#00B98E; color:white;" class="btn" value="Create Home">
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