<?php
include "./pertials/header.php";
include "./database/config.php";
?>
<div class="col-8 mt-5">
     <div class="card">
          <div class="card-body">
               <div>
                    <span class="text-center h4">Flat List</span>
                    <a href="./create_flat.php">
                         <div class="btn btn-outline-dark float-right"><i class="fa-solid fa-plus" style="padding-right: 5px;"></i>Add New</div>
                    </a>
               </div>
               <table id="example" class="table table-bordered mt-5">
                    <thead>
                         <tr>
                              <th scope="col">SL</th>
                              <th scope="col">House Name</th>
                              <th scope="col">Floor</th>
                              <th scope="col">No of Flat</th>
                              <th scope="col">Available From</th>
                              <th scope="col">Price</th>
                              <th scope="col">View Details</th>
                              <th scope="col"> Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $i = 1;
                         $sql = "SELECT flats.*, flat_details.* FROM flats inner JOIN flat_details ON flats.flat_id=flat_details.flat_id";
                         $homes = $link->query($sql);
                         while ($row = $homes->fetch_assoc()) :
                         ?>
                              <tr>
                                   <td class="text-center"><?php echo $i++ ?></td>
                                   <td class="text-center">
                                        <?php
                                        $h = $row['home_id'];
                                        $sqlo = "SELECT homes.*, locations.* FROM homes inner JOIN locations ON homes.location_id=locations.location_id WHERE homes.home_id = $h ORDER BY homes.home_id";
                                        $homes1 = $link->query($sqlo);
                                        while ($row1 = $homes1->fetch_assoc()) :
                                        ?>
                                             <p><?php echo $row1['house'] ?></p>
                                        <?php endwhile; ?>
                                   </td>
                                   <td class="text-center">
                                        <p><?php echo $row['floor'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <p><?php echo $row['flat_no'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <p><?php echo $row['available_from'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <p><?php echo $row['price'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <div><a class="btn btn-info" href="flat_details.php?view=<?php echo $row['flat_id']; ?>">view</a></div>
                                   </td>

                                   <td class="text-center">
                                        <div><a class="btn btn-primary" href="editFlat.php?edit=<?php echo $row['flat_id']; ?>">Edit</a></div>
                                        <div><a class="btn btn-danger" href="editFlat.php?delete=<?php echo $row['flat_id']; ?>">Delete</a></div>
                                   </td>
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