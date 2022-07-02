<?php 
session_start();
ob_start();
include('header.php'); 
include('db_con.php');
?>
<!--content here---> 
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                           <label for="CATEGORY-DROPDOWN">Criteria</label>
                           <select class="form-control" id="category-dropdown" name="category">
                              <option value="">Select Category</option>
                              <?php
                                 require_once "db_con.php";
                                $result = mysqli_query($conn,"SELECT * FROM naac where parent_id = 0");
                                while($row = mysqli_fetch_array($result)) {
                                 ?>
                              <option value="<?php echo $row['id'];  ?>"><?php echo $row["categories"];?></option>
                              <?php
                                }
                                 ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="SUBCATEGORY">Sub Criteria</label>
                           <select class="form-control" id="sub-category-dropdown" name="sub_category">
                           </select>
                        </div>

                        <div class="form-group">
                           <label for="">PDF Title</label>
                            <textarea id="vaagdevi" name="pdf_title" rows="4" cols="50">
                               
                            </textarea>
                        </div>

                        <div class="mb-3">
                            <label for=""><b>Upload PDF</b></label>
                            <input type="file"   name="file_name"/>
                            </div>

                        <div class="mb-3">
                            <input type="submit" name="submit_btn" value="UPDATE" class="btn btn-primary">
                            <a href="index.php" class="btn btn-secondary">Back</a>  
                        </div>
                     </form>
                    </div>
                </div>
          
            </div>
        </div>
    </div>
</section>
<!--form---->
<?php include('footer.php'); ?>
<!---script----> 
<script>
         $(document).ready(function() {
         $('#category-dropdown').on('change', function() {
         var category_id = this.value;
         $.ajax({
         url: "fetch-subcategory-by-category.php",
         type: "POST",
         data: {
         category_id: category_id
         },
         cache: false,
         success: function(result){
         $("#sub-category-dropdown").html(result);
         }
         });
         });
         });
      </script>
</body>
</html>

<!---post code here----> 
<?php

if(isset($_POST['submit_btn'])){
    $category=mysqli_real_escape_string($conn , $_POST['category']);
    $sub_category=mysqli_real_escape_string($conn , $_POST['sub_category']);
    $title=mysqli_real_escape_string($conn , $_POST['pdf_title']);
    //upload pdf here
    $filename= $_FILES["file_name"]["name"];
    $tmp_name = $_FILES["file_name"]["tmp_name"];
    $dstination = "uploads/".$filename;
    move_uploaded_file( $tmp_name, $dstination);

    $insert="INSERT INTO upload(category,sub_category,pdf_title,pdf)VALUES('$category','$sub_category','$title','$filename')";
    $query=mysqli_query($conn , $insert);

    if($query){
        ?>
                <script>
                    alert('uploaded successfully');
                </script>
        <?php
    }
    else{
        ?>
                <script>
                    alert('Failed,Please Try Again!');
                </script>
        <?php
    }
}
                                
?>