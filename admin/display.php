<?php
include('db_con.php');

$select="SELECT * FROM naac LEFT JOIN upload ON naac.id=upload.id";
$query=mysqli_query($conn , $select);
$nums=mysqli_num_rows($query);
$blow=mysqli_fetch_assoc($query);

        echo $blow['pdf_title'];

?>