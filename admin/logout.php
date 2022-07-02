<?php
    include('db_con.php');
    session_start();
    session_unset();
    session_destroy();
   /* ?>
              <script>
                  window.location.href="blog/login_form.php";
              </script>
    <?php*/
               
   header("location:../index.php");
    exit();
?>