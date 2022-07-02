<?php
session_start();
ob_start();
include('common_links.php');
//header
include('common_header.php');

?>
<!------------------------------------Login------------------------------------> 
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow">
                    <div class="card-body">
                         <!------------form---------------> 
                        <form action=""  method="POST"  >
                            <div class="mb-3">
                                <label for="" class="form-label">UserName</label>
                                <input type="text" class="form-control" placeholder="Enter Your Username" name="username"   required>
                            
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" name="pass" placeholder="Enter Your Password"   required>
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit_btn">Submit</button>
                        </form>
                        <!------form error------------> 
                        <?php
                        if(isset($_SESSION['error'])){
                           $error =  $_SESSION['error'];
                           echo "<p class='bg-danger p-2 my-2 text-white' >" .$error. "</p>";
                           unset($_SESSION['error']);
                        }
                        ?>
                    </div>
                </div>
                   
            </div>
        </div>
    </div>
</section>

<?php
//footer
include('common_footer.php');
include('admin/db_con.php');
if(isset($_POST['submit_btn'])){
    $user = mysqli_real_escape_string($conn , $_POST['username']);
    $pass =  mysqli_real_escape_string ($conn , $_POST['pass']);

    echo $sql = "SELECT * FROM user_login WHERE username = '". $user ."' AND password='". $pass. "'";
    $query = mysqli_query($conn ,  $sql);
                //accesing array for sessions
    //$fetch=mysqli_fetch_array($query);
 
    $nums = mysqli_num_rows($query);
   
    if($nums > 0){  
        $result = mysqli_fetch_assoc($query);
        $user_info=array($result['id'],$result['username'],$result['role']);
        $_SESSION['user_info'] =$user_info;
      header("location:admin/index.php");
    }
    else {
     
      $_SESSION['error'] = "Invalid username/password";
     header("location:login.php");
        
    }
    
}
?>