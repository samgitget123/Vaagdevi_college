<?php
include('admin/db_con.php');
include('common_links.php');
include('common_header.php');
//queries
//$select="SELECT * FROM naac LEFT JOIN upload ON naac.id=upload.id";
//$select="SELECT * FROM naac LEFT JOIN upload ON naac.id=upload.id WHERE category=1";
$select12="SELECT * FROM upload WHERE category=4 AND sub_category=23 ";
$query12 = mysqli_query($conn , $select12);
$nums12=mysqli_num_rows($query12);
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
            <h3 class="text-center my-5">Criterion 4 - Infrastructure and Learning Resources</h3>
            <div class="accordion my-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h6>4.1 Physical Facilities</h6>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!---uploaded pdf's--->
                        <?php
                        
                            if($nums12){
                                while($file12=mysqli_fetch_assoc($query12)){

                        
                        ?>
                        <a href="admin/uploads/<?= $file12['pdf']; ?>" target="_blank" class="pdf"><?= $file12['pdf_title']; ?></a>
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
                    <h6>4.2 Library as a Learning Resource</h6>
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <!--------------second loop------------> 
                   <?php
                   $select6 = "SELECT * FROM upload WHERE category=4 AND sub_category = 24";
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
                    <h6>4.3 IT Infrastructure</h6>
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <!----------------third loop----------------> 
                    <?php
                   $select7 = "SELECT * FROM upload WHERE category=4 AND sub_category = 25";
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
                    <h6>4.4 Maintenance of Campus Infrastructure</h6>
                    </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <!--------------fouth loop---------------->
                    <?php
                   $select8 = "SELECT * FROM upload WHERE category=4 AND sub_category = 26";
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