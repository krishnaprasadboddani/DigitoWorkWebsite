   <?php include 'header.php'; ?>

   <!--Page Title-->
   <section class="page-title" style="background-image:url(images/background/2.jpg)">
       <div class="auto-container">
           <h4 style="color:white;font-weight:bold;text-align:center">An Intelligent Service Desk for all your IT requirements</h4>

           <!--<ul class="page-breadcrumb">
            	<li><a href="index.html">HOME</a></li>
                <li>Services</li>
            </ul>-->

       </div>
   </section>
   <!--End Page Title-->
   <?php

    include('dbcon.php');


    $result = mysqli_query($con, "SELECT * FROM service_desk");
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
                              <h2 style="text-align:center"><?php echo $row['p1']; ?></h2>

                               </h3>
                            
                               <div class="text">



                                   <div class="row clearfix">
                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <p><?php echo $row['p2']; ?></p>
                                           <p><?php echo $row['p3']; ?></p>


                                       </div>

                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <br />
                                           <br />
                                           <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                               <img src="images/<?php echo $row['image1']; ?>" alt="" />
                                           </div>

                                       </div>


                                       <h6 style="color:#000000"><?php echo $row['p4']; ?></h6>


                                       <br />
                                       <br />
                                       <p><?php echo $row['p5']; ?></p>
                                       <p> <?php echo $row['p6']; ?></p>
                                       <p><?php echo $row['p7']; ?></p>

                                      
                                       <h6><?php echo $row['p8']; ?></h6>
                                       <br />
                                       <p><?php echo $row['p9']; ?></p>
                                       <p><?php echo $row['p10']; ?></p>
                                       <p><?php echo $row['p11']; ?></p>
                                       <h6><?php echo $row['p12']; ?></h6>
                                       <p><?php echo $row['p13']; ?></p>
                                       <p><?php echo $row['p14']; ?></p>
                                       <ul class="list-style-four">
                                           <?php echo $row['p15']; ?>
                                       </ul>




                                   </div>
                               </div>
                           </div>



                       </div>

                   </div>
               </div>
       </section>
       <!--End Projects Single Section-->
   <?php
    }
    ?>
   <?php include 'footer.php'; ?>