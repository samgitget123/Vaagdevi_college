<?php
session_start();
include('header.php');
include('helpers.php');
ob_start();
   include ('db_con.php');
  
   //query 
   $table="SELECT * FROM naac LEFT JOIN upload ON naac.id=upload.id";
   $data = mysqli_query($conn , $table);
   $rows = mysqli_num_rows($data);
   
   //criteria 
   $cat = "SELECT * FROM naac WHERE parent_id=0";
   $push = mysqli_query($conn , $cat);
   $nums = mysqli_num_rows($push);
   

   
   //pdf
   $cat_pdf = "SELECT * FROM upload";
   $pdf_file = mysqli_query($conn ,  $cat_pdf);
   $pdf = mysqli_num_rows($pdf_file);
   ?>
<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <h5 class="mb-2 text-gray-800">VAAGDEVI</h5>
   <!-- DataTales Example -->
   <div class="card shadow">
      <div class="card-header py-3 d-flex justify-content-between">
         <div>
            <a href="naac_upload.php">
               <h6 class="font-weight-bold text-primary mt-2">Add New</h6>
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
                     <th>pdf</th>
                     <th colspan="2">Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     $count=1;
                    
                         //criteria
                         if($nums){
                            while($tab2=mysqli_fetch_assoc($push)){  
                                if($pdf){
                                 while($pdf_res=mysqli_fetch_assoc( $pdf_file)){

                                
                  ?>
                                
                           
                  <tr>
                     <td><?= $count++; ?></td>
                     <td><?= $pdf_res['pdf_title'] ?></td>
                     <!----------retriction----------> 
                     <?php
                    
                     ?>
                     <td>
                        <?php
                        if(is_admin($_SESSION['user_info'][2])){

                        
                         
                        ?>
                        <form class="mt-2" method="POST" onsubmit="return confirm('Are you sure, You Want to delete?')">
                                       <!--hidden input--> 
                                    <input type="hidden" name="id" value="<?= $pdf_res['id'] ?>">
                                    <input type ="submit" name="deletePost" value="Delete" class="btn btn-sm btn-danger">
                        </form>
                        <?php
                        }
                        ?>
                     </td>
                     
                  </tr>
                  <?php
                     }
                     }
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
   $delete_cat = "DELETE FROM upload WHERE id = '$id'";
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