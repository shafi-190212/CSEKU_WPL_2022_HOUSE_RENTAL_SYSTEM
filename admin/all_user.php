<?php
include "./pertials/header.php";
include "./database/config.php";

if ($_SESSION["role_id"] != 1) {
     header("location: ./welcome.php");
     exit;
}

?>
<div class="col-8 mt-5">
     <div class="card">
          <div class="card-body">
               <div class="mb-3">
                    <span class="text-center h4">User List</span>
                    <a href="./createUser.php">
                         <div class="btn btn-outline-dark float-right"><i class="fa-solid fa-plus" style="padding-right: 5px;"></i>Add New</div>
                    </a>
               </div>
               <table id="example" class="table table-bordered mt-5">
                    <thead>
                         <tr>
                              <th scope="col">SL</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">Nid</th>
                              <th scope="col">Contact No</th>
                              <th scope="col">Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $i = 1;
                         $category = $link->query("SELECT * FROM users");
                         while ($row = $category->fetch_assoc()) :
                         ?>
                              <tr>
                                   <td class="text-center"><?php echo $i++ ?></td>
                                   <td class="text-center">
                                        <p><?php echo $row['name'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <p><?php echo $row['email'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <p><?php echo $row['nid'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <p><?php echo $row['contact_no'] ?></p>
                                   </td>
                                   <td class="text-center">
                                        <div>
                                             <a class="btn btn-outline-primary" href="editUser.php?edit=<?php echo $row['user_id']; ?>">Edit</a>
                                             <a class="btn btn-outline-primary" href="editUser.php?edit=<?php echo $row['user_id']; ?>">Delete</a>
                                        </div>


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