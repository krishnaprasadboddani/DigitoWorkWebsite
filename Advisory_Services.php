         <?php include 'header.php'; ?>

         <!--Page Title-->
         <section class="page-title" style="background-image:url(images/background/2.jpg)">
             <div class="auto-container">
                 <h4 style="color:white;font-weight:bold;text-align:center"><span style="color:#c70000">D</span><span style="color:white">igito</span><span style="color:#c70000">W</span><span style="color:white">ork</span> -Advisory Services Keyframe (ASK)<br>
                     Lead. Navigate. Disrupt.
                 </h4>

                 <!--<ul class="page-breadcrumb">
            	<li><a href="index.html">HOME</a></li>
                <li>Services</li>
            </ul>-->

             </div>
         </section>
         <!--End Page Title-->
         <?php

            include('dbcon.php');


            $result = mysqli_query($con, "SELECT * FROM advisory_services");
            while ($row = mysqli_fetch_assoc($result)) {


            ?>
             <!--Projects Single Section-->
             <section class="project-single-section1">
                 <div class="auto-container">
                     <div class="upper-section">



                         <div class="row clearfix">

                             <!--Content Column-->
                             <div class="content-column col-lg-12 col-md-12 col-sm-12">
                                 <div class="inner-column">
                                     <?php echo $row['p1']; ?><br />
                                     <br />

                                     <div class="row clearfix">
                                         <div class="column col-lg-6 col-md-6 col-sm-12">
                                             <?php echo $row['p2']; ?>
                                             <br />

                                         </div>

                                         <div class="column col-lg-6 col-md-6 col-sm-12">
                                             <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                 <img src="images/<?php echo $row['image1']; ?>" alt="" />
                                             </div>

                                         </div>
                                         <br />

                                         <div class="text">



                                         </div>

                                     </div>


                                 </div>
                             </div>


                         </div>

                     </div>
                 </div>
             </section>
             <!--End Projects Single Section-->

             <!--Faq Section-->
             <section class="faq-section1">
                 <div class="auto-container">
                     <div class="row clearfix">

                         <!--Content Column-->
                         <div class="content-column col-lg-12 col-md-12 col-sm-12">
                             <div class="inner-column">
                                 <div class="sec-title" style="margin-bottom: 25px;">
                                     <div class="title"><?php echo $row['p3']; ?>
                                     </div>
                                     <?php echo $row['p4']; ?>
                                 </div>
                                 <?php echo $row['p5']; ?>


                                 <br />
                                 <?php echo $row['p6']; ?>



                                 <div class="row clearfix">
                                     <div class="column col-lg-6 col-md-6 col-sm-12">
                                         <?php echo $row['p7']; ?>
                                         <?php echo $row['p8']; ?>

                                     </div>

                                     <div class="column col-lg-6 col-md-6 col-sm-12"><br />
                                         <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                             <img src="images/<?php echo $row['image2']; ?>" alt="" />
                                         </div>

                                     </div>





                                 </div>
                             </div>
                             <br />
                             <br />
                         </div>
                     </div>
             </section>
         <?php
            }
            ?>

         <?php include 'footer.php'; ?>