   <?php include 'header.php'; ?>
   <!--Page Title-->
   <section class="page-title" style="background-image:url(images/background/2.jpg)">
       <div class="auto-container">
           <h5 style="color:white;font-weight:bold;text-align:center"> <span style="color:#c70000">D</span><span style="color:white">igito</span><span style="color:#c70000">W</span><span style="color:white">ork</span> One Stop Shop for 360º  License Management

           </h5>

           <!--<ul class="page-breadcrumb">
            	<li><a href="index.html">HOME</a></li>
                <li>Services</li>
            </ul>-->

           <br />
       </div>
   </section>
   <!--End Page Title-->
   <?php

    include('dbcon.php');


    $result = mysqli_query($con, "SELECT * FROM software_license_management");
    while ($row = mysqli_fetch_assoc($result)) {


    ?>
       <!--Projects Single Section-->
       <section class="project-single-section">
           <div class="auto-container">
               <div class="upper-section">



                   <div class="row clearfix">

                       <!--Content Column-->
                       <div class="content-column col-lg-12 col-md-12 col-sm-12">
                           <div class="inner-column">
                               <h3 style="text-align:center"><?php echo $row['p1']; ?> </h3>
                           
                               <div class="text">
                                   <p><?php echo $row['p2']; ?>
                                   </p>


                                   <div class="row clearfix">
                                       <div class="column col-lg-6 col-md-6 col-sm-12">

                                           <h6><?php echo $row['p3']; ?> </h6>
                                           <br />
                                           <ul class="list-style-four">
                                               <?php echo $row['p4']; ?>
                                           </ul>
                                       </div>

                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                               <img src="images/<?php echo $row['image1']; ?>">
                                           </div>

                                       </div>
                                       <p><?php echo $row['p5']; ?></p>


                                       <h6><?php echo $row['p6']; ?></h6>
                                       <p><?php echo $row['p7']; ?></p>
                                       <p><?php echo $row['p8']; ?></p>
                                       <h6><?php echo $row['p9']; ?></h6>
                                       <br />
                                       <?php echo $row['p10']; ?>

                                       <div class="row clearfix">
                                           <div class="column col-lg-6 col-md-6 col-sm-12">
                                               <h6 style="color:#982121;font-size: 17px;"><?php echo $row['p11']; ?></h6>
                                               <div class="image wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                   <img src="images/<?php echo $row['image2']; ?>">
                                               </div>

                                           </div>

                                           <div class="column col-lg-6 col-md-6 col-sm-12">
                                               <?php echo $row['p13']; ?>
                                               <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                   <img src="images/<?php echo $row['image3']; ?>">
                                               </div>

                                           </div>
                                       </div>
                                   </div>
                                   <p></p>
                                   <h6><?php echo $row['p12']; ?></h6>

                                   <br />






                                   <div class="row clearfix">
                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <div class="award_item1 ">
                                               <h6><?php echo $row['p14']; ?></h6>

                                               <?php echo $row['p15']; ?>

                                           </div>
                                       </div>

                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <div class="award_item1 ">
                                               <?php echo $row['p16']; ?>
                                               <?php echo $row['p17']; ?>
                                               <ul class="list-style-four">
                                                   <?php echo $row['p18']; ?>
                                               </ul>
                                               <br />
                                               <br />
                                           </div>

                                       </div>



                                   </div>
                                   <div class="row clearfix">
                                       <div class="column col-lg-12 col-md-6 col-sm-12">
                                           <br />
                                           <div class="image wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                               <img src="images/lice5.jpg ">
                                           </div>

                                       </div>


                                   </div>
                               </div>
                           </div>



                       </div>

                   </div>
               </div>
       </section>
   <?php
    }
    ?>
   <!--End Projects Single Section-->
   <?php include 'footer.php'; ?>