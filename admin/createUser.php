<?php
include "./pertials/header.php";
include "./functions/userCreate_functions.php"
?>

<div class="col-6 mt-5">
     <div class="card">
          <div class="card-body">
               <div>
                    <span class="text-center h4">Create User</span>
                    <a href="./all_user.php">
                         <div class="btn btn-outline-dark float-right"><i class="fa-solid fa-plus" style="padding-right: 5px;"></i>All Users</div>
                    </a>
               </div>
               <!-- Register Start -->
               <div class="row border m-5">
                    <div class="col-12 p-4">
                         <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Name</label>
                                             <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" placeholder="Enter Your Name" value="<?php echo $name; ?>" />
                                             <span class="invalid-feedback"><?php echo $name_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" class="py-4">Email address</label>
                                             <input type="text" name="email" id="form2Example1" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>" placeholder="Enter Email Address" />
                                             <span class="invalid-feedback"><?php echo $email_err; ?></span>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" for="form2Example1" class="py-4">NID</label>
                                             <input type="number" name="nid" id="form2Example1" class="form-control <?php echo (!empty($nid_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nid; ?>" placeholder="Enter NID NO" />
                                             <span class="invalid-feedback"><?php echo $nid_err; ?></span>
                                        </div>

                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" for="form2Example1" class="py-4">Contact No</label>
                                             <input type="number" name="contact" id="form2Example1" class="form-control <?php echo (!empty($contact_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $contact; ?>" placeholder="Enter Contact No" />
                                             <span class="invalid-feedback"><?php echo $contact_err; ?></span>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" for="form2Example1" class="py-4">Date of Birth</label>
                                             <input type="date" name="dob" id="form2Example1" class="form-control <?php echo (!empty($dob_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $dob; ?>" placeholder="Enter Date Of Birth" />
                                             <span class="invalid-feedback"><?php echo $dob_err; ?></span>
                                        </div>

                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" for="form2Example1" class="py-4">Address</label>
                                             <input type="text" name="address" id="form2Example1" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $address; ?>" placeholder="Enter Address" />
                                             <span class="invalid-feedback"><?php echo $address_err; ?></span>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" for="form2Example1" class="py-4">Occupation</label>
                                             <input type="text" name="occupation" id="form2Example1" class="form-control <?php echo (!empty($occupation_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $occupation; ?>" placeholder="Enter Occupation" />
                                             <span class="invalid-feedback"><?php echo $occupation_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-outline mb-4">
                                             <label class="form-label" for="form2Example1" class="py-4">Your Role</label>
                                             <select type="text" name="role" class="form-control <?php echo (!empty($role_err)) ? 'is-invalid' : ''; ?>" />
                                             <option disabled>----Select One-----</option>
                                             <option value="1">Home Owner</option>
                                             <option value="2">Customer</option>
                                             </select>
                                             <span class="invalid-feedback"><?php echo $role_err; ?></span>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6 mb-3">
                                        <div class="mb-2">
                                             Gender
                                        </div>
                                        <div class="form-check form-check-inline">
                                             <input name="gender" class="form-check-input" type="radio" id="inlineRadio1" value="Male" />
                                             <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                             <input name="gender" class="form-check-input" type="radio" id="inlineRadio2" value="Female" />
                                             <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>

                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Password</label>
                                             <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                                             <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-group mb-4">
                                             <label>Confirm Password</label>
                                             <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                                             <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                                        </div>
                                   </div>
                              </div>
                              <!-- Email input -->

                              <!-- Submit button -->
                              <div class="form-group text-center">
                                   <input type="submit" style="background-color:#00B98E; color:white;" class="btn" value="Create User">
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