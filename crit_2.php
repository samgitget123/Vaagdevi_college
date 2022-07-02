<?php
include('admin/db_con.php');
include('common_links.php');
include('common_header.php');
//queries
//$select="SELECT * FROM naac LEFT JOIN upload ON naac.id=upload.id";
//$select="SELECT * FROM naac LEFT JOIN upload ON naac.id=upload.id WHERE category=1";
$select5="SELECT * FROM upload WHERE category=2 AND sub_category=11 ";
$query5 = mysqli_query($conn , $select5);
$nums5=mysqli_num_rows($query5);
//////////////////////////////////content/////////////////////////////////////
?>
<style>
    .crit_heads{
        margin: 10px 0px!important;
    }
</style>
<section>
<!-------banner here----------> 
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
            <h3 class="text-center my-5">Criterion 2 - Teaching-learning and Evaluation</h3>
            <div class="accordion my-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h6>2.1 Student Enrollment and Profile</h6>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!---uploaded pdf's--->
                        <?php
                        
                            if($nums5){
                                while($file5=mysqli_fetch_assoc($query5)){

                        
                        ?>
                        <a href="admin/uploads/<?= $file5['pdf']; ?>" target="_blank" class="pdf"><?= $file5['pdf_title']; ?></a>
                        <?php
                            }
                            }
                        ?>
                    </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h6>2.2 Catering to Student Diversity</h6>
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <!--------------second loop------------> 
                   <?php
                   $select6 = "SELECT * FROM upload WHERE category=2 AND sub_category = 12";
                   $query6 = mysqli_query($conn , $select6);
                   $nums6=mysqli_num_rows($query6);
                   if($nums6){
                    while($file6=mysqli_fetch_assoc($query6)){

                    
                   ?>
                   <!------------pdf-----------> 
                   <a href="admin/uploads/<?= $file6['pdf']; ?>" target="_blank" class="pdf"><?= $file6['pdf_title']; ?></a>
                   <!-----------pdf------------> 
                   <?php
                   }
                    }
                   ?>
                    </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h6>2.3 Teaching- Learning Process</h6>
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <!----------------third loop----------------> 
                    <?php
                   $select7 = "SELECT * FROM upload WHERE category=2 AND sub_category = 13";
                   $query7 = mysqli_query($conn , $select7);
                   $nums7=mysqli_num_rows($query7);
                   if($nums7){
                    while($file7=mysqli_fetch_assoc($query7)){

                    
                   ?>
                   <!------------pdf-----------> 
                   <a href="admin/uploads/<?= $file7['pdf']; ?>" target="_blank" class="pdf"><?= $file7['pdf_title']; ?></a>
                   <!-----------pdf------------> 
                   <?php
                   }
                }
                   ?>
                    </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h6>2.4 Teacher Profile and Quality</h6>
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <!--------------fouth loop---------------->
                    <?php
                   $select8 = "SELECT * FROM upload WHERE category=2 AND sub_category = 14";
                   $query8 = mysqli_query($conn , $select8);
                   $nums8=mysqli_num_rows($query8);
                   if($nums8){
                    while($file8=mysqli_fetch_assoc($query8)){

                    
                   ?>
                   <!------------pdf-----------> 
                   <a href="admin/uploads/<?= $file8['pdf']; ?>" target="_blank" class="pdf"><?= $file8['pdf_title']; ?></a>
                   <!-----------pdf------------> 
                   <?php
                   }
                    }
                   ?>
                    </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                    <h6>2.5 Evaluation Process and Reforms</h6>
                    </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <!--------------fouth loop---------------->
                    <?php
                   $select9 = "SELECT * FROM upload WHERE category=2 AND sub_category = 15";
                   $query9 = mysqli_query($conn , $select9);
                   $nums9=mysqli_num_rows($query9);
                   if($nums9){
                    while($file9=mysqli_fetch_assoc($query9)){

                    
                   ?>
                   <!------------pdf-----------> 
                   <a href="admin/uploads/<?= $file9['pdf']; ?>" target="_blank" class="pdf"><?= $file9['pdf_title']; ?></a>
                   <!-----------pdf------------> 
                   <?php
                   }
                    }
                   ?>
                    </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseFive">
                    <h6>2.6 Student Performance and Learning Outcomes</h6>
                    </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <!--------------fouth loop---------------->
                    <?php
                   $select10 = "SELECT * FROM upload WHERE category=2 AND sub_category = 16";
                   $query10 = mysqli_query($conn , $select10);
                   $nums10=mysqli_num_rows($query10);
                   if($nums10){
                    while($file10=mysqli_fetch_assoc($query10)){

                    
                   ?>
                   <!------------pdf-----------> 
                   <a href="admin/uploads/<?= $file10['pdf']; ?>" target="_blank" class="pdf"><?= $file10['pdf_title']; ?></a>
                   <!-----------pdf------------> 
                   <?php
                   }
                    }
                   ?>
                    </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseFour">
                    <h6>2.7 Student Satisfaction Survey</h6>
                    </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <!--------------fouth loop---------------->
                    <?php
                   $select11 = "SELECT * FROM upload WHERE category=2 AND sub_category = 17";
                   $query11 = mysqli_query($conn , $select11);
                   $nums11=mysqli_num_rows($query11);
                   if($nums11){
                    while($file11=mysqli_fetch_assoc($query11)){

                    
                   ?>
                   <!------------pdf-----------> 
                   <a href="admin/uploads/<?= $file11['pdf']; ?>" target="_blank" class="pdf"><?= $file11['pdf_title']; ?></a>
                   <!-----------pdf------------> 
                   <?php
                   }
                    }
                   ?>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-lg-5">
                <!-----index here-------> 
            </div>
        </div>
    </div>
</section>
<?php
include('common_footer.php');
?>