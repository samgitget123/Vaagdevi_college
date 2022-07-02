<?php
include('admin/db_con.php');
include('common_links.php');
include('common_header.php');
//queries
//$select="SELECT * FROM naac LEFT JOIN upload ON naac.id=upload.id";
$select="SELECT * FROM naac WHERE parent_id=0";
$query = mysqli_query($conn , $select);
$nums=mysqli_num_rows($query);
//////////////////////////////////content/////////////////////////////////////
?>
<section>
<!-------banner here----------> 
</section>
<section>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!---criteria list----> 
                <div class="criteria_lists">
                    <ul style="list-style-type:none; crit_ul">
                        <li><a href="crit_1.php"><h5>Criterion 1 – Curricular Aspects</h5></a></li>
                        <li><a href="crit_2.php"><h5>Criterion 2 - Teaching-learning and Evaluation</h5></a></li>
                        <li><a href="crit_3.php"><h5>Criterion 3 - Research, Innovations and Extension</h5></a></li>
                        <li><a href="crit_4.php"><h5>Criterion 4 - Infrastructure and Learning Resources</h5></a></li>
                        <li><a href="crit_5.php"><h5>Criterion 5 - Student Support and Progression</h5></a></li>
                        <li><a href="crit_6.php"><h5>Criterion 6 - Governance, Leadership and Management</h5></a></li>
                        <li><a href="crit_7.php"><h5>Criterion 7 - Institutional Values and Best Practices</h5></a></li>
                    </ul>
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