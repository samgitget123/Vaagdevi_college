<?php
session_start();
ob_start();
include('header.php');
include('db_con.php');
///////////////////////////////////////REGISTRATION FORM//////////////////////////////////////////
?>
<!----------------form validation-----------------> 

<section class="my-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-5">
               <div class="card shadow">
                <h4 class="text-center mt-5">Creat User Account</h4>
                <div class="card-body">
                <?php
                if(!empty($error)){
                    echo "<p class='bg-danger text-white text-center p-3'>".$error."</p>";
                  
                }
               ?>
                    <!------------------form----------------->
                    <form action="" method="POST" >
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"> 
                            
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">UserName</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required> 
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Password"  required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="c_Password">
                        </div>

                        <div class="mb-3">
                            <select name="role" id="" class="form-control" required>
                                <option value="">Select Role</option>
                                <option value="1">Admin</option>
                                <option value="0">Co-Admin</option>
                            </select>
                        </div>
                       
                        <div class="mb-3">
                            <input type="submit" name="add_user" class="btn btn-primary" value="Create">
                        </div>
                       
                    </form> 
                   
                </div>
               </div>
            </div>
        </div>
    </div>
</section>
<?php
include('footer.php');

//login connection and vaidation php 
if(isset($_POST['add_user'])){
    $name = mysqli_real_escape_string($conn , $_POST['name']);
    $username = mysqli_real_escape_string($conn , $_POST['username']);
    $pass = mysqli_real_escape_string($conn , $_POST['Password']);
    $c_pass = mysqli_real_escape_string($conn , $_POST['c_Password']);
    $role = mysqli_real_escape_string($conn , $_POST['role']);
    
    //validations 
    if(strlen($username) < 4 || strlen($username) >26){
        $error = "username must be atleast greater than 4 char";
  
    }
    elseif(strlen( $pass) < 4){
        $error = "password must be grater than 4 char";
     
    }
    elseif($pass!=$c_pass){
        $error = "password does not match";
       
    }
    else
    {
        $sql="SELECT * FROM user_login WHERE username='$username'";
        $query=mysqli_query($conn ,$sql);

        $row=mysqli_num_rows($query);
       
        if($row >= 1){

            $error="Email already Exist!";
           
        }
        else{
          $sql2 = "INSERT INTO user_login(name , username , password , c_password , role ) 
                    values ('". trim($name) ."','". trim($username). "','". trim($pass) ."','". trim($c_pass) ."','". trim($role) . "')";
            $query2 = mysqli_query($conn , $sql2);
            if($query2){
              
                $msg = ['user  has been added successfully', 'alert-success' ];
                $_SESSION['msg'] = $msg;
               header("location:user_reg.php");
                 
            }
            else{
            
               $error="Failed,please try again";
               header("location:user_reg.php");
                 
            }
        }
    }

    
}

 




?>