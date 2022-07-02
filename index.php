
<?php
    include('common_links.php'); //commmon links included here
    include('common_header.php'); //common header included here
?>

  <body>
    <!--content--> 
   <!-- <section class="banner_section_carousel">
        <!-----carousel here-------
        <div class="container-fluid">
            <div class="slider">
                <div class="slide active" style="background-image: url(images/modifies_sliders/1.png);"></div>
                <div class="slide" style="background-image: url(images/modifies_sliders/2.png);"></div>
                <div class="slide" style="background-image: url(images/modifies_sliders/3.png);"></div>
            </div>
        </div>
    </section>--> 

    <!--hero section carousel--> 
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="images/modifies_sliders/1.png" class="d-block w-100" alt="image">
      <div class="carousel-caption d-none d-md-block">
        <h5>Vaagdevi College</h5>
        <p class="text-light text-center">Viswambhara Education Society</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/modifies_sliders/2.png" class="d-block w-100" alt="image">
      <div class="carousel-caption d-none d-md-block">
        <h5>Vaagdevi College</h5>
        <p class="text-light text-center">Viswambhara Education Society</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="images/modifies_sliders/3.png" class="d-block w-100" alt="image">
      <div class="carousel-caption d-none d-md-block">
        <h5>Vaagdevi College</h5>
        <p class="text-light text-center">Viswambhara Education Society</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="images/modifies_sliders/4.png" class="d-block w-100" alt="image">
      <div class="carousel-caption d-none d-md-block">
        <h5>Vaagdevi College</h5>
        <p class="text-light text-center">Viswambhara Education Society</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>





    <!--enquiry box---> 
    <!---------enquiry modal------------------>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Get the course information you need!!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                             <!--form--->
                             <form>
                                <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Candidate Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your details with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Candidate Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" >
                                    
                                </div>
                                <div class="mb-3">
                                <label for="exampleInputPhone1" class="form-label">Password</label>
                                <input type="phone" class="form-control" id="exampleInputPhone1">
                                </div>
                                <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                           
                        </div>
                        </div>
                </div>
            </div>
<!-----------------------button modal end-------------------->
<!------------enquiry box which based on modal--->
<div class="enquiry_box">
   <span type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" id= "enquiry_now">
       <i class="fa-thin fa-nfc-magnifying-glass"></i>ENQUIRY NOW
    </span>
   
</div>
<!--download broucher-->
<div class="download_box">
    <button type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" id= "download_brouch">
        Download Broucher
    </button>
</div>
    <!--academic system---->
    <section class="academic_system_section pb-5 ">
        <div class="academic_sys">
            <h2 class="text-center py-5"><span>Academic</span> Systems</h2>
            <div class="container ">
            <div class="row pb-4">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" class="image_theme">
                    <img src="images/acad_sys.jpg" alt="image" class="acad_image  " style="width: 75%;">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                   <div class="acad_content wow animate__animated animate__zoomInUp" >
                        <p class="">Vaagdevi’s academic system works with "Student First" approach and takes all necessary actions to provide the best education and facilities to our students. It is built around an experimental learning where the students are motivated to understand conceptual framework and apply them.</p>
                        <p>It gives a scope to student’s centric approach in able them to participate and enhance their knowledge, skills and understanding in multidisciplinary environment through practical experience to ensure to build a strong career.</p>
                        <p>The academic system of Vaagdevi is just not limited to course curriculum but also to inculcate various skills which are essential for student to become professional and leaders of tomorrow.</p>
                   </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!------------cards--------------> 
    <section class="py-5  cards_section_bg  ">
    <div class="container wow animate__animated  animate__fadeInUp animate__slow">
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="card card_overlay_1" >
                <h5 class="card_head_title text-center"> Admissions</h5>
                <div class="card-body container_card">
                    <img src="images/card_icons/1.png" class="card-img-top card_overlay_image " alt="image">
                    <!--overlay--> 
                    <div class="overlay_1">
                        <div class="text card-text"> <p class="overlay_font"> We welcome you to the online platform, DOST (Degree Online Services, Telangana) for the academic year 2021-22.</p> </div>
                    </div>
                </div>
                <div class="py-3 m-auto">
                <a href="#" class=" text-center card_read_more_btn">Read More</a>
                </div>
            </div>
           
            
        </div>
        <div class="item">
            <div class="card card_overlay_2" >
                <h5 class="card_head_title text-center">PROGRAMMS</h5>
                <div class="card-body container_card">
                    <img src="images/card_icons/2.png" class="card-img-top card_overlay_image" alt="image" >
                    <!--overlay--> 
                    <div class="overlay_2">
                        <div class="text card-text"><p class="overlay_font"> To achieve academic excellence by providing Skill enhancing and value enriching education</p></div>
                    </div>
                </div>
                <div class="py-3 m-auto">
                <a href="#" class=" text-center card_read_more_btn">Read More</a>
                </div>
            </div>
           
        </div>
        <div class="item">
            <div class="card card_overlay_3" >
                <h5 class="card_head_title text-center">Certificate Programms</h5>
                <div class="card-body container_card">
                    <img src="images/card_icons/3.png" class="card-img-top card_overlay_image" alt="image">
                    <!--overlay--> 
                    <div class="overlay_3">
                        <div class="text card-text"><p class="overlay_font">Vaagdevi offering various certificate programmes, which helping students to be transforming into next level</p></div>
                    </div>
                </div>
                <div class="py-3 m-auto">
                <a href="#" class=" text-center card_read_more_btn">Read More</a>
                </div>
            </div>
           
        </div>
        <div class="item">
            <div class="card card_overlay_4" >
                <h5 class="card_head_title text-center">ONLINE LEARNING CENTER</h5>
                <div class="card-body container_card">
                    <img src="images/card_icons/four.png" class="card-img-top card_overlay_image" alt="image">
                    <!--overlay--> 
                    <div class="overlay_4">
                        <div class="text card-text"><p class="overlay_font"> To achieve academic excellence by providing Skill enhancing and value enriching education</p></div>
                    </div>
                </div>
                <div class="py-3 m-auto">
                <a href="#" class=" text-center card_read_more_btn">Read More</a>
                </div>
            </div>
           
        </div>
        <!--2 row optional--> 
        <div class="item">
            <div class="card card_overlay_5" >
                <h5 class="card_head_title text-center">vision</h5>
                <div class="card-body container_card">
                    <img src="images/card_icons/vis.jpg" class="card-img-top card_overlay_image" alt="image">
                    <!--overlay--> 
                    <div class="overlay_5">
                        <div class="text card-text"><p class="overlay_font"> To achieve academic excellence by providing Skill enhancing and value enriching education</p></div>
                    </div>
                </div>
                <div class="py-3 m-auto">
                <a href="#" class=" text-center card_read_more_btn">Read More</a>
                </div>
            </div>
            
        </div>
        <div class="item">
            <div class="card card_overlay_6" >
                <h5 class="card_head_title text-center">mission</h5>
                <div class="card-body container_card">
                    <img src="images/card_icons/mission.png" class="card-img-top card_overlay_image" alt="image">
                    <!--overlay--> 
                    <div class="overlay_6">
                        <div class="text card-text"><p class="overlay_font"> To achieve academic excellence by providing Skill enhancing and value enriching education</p></div>
                    </div>
                </div>
                <div class="py-3 m-auto">
                <a href="#" class=" text-center card_read_more_btn">Read More</a>
                </div>
            </div>
           
        </div>
        <div class="item">
            <div class="card card_overlay_7" >
                <h5 class="card_head_title text-center">profile</h5>
                <div class="card-body container_card">
                    <img src="images/card_icons/one.png" class="card-img-top card_overlay_image" alt="image">
                    <!--overlay--> 
                    <div class="overlay_7">
                        <div class="text card-text"><p class="overlay_font"> To achieve academic excellence by providing Skill enhancing and value enriching education</p></div>
                    </div>
                </div>
                <div class="py-3 m-auto">
                <a href="#" class=" text-center card_read_more_btn">Read More</a>
                </div>
            </div>
           
        </div>
        <div class="item">
            <div class="card card_overlay_8" >
                <h5 class="card_head_title text-center">About</h5>
                <div class="card-body container_card">
                    <img src="images/card_icons/two.png" class="card-img-top card_overlay_image" alt="image">
                    <!--overlay--> 
                    <div class="overlay_8">
                        <div class="text card-text"><p class="overlay_font"> To achieve academic excellence by providing Skill enhancing and value enriching education</p></div>
                    </div>
                </div>
                <div class="py-3 m-auto">
                <a href="#" class=" text-center card_read_more_btn">Read More</a>
                </div>
            </div>
           
        </div>
    </div>
    </div>
    </section>
    <!-----------------------cards end---------------> 

    <!---------------awards-----------------------------> 
    <section>
        <div class="container-fluid" >
            <section class="certificate_bg ">
            <h2 class="text-center my-5  wow animate__animated  animate__fadeInUp "> A<span>wards</span></h2>
                    <div class="slider-container">
                            <div class="left-slides awads_left_side_bg">
                                <div style="background-color: #336699;">
                                <h5 >Young Scientist award</h5>
                                <p><b>Viswambhara Education Society</b></p>
                                </div>
                                <div style="background-color: #336699;">
                                <h5 >Best  Award</h5>
                                <p><b>Viswambhara Education Society</b></p>
                                </div>
                                <div style="background-color: #336699;">
                                <h5 >Best Principal Award</h5>
                                <p><b>Viswambhara Education Society</b></p>
                                </div>

                                <div style="background-color: #336699;" >
                                <h5 >Best college Award</h5>
                                <p><b>Viswambhara Education Society</b></p>
                                </div>

                                <div style="background-color: #336699;">
                                    <h5 >Best smart campus award 2019</h5>
                                    <p><b>Viswambhara Education Society</b></p>
                                </div>

                                <div style="background-color: #336699;">
                                <h5 >Indian Red Cross Society Award</h5>
                                <p><b>Viswambhara Education Society</b></p>
                                </div>

                                <div style="background-color: #336699;">
                                <h5 >university level best nss programme oficer award</h5>
                                <p><b>Viswambhara Education Society</b></p>
                                </div>
                            </div>

                            <div class="right-slides awards-right_slides">
                                <div style="background-image: url('images/awards_images/awards_img16.jpg');">
                                </div>

                                <div style="background-image: url('images/awards_images/awards_img17.jpg');">
                                </div>

                                <div style="background-image: url('images/awards_images/awards_img13.jpg');">
                                </div>

                                <div style="background-image: url('images/awards_images/awards_img14.jpg');">
                                </div>

                                <div style="background-image: url('images/awards_images/awards_img15.jpg'); ">
                                </div>

                                <div style="background-image: url('images/awards_images/awards_img6.jpg'); ">
                                </div>

                                <div style="background-image: url('images/awards_images/awards_img7.jpg'); ">
                                </div>
                            </div>

                            <div class="buttons">
                                <button class="left-btn award_left_btn">
                                    <i class="fas fa-arrow-down"></i>
                                </button>
                                <button class="right-btn award-right_btn">
                                    <i class="fas fa-arrow-up"></i>
                                </button>
                            </div>
                    </div>
                    
            </section>
        </div>
    <section>
       <!----------------swiper slides---------------> 
        <!-- Swiper -->
        <section class="our_collabration_section py-5" style="  background-image: url('images/collab_logos/collab_bg.png'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="swiper mySwiper mt-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" ><img src="images/collab_logos/collab_1.png" alt="image" class="collabration_ver_img"></div>
                                <div class="swiper-slide" ><img src="images/collab_logos/collab_2.png" alt="image" class="collabration_ver_img"></div>
                                <div class="swiper-slide"><img src="images/collab_logos/collab_1.png" alt="image" class="collabration_ver_img"></div>
                                <div class="swiper-slide"><img src="images/collab_logos/collab_4.png" alt="image" class="collabration_ver_img"></div>
                                <div class="swiper-slide"><img src="images/collab_logos/collab_1.png" alt="image" class="collabration_ver_img"></div>
                                <div class="swiper-slide"><img src="images/collab_logos/collab_2.png" alt="image" class="collabration_ver_img"></div>
                            </div>
                             <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 co-sm-12 col-xs-12">
                        <!--<h2 class="text-center my-5"><span>Our</span> Collaboration</h2>--> 
                    <!--<div class="shape ">
                            <img src="images/collab_logos/shape.png" alt="image">
                        </div>-->
                        <div class="our_collab_title wow animate__animated   animate__fadeInRight">
                      <h2 class="text-center my-5" style="color: #4A89C8;"><span style="color: #fff;">Our</span> Collaborations</h2 >
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!--------------------------------------our recruiters start-------------------> 
        <section class="our_recruiters_compl_section">
        <section class ="top_recruiters_section ">
                <section class="top_recruiters_header py-3">
                <h2 class="text-center "  style="color:#000;"><span style="color:#fff;">Top</span> Recruiters</h2>
                <p class="text-center" style="opacity: 0.75; color:#fff;">Top companies are hiring from Vaagdevi College of Engineering</p>
        </section>
            <div class="container-fluid rec_bg_images" style=" background-image: url('images/recrut/top_recrut_bg.png'); background-repeat: no-repeat;  background-attachment: fixed;  background-size: cover;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class=" rotate_box">
                        <div class="contain gallery_box">
                            <span style="--x:1;"><img src="images/top_recruuit/1.png" alt="image" style="background-color: white;"></span>
                            <span style="--x:2;"><img src="images/top_recruuit/2.png" alt="image"  style="background-color: white;"></span>
                            <span style="--x:3;"><img src="images/top_recruuit/3.png" alt="image"  style="background-color: white;"></span>
                            <span style="--x:4;"><img src="images/top_recruuit/4.png" alt="image"  style="background-color: white;"></span>
                            <span style="--x:5;"><img src="images/top_recruuit/05.png" alt="image"  style="background-color: white;"></span>
                            <span style="--x:6;"><img src="images/top_recruuit/4.png" alt="image"  style="background-color: white;"></span>
                            <span style="--x:7;"><img src="images/top_recruuit/3.png" alt="image"  style="background-color: white;"></span>
                            <span style="--x:8;"><img src="images/top_recruuit/2.png" alt="image"  style="background-color: white;"></span>
                            <span style="--x:5;"><img src="images/top_recruuit/05.png" alt="image"  style="background-color: white;"></span>
                            <span style="--x:6;"><img src="images/top_recruuit/4.png" alt="image"  style="background-color: white;"></span>
                            <span style="--x:7;"><img src="images/top_recruuit/3.png" alt="image"  style="background-color: white;"></span>
                            <span style="--x:8;"><img src="images/top_recruuit/2.png" alt="image"  style="background-color: white;"></span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
                <!--top rcruiters footer--> 
            <section class="top-recruiters_footer py-3">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm12 col-xs-12">
                        <div class="about_it">
                            <div class="hirings">
                              <img src="images/top_recruuit/hiring-icon.png" alt="image" class="hiring_img">
                              <h4 class="text-center">350+</h4>
                              <p class="text-center">Companies Hiring World Wide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm12 col-xs-12">
                        <div class="about_it">
                            <div class="hirings">
                              <img src="images/top_recruuit/hiring-icon.png" alt="image" class="hiring_img">
                              <h4 class="text-center">350+</h4>
                              <p class="text-center">Companies Hiring World Wide</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm12 col-xs-12">
                        <div class="about_it">
                            <div class="hirings">
                              <img src="images/top_recruuit/hiring-icon.png" alt="image" class="hiring_img">
                              <h4 class="text-center">350+</h4>
                              <p class="text-center">Companies Hiring World Wide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </section>
    <!---------------------------------------our recruiters end--------------------------------------->

        <section class="departments_section">
            <!--student achievements--> 
            <!--success stories---> 
            <h2 class="text-center my-5"> D<span>epartments</span></h2>
     
            <!--our departments--> 
    
            <div class="container">
                <div class="our_dept">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                            <div class="owl-carousel owl-theme">  <!---owl caruse pg--> 
                                <div class="item">
                                    <div class="card dept_card" >
                                        <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                            <p class="card-text text-center"> Biothecnology</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top  dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center">Botony</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center"> Chemistry</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center"> Computer Science</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center">Commerce and Business Management</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center">English and Second Languages</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center">Food and Quaity Control</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center"> Geology</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center">Microbiology</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center">Mathematics and Satistics</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center">Nutrition and Dietitics</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center">Physics and Electronics</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center">Zoology</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center"> Nutrition</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center">Business and Management</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card  dept_card">
                                    <img src="images/departments/dept.png" class="card-img-top dept_img" alt="image">
                                        <div class="card-body">
                                        <p class="card-text text-center"> Geology</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                            <div class="swiper mySwiper mt-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide swiper_vertical_slides" >
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                            <a href="#"> <b> Department of biothecnology</b></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides" > 
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                        <a href="#"><b> Department of Botony</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                        <a href="#"><b> Department of Chemistry</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                        <a href="#"><b> Department of Computer Science</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                       
                                        <div class="card-body">
                                        <a href="#"><b> Department of Commerce and Business Management</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        <div class="card-body">
                                           <a href="#"><b> Department of English and Second Language</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                           <a href="#"><b> Department of Food Science and Quality Control</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                           <a href="#"><b> Department of Geology</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                           <a href="#"><b> Department of Microbiology</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                           <a href="#"><b> Department of Mathematics and Statistics</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                           <a href="#"><b> Department of Nutrition and Dietitics</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                           <a href="#"><b> Department of Physics and Electronics</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                           <a href="#"><b> Department of Zoology</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                           <a href="#"><b> Department of Nutrition</b></a></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide  swiper_vertical_slides">
                                    <div class="card dept_card_titles" style="width: 100%;">
                                        
                                        <div class="card-body">
                                           <a href="#"><b> Department of Business and Management</b></a></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="swiper-pagination"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!---success stories--> 
        <section class=" student_success_stories pb-5">
            <div class="container">
            <h2 class="text-center py-5"><span>Student</span> Success Stories</h2>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-indicators student_comments_indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="success_stories_com-vid">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="card stu_comment_card" >
                                                <div class="card-body">
                                                    <!--comment card--> 
                                                        <div class="stu_comment">
                                                            <blockquote class="blockquote ">
                                                            <i class="fa fa-quote-left" style="font-size: 40px;"></i> <p >Vaagdevi has got one of the best facilities and brilliant faculty, as far as the placements are concerned, I would like to thank placement department for bringing well known companies and providing enough opportunities to every student in this pandemic. I am really lucky and proud to be part of this institution not only because I got placed but the learning I had from the institution. </p><i class="fa fa-quote-right" style="font-size: 40px; float:right;"></i>
                                                                    <footer class="blockquote-footer text-dark text-bold my-2">Sushmita Bhadra B.Sc(MSTCS), <cite title="The Greek Way"></cite></footer>
                                                            </blockquote>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="stu_video">
                                                <a href=""><img src="images/success_stories/ss_1.png" alt="student video here" class="student_thumb_nail"></a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---second comment-->
                            <div class="carousel-item ">
                                <div class="success_stories_com-vid">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="card stu_comment_card" >
                                                <div class="card-body">
                                                    <!--comment card--> 
                                                        <div class="stu_comment">
                                                            <blockquote class="blockquote ">
                                                            <i class="fa fa-quote-left" style="font-size: 40px;"></i><p style= "font-weight: 300;">My experience at Vaagdevi is great and memorable. The mentors at Vaagdevi helped us enhance my academic and interpersonal skills. I am thankful to Training & Placement cell for providing a platform to enhance my skills and an opportunity to showcase them. In the last I am saying that The World is here at Vaagdevi."Vaagdevi has introduced me the corporate world in the form of placement with INFOSYS, a very glad to be a Vaagdevian</p><i class="fa fa-quote-right" style="font-size: 40px; float:right; color: black; "></i>
                                                                    <footer class="blockquote-footer text-dark text-bold my-2">Sushmita Bhadra B.Sc(MSTCS), <cite title="The Greek Way"></cite></footer>
                                                            </blockquote>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="stu_video">
                                                <a href=""><img src="images/success_stories/ss_1.png" alt="student video here" class="student_thumb_nail"></a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
            </div>
        </section>
        <!---video comments for mobile---> 
       <!----college diary roller---> 
       
      <!---footer---> 
    <?php 
        include('common_footer.php');  //common footer included here
    ?>
      


    <!--wow -->
    <script src="js/wow.min.js"></script>
    <script src="js/wow.js"></script>
    <script> new WOW().init(); </script>
    <!--swiper slders external js-->  
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--swiper slders external js  end--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--jquery links--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!---owl carousel--> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
     
    <!---external java script file-->
    <script src="main.js"></script>
    <!--wow js-->
    <script>
         new wow().init();
     </script>
  </body>
</html>