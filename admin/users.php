<?php
session_start();
include('header.php');
include('helpers.php');
ob_start();
   include ('db_con.php');
  
   $user = "SELECT * FROM user_login";
   $query = mysqli_query($conn ,  $user);
   $users = mysqli_num_rows( $query);
   ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h5 class="mb-2 text-gray-800">VAAGDEVI</h5>
   <!-- DataTales Example -->
   <div class="card shadow">
      <div class="card-header py-3 d-flex justify-content-between">
         <div>
            <a href="user_reg.php">
               <h6 class="font-weight-bold text-primary mt-2">Add User</h6>
            </a>
         </div>
         <div>
            <form class="navbar-search">
               <div class="input-group">
                  <input type="text" class="form-control bg-white border-0 small" placeholder="Search for...">
                  <div class="input-group-append">
                     <button class="btn btn-primary" type="button"> <i class="fas fa-search fa-sm"></i> </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th>Sr.No</th>
                     <th>Users</th>
                     <th>Role</th>
                     <th colspan="2">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $count=1;
                    
                         //users
                         if($users){
                            while($authority=mysqli_fetch_assoc( $query)){  
                              

                                
                  ?>
                                
                           
                  <tr>
                     <td><?= $count++; ?></td>
                     <td><?= $authority['username'] ?></td>
                     <td><?php echo $role=  ($authority['role'] ==  1)? 'Admin': 'Co-Admin'; 
                     
                     ?></td>
                     <td>
                     <?php if(is_admin($_SESSION['user_info'][2])) {  ?>
                        <form class="mt-2" method="POST" onsubmit="return confirm('Are you sure, You Want to delete?')">
                                       <!--hidden input--> 
                                    <input type="hidden" name="id" value="<?= $authority['id'] ?>">
                                    <input type ="submit" name="deletePost" value="Delete" class="btn btn-sm btn-danger">
                        </form>
                        <?php } ?>
                     </td>
                  </tr>
                  <?php
                     }
                     }
                     else{
                     ?>
                  <tr>
                     <td>No Record Found</td>
                  </tr>
                  <?php
                     }
                     ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->
</div>
<?php include('footer.php'); 
//deletion
if(isset($_POST['deletePost'])){
   $id = $_POST['id'];
   $delete_cat = "DELETE FROM user_login WHERE id = '$id'";
   $run = mysqli_query($conn , $delete_cat );
   if($run ){
   $msg =['post  has been deleted succsfully!', 'alert-success'];
     $_SESSION['msg'] = $msg;
   header("location:index.php");
   }
   else{
      $msg =['Failed, please try again!', 'alert-danger'];
     $_SESSION['msg'] = $msg;
   header("location:index.php");
   }
}

?>