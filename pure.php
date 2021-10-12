   <?php include 'header.php'; ?>


   <!--Page Title-->
   <section class="page-title" style="background-image:url(images/background/2.jpg)">
       <div class="auto-container">

           <h4 style="text-align:center;color:white">
               <span style="color:#c70000">D</span><span style="color:white">igito</span><span style="color:#c70000">W</span><span style="color:white">ork</span> -Collect data of all sources and structures Pure data  to accelerate your AI journey
           </h4>

       </div>
   </section>
   <!--End Page Title-->
   <?php

    include('dbcon.php');


    $result = mysqli_query($con, "SELECT * FROM products_pure");
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
                               <h3 style="text-align:center"><?php echo $row['p1']; ?>
                               </h3>

                               <br />
                               <br />
                               <div class="text" style="margin-top: -19px;">


                                   <div class="row clearfix">
                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <p><?php echo $row['p111']; ?>
                                           </p>
                                           <p><?php echo $row['p2']; ?>
                                           </p>
                                       </div>

                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                               <img src="images/<?php echo $row['image1']; ?>" alt="" />
                                           </div>

                                       </div>
                                       <p style="margin-left: 14px;"><?php echo $row['p3']; ?></p>
                                   </div>
                                   <br />
                                   <p><span><?php echo $row['p4']; ?>
                                       </span></p>
                                   <p><?php echo $row['p5']; ?></p>

                                   <p><?php echo $row['p6']; ?>
                                   </p>
                                   <h6><?php echo $row['p7']; ?>
                                   </h6>
                                   <br />
                                   <p><?php echo $row['p8']; ?></p>
                                   <br />
                                   <br />

                                   <div class="row clearfix">
                                       <div class="column col-lg-6 col-md-6 col-sm-12">

                                           <h6><?php echo $row['p9']; ?>
                                           </h6>
                                           <br />
                                           <p><?php echo $row['p10']; ?>
                                           </p>


                                       </div>

                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <div class="image " data-wow-delay="0ms" data-wow-duration="1500ms">
                                               <img src="images/<?php echo $row['image2']; ?>" alt="" />
                                           </div>

                                       </div>
                                       <p style="margin-left: 14px;"><?php echo $row['p11']; ?>
                                       </p>
                                   </div>

                                   <div class="row clearfix">
                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <p><?php echo $row['p12']; ?></p>
                                           <p><?php echo $row['p13']; ?>
                                           </p>

                                       </div>

                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <div class="image " data-wow-delay="0ms" data-wow-duration="1500ms">
                                               <img src="images/<?php echo $row['image3']; ?>" alt="" />
                                           </div>

                                       </div>
                                       <p style="margin-left:14px;"><?php echo $row['p14']; ?>
                                       </p>
                                   </div>


                                   <p><?php echo $row['p15']; ?>
                                   </p>
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
   <!--Reason Section-->

   <?php include 'footer.php'; ?>