   <?php include 'header.php'; ?>

   <!--Page Title-->
   <section class="page-title" style="background-image:url(images/background/2.jpg)">
       <div class="auto-container">
           <h4 style="text-align:center;color:white"><span style="color:#c70000">D</span>igito<span style="color:#c70000">W</span>ork – Smart IT Asset Management (ITAM) for Smart Companies</h4>

       </div>
   </section>
   <!--End Page Title-->
   <?php

    include('dbcon.php');


    $result = mysqli_query($con, "SELECT * FROM itam_services");
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
                               <h3 style="text-align:center;margin-top: -20px;
    margin-bottom: 10px;"><?php echo $row['p1']; ?> </h3>

                               
                               <div class="row clearfix">
                                   <div class="column col-lg-7 col-md-6 col-sm-12">
                                       <p><?php echo $row['p2']; ?>
                                       </p>

                                       <p><?php echo $row['p3']; ?></p>

                                   </div>

                                   <div class="column col-lg-5 col-md-6 col-sm-12">
                                       <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                           <img src="images/<?php echo $row['image1']; ?>" alt="" />
                                       </div>

                                   </div>
                               </div>



                               <div class="text">

                                   

                                   <h6><a href="#"><?php echo $row['p4']; ?></a></h6>

                                   <div class="row clearfix">
                                       <div class="column col-lg-8 col-md-6 col-sm-12">
                                           <br />
                                           <ul class="list-style-five">
                                               <?php echo $row['p5']; ?>
                                           </ul>
                                       </div>

                                       <div class="column col-lg-4 col-md-6 col-sm-12">
                                           <div class="image " data-wow-delay="0ms" data-wow-duration="1500ms">
                                              <img src="images/<?php echo $row['image2']; ?>" alt="" />
                                           </div>
                                       </div>

                                   </div>
                                
                                   <div class="row clearfix">
                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <div class="award_item ">
                                               <h6><?php echo $row['p6']; ?></h6>
                                               <br />
                                               <ul class="list-style-five">
                                                   <?php echo $row['p7']; ?>
                                                   <br />

                                               </ul>
                                           </div>
                                       </div>

                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <div class="award_item ">
                                               <h6><?php echo $row['p8']; ?></h6>
                                               <br />
                                               <ul class="list-style-five">
                                                   <?php echo $row['p9']; ?>
                                               </ul>
                                           </div>
                                       </div>
                                   </div>
                                   <br />
                                   <p><?php echo $row['p10']; ?></p>
                                   <p><?php echo $row['p11']; ?></p>
                                   <ul class="list-style-four">
                                       <?php echo $row['p12']; ?>
                                   </ul>
                                  

                                   <p><?php echo $row['p13']; ?></p>
                               </div>
                           </div>
                       </div>



                   </div>

               </div>
           </div>
       </section>
       <!--End Projects Single Section-->
       <!--Reason Section-->
       <!-- <section class="reason-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                
                
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                	<div class="inner-column">
                    	
						<div class="row clearfix">
                        	<div class="col-lg-5 col-md-6 col-sm-12">
							<h6>Why is Asset Management Important for IT?</h6>
							                        <div class="text">IT organizations manage a large proportion of the company’s total asset footprint. IT assets are both costly to acquire and to maintain. As a result, asset management plays a critical role in helping IT teams to ensure efficient use of the organizations resources in supporting the needs of users and business functions.</div>

							<p><span style="color:#c70000">D</span>igito<span style="color:#c70000">W</span>ork Provides complete IT Asset , 
							Compliance & Inventory Tracking solution that enables users to conduct comprehensive, cost-effective physical audits. 
							We take the lead in your IT Asset Recovery and Disposition. 
							We design and execute the recovery  for your decommissioned assets – without disrupting your workflow or burdening your staff. For IT Asset Management and disposition to be successful in meeting your goals, we identify your objectives and build a solution around your needs.
							We want you to consider DigitoWork as an extension of your IT Asset Management team to execute and manage your IT asset disposition and make your ITAM program rock solid.</p>

                            	
                            </div>
                            
                            <div class="col-lg-7 col-md-6 col-sm-12">
							<h6><a><span style="color:#c70000">D</span>igito<span style="color:#c70000">W</span>ork will:</a></h6>
                               <ul class="list-style-four">
							   <li>Determine your unique needs and priorities.</li>
							   <li>Create a custom IT Asset Management Program to fit your goals and timeline</li>
							   <li>Coordinate the timing, etiquette and recovery requirements with your site representatives.</li>
							   <li>Eliminate the burden on you for identifying and managing multiple vendor relationships.</li>
							   <li>Provide standardized electronic reporting across your global footprint to make Software Harvesting a breeze – reclaim unused licenses and return money to your budget.</li>
                                <li>SLA Based Management & Reporting</li>
								<li> Process Automation</li>
								<li> Data Integration </li>
								<li> Process Simplification</li>
								<li>Metrics Driven Decision Making</li>

                              </ul>
                              <p>Implementing Business Process Reengineering (BPR) Strategy:</p>
                              <ul class="list-style-five">
                                  <li>Do you have a comprehensive data of your user base and service offering to them?</li>
                                  <li>Are you able to meet deliver tasks in expected timelines?</li>
                                  <li>Does your business process need restructuring and redesign?</li>
                                  <li>Are your existing processes in line with business goals?</li>
                              </ul>
                              <p>These are some among many other related concerns that many organizations are facing in their business journey.
                              <span>Business Process Reengineering</span> has an answer for all these! Want to have one for your organization?</p>
                            	
                            </div>
                            
                        </div>
						
                    </div>
                </div>
                
            </div>
        </div>
    </section> -->

       <!--Faq Section-->
       <section class="faq-section1" style="margin-top: -54px;">
           <div class="auto-container">
               <div class="row clearfix">

                   <!--Content Column-->
                   <div class="content-column col-lg-12 col-md-12 col-sm-12">
                       <div class="inner-column">
                           <div class="sec-title" style="margin-bottom: 25px;">
                               <div class="title">

                               </div>
                               <h5><?php echo $row['p14']; ?></h5>
                           </div>

                           <!--Accordian Box-->
                           <ul class="accordion-box">

                               <!--Block-->
                               <li class="accordion block">
                                   <div class="acc-btn ">
                                       <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                           <span class="icon icon-minus fa fa-minus"></span></div><?php echo $row['p15']; ?>
                                   </div>
                                   <div class="acc-content ">
                                       <div class="content">
                                           <div class="text"><?php echo $row['p16']; ?></div>
                                       </div>
                                   </div>
                               </li>

                               <!--Block-->
                               <li class="accordion block">
                                   <div class="acc-btn">
                                       <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                           <span class="icon icon-minus fa fa-minus"></span></div><?php echo $row['p17']; ?>

                                   </div>
                                   <div class="acc-content">
                                       <div class="content">
                                           <div class="text">
                                               <?php echo $row['p18']; ?>

                                           </div>
                                       </div>
                                   </div>
                               </li>

                               <!--Block-->
                               <li class="accordion block ">
                                   <div class="acc-btn ">
                                       <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                           <span class="icon icon-minus fa fa-minus"></span></div><?php echo $row['p19']; ?>

                                   </div>
                                   <div class="acc-content ">
                                       <div class="content">
                                           <div class="text"><?php echo $row['p20']; ?>
                                           </div>
                                       </div>
                                   </div>
                               </li>
                               <li class="accordion block ">
                                   <div class="acc-btn ">
                                       <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                           <span class="icon icon-minus fa fa-minus"></span></div><?php echo $row['p21']; ?>
                                   </div>
                                   <div class="acc-content ">
                                       <div class="content">
                                           <div class="text">
                                               <?php echo $row['p22']; ?>

                                           </div>
                                       </div>
									   
                               </li>
                               <!--	<li class="accordion block ">
                                <div class="acc-btn "><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> 
								<span class="icon icon-minus fa fa-minus"></span></div> Standardization

</div>
                                <div class="acc-content ">
                                    <div class="content">
                                        <div class="text">
										 Non-standard IT equipment and software can cost an organization a lot of money. It causes IT staff to be less productive because they lack expertise managing the non-standard assets so each issue results in a learning process. Applying standards to IT assets not only makes IT staff more productive, users are also more productive interacting with systems and data that they are familiar with.


</div>
                                    </div>
                                </div>
                            </li>-->

                           </ul>

                       </div>
                   </div>

               </div>
           </div>
       </section>
   <?php
    }
    ?>
   <!--End Faq Section-->
   <?php include 'footer.php'; ?>