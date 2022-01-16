        <?php include 'header.php'; ?>


        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/2.jpg)">
            <div class="auto-container">
                <h4 style="color:white;text-align:center">Accelerating enterprise-class data management innovation</h4>
                <!--<ul class="page-breadcrumb">
            	<li><a href="index.html">HOME</a></li>
                <li>Services</li>
            </ul>-->

            </div>
        </section>
        <!--End Page Title-->
        <?php

        include('dbcon.php');


        $result = mysqli_query($con, "SELECT * FROM services");
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
                                    <h2 style="text-align:center"><?php echo $row['p1']; ?></h2>
                                    <br />
                                    <div class="row clearfix">
                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <br />
                                            <p><?php echo $row['p2']; ?></p>
                                            <p><?php echo $row['p3']; ?></p>

                                        </div>

                                        <div class="column col-lg-6 col-md-6 col-sm-12">
                                            <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                                <img src="images/<?php echo $row['image1']; ?>" alt="" />
                                            </div>

                                        </div>

                                        <p style="color: black; margin-left:14px"><?php echo $row['p4']; ?></p>

                                        <h6><?php echo $row['p5']; ?></h6>
                                        <br /><br />
                                        <?php echo $row['p6']; ?>

                                        <p><?php echo $row['p7']; ?></p>
                                        <p style="padding-bottom: 10px;"><?php echo $row['p8']; ?></p>
                                        <br />
                                        <br />
                                        <ul class="list-style-four" style="font-family: 'Arimo', sans-serif;">
                                            <h5><span><?php echo $row['p9']; ?></span></h5>
                                            <?php echo $row['p10']; ?>
                                        </ul>



                                        <!--
													<br/>
									 <div class="row clearfix">
                                    	<div class="column col-lg-12 col-md-12 col-sm-12">
										<div class="award_item ">
									   <h5><a href="#"><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> – Vision</a></h5>
                                         <p>The most valuable and transformative business use cases—IoT-enabled predictive maintenance, genomics research, real-time compliance monitoring—require multiple analytics workloads and data science tools and machine learning algorithms to run against the same diverse data sets. It’s how the most innovative enterprises unlock value from their data and compete in the data age.</p>
                                        	
                                        	<ul class="list-style-four">
                                        	    But many businesses still struggle with limited data visibility and insufficient insights. This is often caused by:  

                                            <li>Analytic workloads running independently—in silos—because even newer cloud data warehouses and data science tools were never designed to work together</li>                                         
										   <li>Data being everywhere—in data centers, public clouds, and at the Edge—and companies have no practical way to run analytics or apply machine learning algorithms to all their data</li>
										   <li>An incoherent approach to data privacy or IP protection often resulting in onerous controls that limit business productivity and increase costs</li>
										   <li>Organizations need a new approach. An enterprise data cloud unlocks the power of your data to serve customers better, operate with greater efficiency, and strengthen security to protect your business:</li>
										   </ul>
										   <ul class="list-style-five">
										       <li>It is optimized for hybrid and multi-cloud environments, delivering the same data management capabilities across bare metal, private, and public clouds</li>
										      <li>It allows multiple analytic functions to work together on the same data at its source, eliminating costly and inefficient data silos</li>
										   <li>It maintains strict enterprise data security, governance, and control across all environments</li>
										  <li>It is 100 percent open source, with open compute and open storage, ensuring zero vendor lock-in and maximum interoperabilit</li>
										   </ul>
										   </div>
                                        </div>
										
                                        <div class="column col-lg-12 col-md-12 col-sm-12">
										<div class="award_item ">
										<h5><a href="#"><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span>  - Mission</a></h5>
                                          <p><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> is a client-driven company with our top priorities placed on attention to detail, quality and performance. Our basic growth philosophy is one of moderation and is based on marketing partnerships with the highest quality of direct marketing organizations. Our basic operating philosophy is to provide our clients with innovative solutions to help them grow, while providing the highest degree of customer service possible.</p>
                                        	<p>As a marketing partner, we believe that by providing global direct marketing opportunities for clients, we can help meet your needs to the highest degree.</p>
                                        <p>We are committed to developing and or acquiring new systems that will continuously improve our global capabilities.</p>
                                        </div>
									   </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Projects Single Section-->
            <!--Reason Section-->
            <!-- -->

            <!--Faq Section-->
            <!-- <section class="faq-section1">
    	<div class="auto-container">
        	<div class="row clearfix">
            
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                        	<div class="title">
</div>
                        </div>
                        
                        <ul class="accordion-box">
                            
                            <li class="accordion block">
                                <div class="acc-btn "><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> 
								<span class="icon icon-minus fa fa-minus"></span></div>DigitoWork – Workflow </div>
                                <div class="acc-content ">
                                    <div class="content">
                                        <div class="text">
                                            <ul class="list-style-four">
                                                <li><span>Consultation - </span><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> prides ourselves on our ability to mold our solutions to meet the unique needs of each customer. Whether it’s an existing or custom solution, DSI has the expertise to tap the proper set of tools to meet your business need.</li>
                                                <li><span>Data Accessibility - </span><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> offers proprietary, industry-specific Data Management Platforms (DMPs) that provide you with secure online access to your database. Our DMPs are highly customizable and contain tools for advanced database segmentation, campaign management, 
                                                data/campaign analytics & reporting, email broadcasting, lead scoring and much more.</li>   
                                                <li><span>Database Standardization & Contact Data Quality - </span>The most robust marketing database is worthless if 
                                                it contains improperly formatted, undeliverable and/or outdated contact records. 
                                                <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> offers domestic and international contact data quality solutions covering maximum countries and territories.
</li>                                           <li><span>List Enhancement/ Data Append - </span>Add missing contact and intelligence elements onto your database in 
                                         order to increase business intelligence and segmentation capabilities. 
                                         <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> offers B2B data append solutions as well as international data append for international markets.
</li>                                       <li><span>Unified Database Creation - </span><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> specializes breaking down data silos in order to create a true 360 degree 
                                  customer view that combines, among other things, online and offline source data/elements. Our expertise in combining global
                                  multi-sourced data files, regardless of variances in source formatting, into a unified master database, built to meet your exact specifications, is unrivaled in the industry.
</li>
                                            </ul>

</div>
                                    </div>
                                </div>
                            </li>
    
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
								<span class="icon icon-minus fa fa-minus"></span></div><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> – Data Management Services </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">
                                            <ul class="list-style-four">
                                                <li>What is a Cloud Data Warehouse?</li>
                                                <p>A cloud data warehouse provides a method to aggregate data from external organizational data sources, systems and 
                                                silos in order to facilitate a more complete view of omnichannel data. A cloud-based system comes with many benefits, 
                                                including removing much of your IT infrastructure burden when compared to an on-premise solution, and is the cornerstone 
                                                of your marketing middleware strategy. <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> provides cloud data warehousing solutions that intake, normalize and
                                                aggregate contact data and associated metrics into a master database(s) in order to vastly improve the data management
                                                outcomes for our clients.  While our primary use-case is to work with contact data and related elements within a
                                                marketing context, we regularly apply our solution to create a 360° database view to fill any number of business-cases.</p>
                                            <li><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> Contact Data Management & Cloud Data Warehousing Under One Roof</li>
                                            <p>The key difference between <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> and other providers is our ability to configure our 
                                            technology to meet the nuances your data – not the other way around. This is accomplished because the <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> solution-set includes but is not limited to data warehousing software…
                                                    We leverage decades of contact data management expertise – including US and international data standardization/normalization, contact data hygiene, etc. – to create a combined, and more complete, cloud data warehousing and database management solution to meet the specific needs required by your data-driven business-case.</p>
                                            
                                            </ul>
                                            <ul class="list-style-five">
                                                <li>Your Key Implementation Outcomes</li>
                                                <p><span>1.Creation of a Single Record of Record:</span> ‘Known’ data is unified into a duplicate-free ‘master database’ containing a single unique record for each individual with attached cross-organizational intelligence metrics.</p>
                                                <p><span>2.Attainment of a 360° Customer View:</span> The holy grail for data-driven marketers, a complete, informed view of each customer and/or prospect that facilitates more personalized, customer-centric marketing communications and improved reliability of analytical reporting. Attain these outcomes and vastly improve your ability to carry out data-driven activation. Whether you’re onboarding into programmatic AdTech, building personas for Account Based Marketing (ABM), or simply constructing smarter segments, you’ll be doing so with added confidence. Not to mention the benefits brought to everything from research, analysis, attribution and other activities.
</p>
                                            </ul>
</div>
                                    </div>
                                </div>
                            </li>
                            
                           
						
                    
                        </ul>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>  -->
            <!--End Faq Section-->
            <section class="reason-section" style="padding-top: 39px;">
                <div class="auto-container">
                    <div class="row clearfix">



                        <div class="content-column col-lg-12 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <div class="text">
                                    <h6 style="color:#000000"><?php echo $row['p11']; ?></h6>
                                    <h5><?php echo $row['p12']; ?></h5>
                                    <br />
                                    <?php echo $row['p13']; ?>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </section>
        <?php
        }
        ?>


        <?php include 'footer.php'; ?>