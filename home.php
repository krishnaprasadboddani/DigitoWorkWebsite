 <?php include 'header.php'; ?>
 <!-- Bnner Section -->
<section class="banner-section-two">
   <div class="banner-carousel owl-carousel owl-theme">
     <div class="slide-item" style="background-image: url(images/main-slider/home1.jpg);">
       <div class="gradient-layer"></div>
       <div class="content-box">
         <div class="text text-center" style=" font-size: 28px;line-height: 28px;">

           <span style="color:red">GRIT</span> <span style="color:white;text-transform:lowercase;">the</span><span style="color:red;text-transform:lowercase;"> secret ingredient for </span><span style="color:white;text-transform:lowercase;">our  </span>
           <div class="text2 text-center" style=""><span><br/>business<span style="color:red"> SUCCESS</span></span></div>
           <div class="text text-left" style="position:absolute;left:50%">
               
          
                <ul> 
                <li><span style="color:red">G</span>weithredu</li>
             
             
             <li><span style="color:red">R</span>ectitude</li><li> <span style="color:red">I</span>nnovation</li> <li><span style="color:red">T</span>ransboundary</li>
             
             
             </ul>
             
           
             
             
             </div>
           <!-- <div class="btn-box"><a href="#" class="theme-btn btn-style-one">Talk to an expert</a></div> -->
         </div>
       </div>
     </div>
     <div class="slide-item" style="background-image: url(images/main-slider/landing1.jpg);">
       <div class="gradient-layer"></div>
       <div class="content-box">
         <div class="auto-container" >
<div class="text text-center" style="font-size: 28px;line-height: 28px;">Digital Core Capabilities</div>
           <div class="text text-center">Vital capabilities to deliver digital outcomes</div>
           <!--<div class="btn-box"><a href="#" class="theme-btn btn-style-one">Talk to an expert</a></div> -->
         </div>
       </div>
     </div>
     <div class="slide-item" style="background-image: url(images/main-slider/slider-11.jpg);">
       <div class="gradient-layer"></div>
       <div class="content-box">
         <div class="auto-container">
     <div class="text text-center" style=" font-size: 28px;line-height: 28px;">Digital Operating Models</div>
           <div class="text text-center" style="">Build and Adopt accelerators for faster delivery</div>
           <!--<div class="btn-box"><a href="#" class="theme-btn btn-style-one">Talk to an expert</a></div> -->
         </div>
       </div>
     </div>
   </div>
 </section> <!-- End Bnner Section -->
 <?php

  include('dbcon.php');


  $result = mysqli_query($con, "SELECT * FROM home");
  while ($row = mysqli_fetch_assoc($result)) {


  ?>
   <!--About Section-->
   <section class="about-section">
     <div class="auto-container">
       <div class="row clearfix">
         <div class="sec-title">
           <h3><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> -<?php echo $row['p1']; ?>
           </h3>
           <div class="bold-text" style="font-style:italic;font-weight:bold;font-size: 18px;">“<?php echo $row['p2']; ?>”
           </div>
         </div>

         <!--Content Column-->
         <div class="content-column col-lg-7 col-md-12 col-sm-12">
           <div class="inner-column" style="padding-top:0px;margin-top: -7px;">

             <div class="text">
               <p style="font-size:16px"><?php echo $row['p3']; ?></p>
               <p style="font-size:16px"><?php echo $row['p4']; ?></p>

               <p style="font-size:16px"><?php echo $row['p5']; ?>
               </p>
               <p style="font-size:16px">
                 <?php echo $row['p6']; ?>
               </p>
               </p>
               <div id="dots"></div>
             </div>
             <button onclick="myFunction()" id="myBtn" class="theme-btn btn-style-one">Read more</button>

           </div>
         </div>
         <!--Image Column-->
         <div class="image-column col-lg-5 col-md-12 col-sm-12">
           <div class="inner-column" style="padding-top: 1px;padding-left: 0px">
             <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
               <img src="images/<?php echo $row['image1']; ?>" alt="DigitoWork - Data Transformation" />
             </div>
           </div>
         </div>
       </div>
     </div>

   </section>

   <!--Content Column-->
   <section class="about-section1" id="more">
     <div class="auto-container">
       <div class="row clearfix">
         <div class="content-column col-lg-12 col-md-12 col-sm-12">

           <p>Transformed data is usable, accessible, and secure to benefit a variety of purposes. Organizations may transform data to make it compatible with other types of data, move it into the appropriate database, or combine it with other crucial information. Organizations benefit from transforming data by gaining insights into vital operational and informational internal and external functions. In addition, data transformation makes it possible for organizations to transform data from a storage database to the cloud to keep information moving.
           </p>
           <ul class="list-style-four">
             <li style="font-weight:bold">Logistics</li>
             <p style="margin-left: 29px;">The process can be broken down into two parts: the data discovery and planning phase, and the data extraction, cleansing and delivery phase. The first part is more about researching and planning, while the second part involves handling the data.
             </p>
             <li style="font-weight:bold">Reasons to Transform Data
             </li>
             <p style="margin-left: 29px;">Data transformation may occur when data is being moved or when various data types need to be analyzed together. It also happens when information is being added to existing data sets, and when users want to aggregate data from multiple data sets.
             </p>
           </ul>

           <p><span style="font-style:italic">Even within these examples, the common thread is compatibility.</span>
           </p>

           <h6><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> and Data Transformation
           </h6>
           <br />
           <p>DigitoWork, the cloud data platform, offers secure data sharing that eliminates the need for data extraction or transformation between departments, geographies, or partners. For primary data source loading, we works with a range of data integration partners and allows users to choose either ETL or transform data after loading (ELT). We remove the worry from data integration and allow you to focus on results.
           </p>

           <ul class="list-style-four">
             <li style="font-weight:bold">A Look at Data Transformation Tools</li>
             <p style="margin-left: 29px;">This data transformation process of converting sets of data values from a source format to a format consistent for a destination data system often
               requires tools. Data element to element mapping can be complicated and requires complex transformations that require lots of rules, which is why successful
               analysts use these tools to help simplify the process. This on-going process of shaping, standardizing and enriching data to conform to the right analytic outputs,
               has long been considered tedious, time-consuming, <span style="font-weight:100; color: #040404;">“janitorial” work.</span> Worse yet, when it comes to complex or large volumes of data, the work is relegated to the
               small number of valuable resources with advanced data science skills, regardless of whether they have the business context or not. In short, the data
               transformation process has historically been fraught with roadblocks and frustrations, often consuming way more time than the actual analysis. Until recently
               there haven’t been a lot of data transformation tools available to help solve the challenges of IT organizations.
             </p>
             <li style="font-weight:bold">Predictive Data Transformation
             </li>
             <p style="margin-left: 29px;">At DigitoWork our goal is to radically accelerate the process of transforming data and reduce the time it takes to analyze information and get the most out of your data. We are focused on fundamentally changing the experience of transforming data and providing delightful experiences with data. This means more than transforming data. It means creating shareable, reusable processes to help technical and non-technical users get to know the shape and structure of their data. When done well, this process lays the foundation for successful and repeatable analyses.
             </p>
             <li style="font-weight:bold">DigitoWork Data Transformation Tools</li>
             <p style="margin-left: 29px;">To extend transformation capabilities to non-technical <span style="font-weight:100; color: #040404;">business users,</span> the DigitoWork data wrangling experience includes predictive data transformation.
               Users can click, drag or select over the specifics of the data they would like to transform and, with every interaction, DigitoWork generates a ranked
               list of suggested transformations for the user to evaluate or edit. This iterative feedback loop is always occurring throughout the use of DigitoWork
               constantly taking inputs from the data and the user to intelligently recommend new options.
             </p>
             <li style="font-weight:bold">A New Look at Data Transformation
             </li>
             <p style="margin-left: 29px;">As a key player in modern data transformation tools, DigitoWork predictive data transformation allows analysts to work more intelligently with their data without
               having to learn new skills. By using DigitoWork the transforming of data is not only easier, but faster and more fun, too.
             </p>

           </ul>
           <p>DigitoWork mission is to create radical productivity for people who analyze data. We’re deeply focused on solving for the biggest bottleneck in the data lifecycle,
             data wrangling, by making it more intuitive and efficient for anyone who works with data
           </p>
           <p>Try a new way to transform your data, try out DigitoWork today.
           </p>
           <!--<div class="content-column col-lg-6 col-md-12 col-sm-12" >
                    <div class="inner-column">
                        <h6 style="color:#000000">Data Transformation </h6>
                        <p style="font-weight:bold">Money Follows Data</p>
                        <p>There is a huge value in data and understandably a drive towards digital transformation initiated in every organization. 
                        More enterprises than ever are assessing the opportunities hidden in their treasure troves of data to supercharge their business and take the lead in their field.</p>
                        <p>Organizations today can only be as successful as the data they can capture and integrate into their enterprise operations to make disruptive business decisions.
                        Adopting the latest innovation in technology, like artificial intelligence (AI) and data science, is of little value if the data used is insufficient, partial or of poor quality.</p>
                        <p>Enterprise data is distributed across many locations, from edge to core to multiple clouds. Maintaining control, protecting and securing 
                        data while maximizing business value is challenging for businesses to tackle alone. Fujitsu has a proven methodology, backed by an innovation 
                        rich environment and broad partner ecosystem, to co-create with organizations and transform them into a data-driven enterprise</p>
                        <p style="font-weight:bold;font-style:italic">“When a snake sheds its skin it changes; when a caterpillar becomes a butterfly, it transforms.”</p>
                        <h6 style="color:#000000"><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> – Four layer-approach to data-driven transformation</h6>
                        <br/>
                        <ul class="list-style-four">
                            <li>Define your data transformation baseline </li>
                            <li>Create your future data architecture </li>
                            <li>Protect and secure data </li>
                            <li>Deliver business value</li>
                        </ul>
                        
                    <div class="inner-column" style="padding-top: 1px;">
                        <div class="image wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="images/unnamed.png" alt="" />
                        </div>
                 
                      </div>
                    </div> -->
         </div>

         <!--Image Column-->

         <!--  <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h6 style="color:#000000">Stages Of Data Transformation Implemantation</h6>
                        <br/>
                        <ul class="list-style-four">
                            <li>Analyzing Situation</li>
                            <p>Before defining the destination and building a roadmap to achieve it, we study the current level of your IT development and identify the degree of your digital maturity. Our IT consultants analyze the IT component of your business and uncover threats to avoid and strong sides to focus on.
</p>
<li>Spotting Areas Where Return On Digital Transformation Will Be Maximal
</li>
<p>Considering the expected outcomes and various options of your IT development, we choose the best ways to maximize the profits digital transformation can provide for your business. At the same time, we center on realistic expectations and aim at devising sufficient digital support for your business ambitions.
</p>
<li> Aligning Business Strategy and Digital Transformation
</li>
<p>To make digital transformation most effective, we help to align it with your business strategy working in close collaboration with your business representatives. We believe that digital transformation shouldn’t happen for the sake of implementing more and more software − IT solutions should back up business objectives and help uncover new growth opportunities.
</p>
<li>Proof-Of-Concept Projec</li>
<p>We can start with a pilot project to prove that an idea is worth investments. With a successful proof-of-concept project, we provide project estimation based on your requirements. Then, it takes us about 2-4 weeks to start (or even less if the project is urgent), and we can easily scale up and down at any time.
</p>
<li>Series of Projects, Each Delivers Business Benefits
</li>
<p>With the experience in a wide range of technologies, we are happy to drive your digital transformation from various sides. As your enterprise grows and you come to new ideas how to enhance your business with IT, we can offer our support to your IT strategy and become your long-term business partner working with you side-by-side as your business develops and needs new or upgraded software products.
</p>
                        </ul>
                       
                    </div>
                    </div>  -->


       </div>
       <br />

     </div>

   </section>
   <!--End About Section-->



   <!--Video Section-->
   <section class="video-section" style="background-image:url(images/quote-bg.jpg)">
     <!--Get Quote Start-->
     <div class="container">
       <div class="title">
         <h1> <?php echo $row['p7']; ?></h1>
       </div>
       <p style="font-size:21px;color: #ffffff;text-align:center"> <?php echo $row['p8']; ?></p>
       <div class="readmore readbtn"><a href="contact.php" class="theme-btn btn-style-one">Please Connect <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a></div>
     </div>
     <!--Get Quote End-->
   </section>
   <!--End Video Section-->



   <!--Service Start-->
   <section class="services-section">
     <div class="services-area">
       <div class="container">
         <div class="sec-title centered">
           <h2> <?php echo $row['p9']; ?></h2>

         </div>
         <div class="row">
           <!--Start single service item-->
           <div class="col-lg-4 col-md-6">
             <div class="single-service-item">
               <div class="img-holder"> <img src="images/<?php echo $row['image2']; ?>" style="height: 177px;
    width: 270px;" alt="Data Services
">
                 <div class="overlay"></div>
               </div>
               <div class="text-holder">
                 <!-- <div class="icon"> <i class="fa fa-flask" aria-hidden="true"></i> </div>  -->
                 <div class="text">
                   <!--<h3><a href="#">Data Services</a></h3> -->
                   <p style="text-align:left"> <?php echo $row['p10']; ?></p>
                   <div class="readmore"><a href="https://digitowork.com/services.php">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                 </div>
               </div>
             </div>
           </div>
           <!--End single service item-->

           <!--Start single service item-->
           <div class="col-lg-4 col-md-6">
             <div class="single-service-item">
               <div class="img-holder">
                 <img src="images/<?php echo $row['image3']; ?>" style="height: 177px;width: 270px;" alt="IT Asset Management">
                 <!-- <div class="img-holder"> <img src="images/adv/itam1.png"> -->
                 <div class="overlay"></div>
               </div>
               <div class="text-holder">
                 <!-- <div class="icon"> <i class="fa fa-filter" aria-hidden="true"></i> </div> -->
                 <div class="text">
                   <!--<h3><a href="#">IT Asset Management</a></h3> -->
                   <p> <?php echo $row['p11']; ?></p>
                   <div class="readmore"><a href="itam_services.php">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                 </div>
               </div>
             </div>
           </div>
           <!--End single service item-->

           <!--Start single service item-->
           <div class="col-lg-4 col-md-6">
             <div class="single-service-item">
               <div class="img-holder"> <img src="images/<?php echo $row['image4']; ?>" alt="IT Service Management">
                 <div class="overlay"></div>
               </div>
               <div class="text-holder">
                 <!-- <div class="icon"> <i class="fa fa-lightbulb-o" aria-hidden="true"></i> </div> -->
                 <div class="text">
                   <!-- <h3><a href="#">IT Service Management</a></h3> -->
                   <p><?php echo $row['p12']; ?></p>
                   <div class="readmore"><a href="itsm_services.php">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                 </div>
               </div>
             </div>
           </div>
           <!--End single service item-->


           <!--Start single service item-->
           <div class="col-lg-4 col-md-6">
             <div class="single-service-item">
               <div class="img-holder"> <img src="images/<?php echo $row['image5']; ?>" alt="Software License Management">
                 <div class="overlay"></div>
               </div>
               <div class="text-holder">
                 <!-- <div class="icon"> <i class="fa fa-fire" aria-hidden="true"></i> </div>  -->
                 <div class="text">
                   <!-- <h3><a href="#">Software License Management</a></h3> -->
                   <p><?php echo $row['p13']; ?></p>
                   <div class="readmore"><a href="Software_License.php">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                 </div>
               </div>
             </div>
           </div>
           <!--End single service item-->

           <!--Start single service item-->
           <div class="col-lg-4 col-md-6">
             <div class="single-service-item">
               <div class="img-holder"> <img src="images/resource/IT_Security35.png" style="height: 200px;" alt="IT Security Management
">
                 <div class="overlay"></div>
               </div>
               <div class="text-holder">
                 <!-- <div class="icon"> <i class="fa fa-glass" aria-hidden="true"></i> </div>  -->
                 <div class="text">
                   <!-- <h3><a href="#">Service Desk</a></h3> -->
                   <p>Cybersecurity is the art of protecting networks, devices, and data from unauthorized access</p>
                   <div class="readmore"><a href="it_security.php">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                 </div>
               </div>
             </div>
           </div>
           <!--End single service item-->
           <!--Start single service item-->
           <div class="col-lg-4 col-md-6">
             <div class="single-service-item">
               <div class="img-holder"> <img src="images/<?php echo $row['image7']; ?>" alt="Service Desk
">
                 <div class="overlay"></div>
               </div>
               <div class="text-holder">
                 <!-- <div class="icon"> <i class="fa fa-glass" aria-hidden="true"></i> </div>  -->
                 <div class="text">
                   <!-- <h3><a href="#">Service Desk</a></h3> -->
                   <p><?php echo $row['p15']; ?> </p>
                   <div class="readmore"><a href="ServiceDesk.php">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                 </div>
               </div>
             </div>
             <style>
                 .hide{
                     display:none;
                 }
             </style>
        <script>
           function  myFunction2(){
                $('#myBtn2').toggleClass('hide');
                $('#myBtn3').toggleClass('hide');
                $('#more2').toggleClass('hide');
                }
            
        </script>    
             

              <button onclick="myFunction2()" id="myBtn2" class="theme-btn btn-style-one float-right">More</button>
               <button onclick="myFunction2()" id="myBtn3" class="theme-btn btn-style-one float-right hide">Less</button>
           </div>
           <!--End single service item-->
           <div id="more2" class="hide"  >
          <div class="col-lg-4 col-md-6">
             <div class="single-service-item">
               <div class="img-holder"> <img src="images/<?php echo $row['image6']; ?>" alt="Advisory Services
">
                 <div class="overlay"></div>
               </div>
               <div class="text-holder">
                 <!-- <div class="icon"> <i class="fa fa-filter" aria-hidden="true"></i> </div>  -->
                 <div class="text">
                   <!-- <h3><a href="#">Advisory Services</a></h3> -->
                   <p><?php echo $row['p14']; ?></p>
                   <div class="readmore"><a href="Advisory_Services.php">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                 </div>
               </div>
             </div>
           </div>
          </div>
          
         </div>
       </div>
     </div>
   </section>
   <!--Service End-->

   <!--Team Section-->
   <section class="team-section" style="background: #ec8e8e29;">
     <div class="auto-container">

       <!--Sec Title-->
       <div class="sec-title centered">
         <h2><?php echo $row['p16']; ?></h2>

       </div>
       <div class="row clearfix">
         <div class="col-md-4 col-sm-6 service text-center light padding-top-xlarge" style="padding-top:130px">
           <div class="big">
             <img src="images/<?php echo $row['image8']; ?>" width="135" height="170" border="0" alt="DataOps">
           </div>
           <div class="separator dark"><i class="short-line"></i><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i><span class="short-line"></span></div>
           <div class="service-text careers">
             <h4 class="text-weight-600"><?php echo $row['p17']; ?></h4>

             <p style="text-align:left"><?php echo $row['p18']; ?></p>
           </div>

         </div>
         <div class="col-md-4 col-sm-6 service text-center light padding-top-large" style="padding-top:70px">
           <div class="big">
             <img src="images/<?php echo $row['image9']; ?>"" width=" 160" height="215" border="0" alt="DataSpeaks">
           </div>
           <div class="separator dark"><i class="short-line"></i><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i><span class="short-line"></span></div>
           <div class="service-text careers">
             <h4 class="text-weight-600"><?php echo $row['p19']; ?></h4>
             <p style="text-align:left"><?php echo $row['p20']; ?></p>
           </div>
         </div>
         <div class="col-md-4 col-sm-6 service text-center light">
           <div class="big">
             <img src="images/<?php echo $row['image10']; ?>"" width=" 170" height="250" border="0" alt="DataDelivers">
           </div>
           <div class="separator dark"><i class="short-line"></i><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i><span class="short-line"></span></div>
           <div class="service-text careers">
             <h4 class="text-weight-600"><?php echo $row['p21']; ?></h4>
             <p style="text-align:left"><?php echo $row['p22']; ?></p>
           </div>
         </div>


       </div>

       <!-- <div class="row clearfix">
            	
            <div class="team-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<ul class="social-icon-one">
                        	<li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    	<div class="image">
                        	<img src="images/resource/team-1.png" alt="" />
                        </div>
                        <div class="lower-box">
                        	<h3><a href="#">Celsiya Malcom</a></h3>
                            <div class="designation">Builder Advisor</div>
                        </div>
                    </div>
                </div>
                
                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<ul class="social-icon-one">
                        	<li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    	<div class="image">
                        	<img src="images/resource/team-2.png" alt="" />
                        </div>
                        <div class="lower-box">
                        	<h3><a href="#">Andrea Spilber</a></h3>
                            <div class="designation">Project Manager</div>
                        </div>
                    </div>
                </div>
                

                <div class="team-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<ul class="social-icon-one">
                        	<li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    	<div class="image">
                        	<img src="images/resource/team-3.png" alt="" />
                        </div>
                        <div class="lower-box">
                        	<h3><a href="#">Nelson Mecoy</a></h3>
                            <div class="designation">Architecture</div>
                        </div>
                    </div>
                </div>
                
               
                
            </div>-->

     </div>
   </section>
   <!--End Team Section-->

 <?php
  }
  ?>

 <?php

  include('dbcon.php');


  $result = mysqli_query($con, "SELECT * FROM testimonial");


  ?>
 <!--Default Section-->
 <section class="default-section style-two" style="background-image:url(images/testimonial-bg.jpg)">
   <div class="auto-container">
     <div class="row clearfix">

       <!--Testimonial Column-->
       <div class="testimonial-column col-lg-12 col-md-12 col-sm-12">
         <div class="inner-column">
           <!--Sec Title-->
           <div class="sec-title centered">

             <h2 style="color: #ffffff;">Testimonial</h2>
           </div>


           <div class="single-item-carousel owl-carousel owl-theme">

             <?php
              while ($row = mysqli_fetch_assoc($result)) {
              ?>

               <!--Testimonial Block-->
               <div class="testimonial-block-two">
                 <div class="inner-box">
                   <div class="image">
                     <img src="" alt="" style="border-radius: 50%;" />
                   </div>
                   <h3 style="color: #ffffff;"><?php echo $row['name']; ?>"</h3>
                   <div class="quote-icon">
                     <span class="icon"><img src="images/icons/quote-icon.png" alt="digitowork quote" /></span>
                   </div>
                   <div class="text"><?php echo $row['description']; ?>"</div>
                   <div class="rating" style="color: #c5b70e;">
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star-o"></span>
                   </div>
                 </div>
               </div>
             <?php
              }
              ?>


           </div>

         </div>

       </div>



     </div>
   </div>

   </div>

   </div>
 </section>

 <!--End Default Section-->


 <!--Services Section-->
 <!-- <section class="services-section">
    	<div class="auto-container">
        	<div class="sec-title centered">
            	
                <h2>Whats Our Offers</h2>
                <div class="seperater"></div>
            </div>
            <div class="row clearfix">
            	
                <div class="services-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                    	<div class="icon-box">
                        	<span class="icon flaticon-sketch"></span>
                        </div>
                        <h3><a href="services-single.html">Who is DigitoWork?</a></h3>
                        <div class="text">Data is the important ingredient for an organizations digital transformation journey. DigitoWork accelerates digital transformation journey by providing end to end data services.</div>
                   </div>
                </div>
                
                <div class="services-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                    	<div class="icon-box">
                        	<span class="icon flaticon-house-plans"></span>
                        </div>
                        <h3><a href="services-single.html">Focus - data first</a></h3>
                        <div class="text">Capitalize on low hanging fruit to identify a ball-park value added activity to beta test. Override the digital divide with additional clickthroughs from DataOps.</div>
                   <br/> </div>
                </div>
                
                <div class="services-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                    	<div class="icon-box">
                        	<span class="icon flaticon-skyline"></span>
                        </div>
                        <h3><a href="services-single.html">Innovation & Experts</a></h3>
                        <div class="text">Listens to challenges, generates ideas & solves problems. Continuously develops platforms and solutions with certainty and creativity using the latest technologies.</div>
                     <br/></div>
                </div>
                
                <div class="services-block col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box" style="background-image:url(images/resource/service-1.jpg)">
                    	<div class="icon-box">
                        	<span class="icon flaticon-document"></span>
                        </div>
                        <h3><a href="services-single.html">Embrace Technology</a></h3>
                        <div class="text">Our continuous learning culture brings us close to cutting edge technologies and we leverage the same for customers. Our goal is to have our customers ahead in the Game.</div>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </section> -->
 <!--End Services Section-->
 <!--Subscribe Section-->
 <section class="subscribe-section-two">
   <div class="container_strip">
     <div class="container">
	 <form method="post" action="php3/contact.php" style="display: inline-flex;">
       <div class="row clearfix">
                    	<!--Column-->
          <div class="column col-lg-3 col-md-12 col-sm-12">
               <div class="row clearfix">   
               <div class="checkout-title">
                            	<h4 style="font-weight:bold;color: black;"> HAVE A QUESTION? </h4>
                            </div>			   
                    
                </div>
         </div>
        <div class="column col-lg-9 col-md-12 col-sm-12">               
                            <div class="row clearfix">
             <!-- Team Block -->
             
               <div class="form-group col-lg-3 col-md-12 col-sm-12">
                 <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                   <input class="input100" type="text" name="name" placeholder="Name" required>
                 </div>
               </div>

               <!-- Team Block -->
               <div class="form-group col-lg-3 col-md-12 col-sm-12">
                 <div class="wrap-input100 validate-input m-b-23" data-validate="Emails Required">
                   <input class="input100" type="email" name="email" placeholder="Business emails only" required>
                 </div>
               </div>

               <!-- Team Block -->
               <div class="form-group col-lg-3 col-md-12 col-sm-12">
                 <div class="wrap-input100 validate-input m-b-23" data-validate="number is reauired">
                   <input class="input100" type="number" name="phone" placeholder="Phone" required>
                 </div>
               </div>
               <div class="form-group col-lg-2 col-md-12 col-sm-12">

                 <div class="contact-btn" style="margin-top: -14px;">
                   <input type="submit" value="Submit" name="submit" class="sub">
                 </div>
               </div>
             
           </div>

         </div>

       </div>
	   </form>
     </div>
   </div>
 </section>
 <?php include 'footer1.php'; ?>
