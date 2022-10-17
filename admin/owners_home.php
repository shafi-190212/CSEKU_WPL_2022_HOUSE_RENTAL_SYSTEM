<?php
include "./pertials/header.php";
include "./database/config.php";
?>
<div class="col-8 mt-5">
     <div class="card">
          <div class="card-body">
               <div>
                    <span class="text-center h4">Home List</span>
                    <a href="./create_home.php">
                         <div class="btn btn-outline-dark float-right"><i class="fa-solid fa-plus" style="padding-right: 5px;"></i>Add New</div>
                    </a>
               </div>
               <table id="example" class="table table-bordered mt-5">
                    <thead>
                         <tr>
                              <th scope="col">SL</th>
                              <th scope="col">House Name</th>
                              <th scope="col">District</th>
                              <th scope="col">Thana</th>
                              <th scope="col">Ward</th>
                              <th scope="col">Road No</th>
                              <th scope="col">Availibility</th>
                              <th scope="col">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $i = 1;
                         $user = htmlspecialchars($_SESSION["user_id"]);
                         $sql = "SELECT homes.*, locations.* FROM homes inner JOIN locations ON homes.location_id=locations.location_id WHERE homes.user_id=$user ORDER BY homes.home_id";
                         $homes = $link->query($sql);
                         while ($row = $homes->fetch_assoc()) :
                         ?>
                              <tr>
                                   <td class="text-center"><?php echo $i++ ?></td>
                                   <td class="text-center">
                                        <p><?php echo $row['house'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <p><?php echo $row['district'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <p><?php echo $row['thana'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <p><?php echo $row['ward'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <p><?php echo $row['road_no'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <?php if ($row['is_available'] == 1) { ?>
                                             <p>Available</p>
                                        <?php } else { ?>
                                             <p>Not Available</p>
                                        <?php } ?>
                                   </td>
                                   <td class="text-center">
                                        <div><a class="btn btn-outline-primary" href="editHome.php?edit=<?php echo $row['user_id']; ?>">Edit</a></div>
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