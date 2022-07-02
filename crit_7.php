<?php
include('admin/db_con.php');
include('common_links.php');
include('common_header.php');
//queries
//$select="SELECT * FROM naac LEFT JOIN upload ON naac.id=upload.id";
//$select="SELECT * FROM naac LEFT JOIN upload ON naac.id=upload.id WHERE category=1";
$select="SELECT * FROM upload WHERE category=7 AND sub_category=43 ";
$query = mysqli_query($conn , $select);
$nums=mysqli_num_rows($query);
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
            <h2 class="text-center my-5">Criterion 7 - Institutional Values and Best Practices</h2>
            <!--<div class="criteria_heads">
                <ul style="list-style-type:none;" class="crit_heads">
                    <li><h4>1.1 Curricular Planning and Implementation</h4></li>
                    <li><h4>1.2 Academic Flexibility</h4></li>
                    <li><h4>1.3 Curriculum Enrichment</h4></li>
                    <li><h4>1.4 Feedback System</h4></li>
                </ul>
            </div>--> 
            <div class="accordion my-5" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h6>7.1 Institutional Values and Social Responsibilities</h6>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!---uploaded pdf's--->
                        <?php
                        
                            if($nums){
                                while($file=mysqli_fetch_assoc($query)){

                        
                        ?>
                        <a href="admin/uploads/<?= $file['pdf']; ?>" target="_blank" class="pdf"><?= $file['pdf_title']; ?></a>
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
                    <h6>7.2 Best Practices</h6>
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <!--------------second loop------------> 
                   <?php
                   $select2 = "SELECT * FROM upload WHERE category=7 AND sub_category = 44";
                   $query2 = mysqli_query($conn , $select2);
                   $nums=mysqli_num_rows($query2);
                   if($nums){
                    while($file2=mysqli_fetch_assoc($query2)){

                    
                   ?>
                   <!------------pdf-----------> 
                   <a href="admin/uploads/<?= $file2['pdf']; ?>" target="_blank" class="pdf"><?= $file2['pdf_title']; ?></a>
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
                    <h6>7.3 Institutional Distinctiveness</h6>
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <!----------------third loop----------------> 
                    <?php
                   $select3 = "SELECT * FROM upload WHERE category=7 AND sub_category = 45";
                   $query3 = mysqli_query($conn , $select3);
                   $nums=mysqli_num_rows($query3);
                   if($nums){
                    while($file3=mysqli_fetch_assoc($query3)){

                    
                   ?>
                   <!------------pdf-----------> 
                   <a href="admin/uploads/<?= $file3['pdf']; ?>" target="_blank" class="pdf"><?= $file3['pdf_title']; ?></a>
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