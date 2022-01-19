   <?php include 'header.php'; ?>


   <!--Page Title-->
   <section class="page-title" style="background-image:url(images/background/2.jpg)">
       <div class="auto-container">
           <h4 style="text-align:center;color:white">Execution for Reliable Delivery
           </h4>
           <!-- <ul class="page-breadcrumb">
            	<li><a href="index.html">HOME</a></li>
                <li>Methodology</li>
            </ul> -->

       </div>
   </section>
   <!--End Page Title-->

   <?php

    include('dbcon.php');


    $result = mysqli_query($con, "SELECT * FROM methodology");
    while ($row = mysqli_fetch_assoc($result)) {


    ?>
       <!--Projects Single Section-->
       <section class="project-single-section">
           <div class="auto-container">

               <h3 style="text-align:center"><?php echo $row['p1']; ?></h3>

               <div class="row clearfix">

                   <!--Content Column-->
                   <div class="content-column col-lg-6 col-md-12 col-sm-12">
                       <br />

                       <p><?php echo $row['p2']; ?>
                       </p>

                       <p><?php echo $row['p3']; ?>
                       </p>
                       <br />
                       <h5 style="font-size:20px"><?php echo $row['p4']; ?></h5>
                       <br />

                       <p><?php echo $row['p5']; ?></p>


                   </div>
                   <div class="column col-lg-5 col-md-6 col-sm-12">
                       </p>
                       <img src="images/methodology.jpg">

                   </div>
                   <br />
                   <div class="row clearfix">
                       <div class="column col-lg-12 col-md-12 col-sm-12">

                           <div class="row clearfix">
                               <div class="column col-lg-6 col-md-6 col-sm-12">
                                   <br />
                                   <p style="margin-left: 17px;"><?php echo $row['p6']; ?></p>

                               </div>

                               <div class="column col-lg-5 col-md-6 col-sm-12">
                                   <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                       <img src="images/<?php echo $row['image2']; ?>" alt="" style="padding-left:27px">
                                   </div>

                               </div>
                           </div>
                           <div class="row clearfix">
                               <div class="column col-lg-6 col-md-6 col-sm-12">
                                   <br />
                                   <p style="margin-left: 17px;"><?php echo $row['p7']; ?></p>


                               </div>

                               <div class="column col-lg-5 col-md-6 col-sm-12">
                                   <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                       <img src="images/<?php echo $row['image3']; ?>" alt="" style="padding-left:27px">
                                   </div>

                               </div>
                           </div>

                           <div class="row clearfix">
                               <div class="column col-lg-6 col-md-6 col-sm-12">
                                   <br />
                                   <p style="margin-left: 17px;"><?php echo $row['p8']; ?>
                                   </p>

                               </div>

                               <div class="column col-lg-5 col-md-6 col-sm-12">
                                   <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                       <img src="images/<?php echo $row['image4']; ?>" alt="" style="padding-left:27px">
                                   </div>

                               </div>
                           </div>




                           <!--	 <p>1. Taskmanagement is a homegrown application for creating & monitoring tasks being executed for deliver of projects,
										 based on years of experieince of Digitowork </p>
										 <p>2. leverage industry best practices and multiple frameworks</p>
										 <p>3. every user is trained on this tool </p>
										 <p>4. Why: To monitor tasks and bring transpe </p>
                               -->

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
