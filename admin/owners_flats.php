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
                         $user = htmlspecialchars($_SESSION["user_id"]);
                         $sql = "SELECT * from homes join (SELECT * FROM flats natural join flat_details) as flat
                         where flat.home_id = homes.home_id and user_id = $user;";
                         $homes = $link->query($sql);
                         while ($row = $homes->fetch_assoc()) :
                         ?>
                              <tr>
                                   <td class="text-center"><?php echo $i++ ?></td>
                                   <td class="text-center">
                                        <p><?php echo $row['house'] ?></p>
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