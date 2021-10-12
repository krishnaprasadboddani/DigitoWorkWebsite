   <?php include 'header.php'; ?>

   <!--Page Title-->
   <section class="page-title" style="background-image:url(images/background/2.jpg)">
       <div class="auto-container">

           <h4 style="text-align:center;color:white">Slick, modern and efficient ITSM software for standardized processes and service delivery</h4>

       </div>
   </section>
   <!--End Page Title-->
   <?php

    include('dbcon.php');


    $result = mysqli_query($con, "SELECT * FROM itsm_services");
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

                               <h3 style="text-align:center"><?php echo $row['p1']; ?></h3>

                               <br />

                               <div class="text">
                                   <div class="row clearfix">
                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <?php echo $row['p2']; ?>
                                       </div>

                                       <div class="column col-lg-6 col-md-6 col-sm-12">
                                           <div class="image " data-wow-delay="0ms" data-wow-duration="1500ms">
                                                <img src="images/<?php echo $row['image1']; ?>" alt="" />
                                           </div>
                                       </div>
                                   </div>
                                   <br />
                                   <div class="row clearfix">
                                       <div class="column col-lg-12 col-md-6 col-sm-12">
                                           <div class="award_item1 ">
                                               <?php echo $row['p3']; ?>
                                           </div>
                                       </div>

                                       <div class="column col-lg-12 col-md-6 col-sm-12">
                                           <div class=" award_item1 ">
                                               <?php echo $row['p4']; ?>
                                           </div>
                                       </div>
                                   </div>

                                   <div class="row clearfix">
                                       <div class="column col-lg-7 col-md-6 col-sm-12">

                                           <br />
                                           <?php echo $row['p5']; ?>



                                       </div>

                                       <div class="column col-lg-5 col-md-6 col-sm-12">
                                           <br />
                                           <br />

                                           <div class="image " data-wow-delay="0ms" data-wow-duration="1500ms">
                                               <img src="images/<?php echo $row['image2']; ?>">
                                           </div>


                                       </div>
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
       <section class="faq-section" style="margin-top: -54px;">
           <div class="auto-container">
               <div class="row clearfix">

                   <!--Content Column-->
                   <div class="content-column col-lg-12 col-md-12 col-sm-12">
                       <div class="inner-column">
                           <div class="sec-title">
                               <div class="title">
                                   <?php echo $row['p6']; ?>
                               </div>
                           </div>

                           <!--Accordian Box-->
                           <ul class="accordion-box">

                               <!--Block-->
                               <li class="accordion block">
                                   <div class="acc-btn ">
                                       <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                           <span class="icon icon-minus fa fa-minus"></span></div><?php echo $row['p7']; ?>
                                   </div>
                                   <div class="acc-content ">
                                       <div class="content">
                                           <div class="text">
                                               <?php echo $row['p8']; ?>

                                           </div>
                                       </div>
                                   </div>
                               </li>

                               <!--Block-->
                               <li class="accordion block">
                                   <div class="acc-btn">
                                       <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                           <span class="icon icon-minus fa fa-minus"></span></div><?php echo $row['p9']; ?>


                                   </div>
                                   <div class="acc-content">
                                       <div class="content">
                                           <div class="text">
                                               <?php echo $row['p10']; ?>

                                           </div>
                                       </div>
                                   </div>
                               </li>

                               <!--Block-->
                               <li class="accordion block ">
                                   <div class="acc-btn ">
                                       <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                           <span class="icon icon-minus fa fa-minus"></span></div> <?php echo $row['p11']; ?>
                                   </div>
                                   <div class="acc-content ">
                                       <div class="content">
                                           <div class="text">
                                               <?php echo $row['p12']; ?>
                                           </div>
                                       </div>
                               </li>


                               <!--Block-->
                               <li class="accordion block ">
                                   <div class="acc-btn ">
                                       <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                           <span class="icon icon-minus fa fa-minus"></span></div> <?php echo $row['p13']; ?>
                                   </div>
                                   <div class="acc-content ">
                                       <div class="content">
                                           <div class="text">
                                               <?php echo $row['p14']; ?>
                                           </div>
                                       </div>
                               </li>


                               <!--Block-->
                               <li class="accordion block ">
                                   <div class="acc-btn ">
                                       <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                           <span class="icon icon-minus fa fa-minus"></span></div><?php echo $row['p15']; ?>
                                   </div>
                                   <div class="acc-content ">
                                       <div class="content">
                                           <div class="text">
                                               <?php echo $row['p16']; ?>
                                           </div>
                                       </div>
                               </li>


                           </ul>

                       </div>
                   </div>

               </div>
           </div>
       </section>
       <!--End Faq Section-->


       <section class="project-single-section">
           <div class="auto-container">
               <div class="upper-section">



                   <div class="row clearfix">

                       <!--Content Column-->
                       <div class="content-column col-lg-12 col-md-12 col-sm-12">
                           <div class="inner-column">

                               <?php echo $row['p17']; ?>
                               <p></p>

                               <div class="text">
                                   <?php echo $row['p18']; ?> </div>
                               <div class="column col-lg-12 col-md-12 col-sm-12">
                                   <div class="image wow " data-wow-delay="0ms" data-wow-duration="1500ms">
                                       <img src="images/<?php echo $row['image3']; ?>">
                                   </div>







                               </div>
                           </div>
                       </div>
                   </div>



               </div>

           </div>
           </div>
       </section>
       <?php } ?>
       <!--End Projects Single Section-->


       <!-- <section class="default-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="testimonial-column col-lg-4 col-md-12 col-sm-12">
                	
                        <div class="single-item-carousel owl-carousel owl-theme">
                        <div class="image">
                            <img src="images/resource/about.jpg" alt="" />
                        </div>  
                        
                    </div>
                </div>
                
                <div class="news-column col-lg-8 col-md-12 col-sm-12">
                	<div class="inner-column">
                      
                        <div class="news-carousel owl-carousel owl-theme">
                        	<div class="slide">
                            
                                <div class="news-block-two">
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                           
                                            <div class="content-column col-lg-12 col-md-8 col-sm-12">
                                                <div class="inner-content">
                                        <h6><a href="">Reasons to Choose <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span>’s IT Service Management Software

</a> </h6>

                                                    <div class="text">There are of course many IT service management software products available for
                                                    customers to choose from, and one of the main reasons why customers choose <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span>’s IT service management software is choice. 

</div>

<p><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> offers both cloud and on-premise delivery models, 
plus different ITSM capability and pricing levels from basic ticketing system, through help desk, to IT service management software. 
The IT service management software is also very flexible – making configuration and customization, where needed, easy. 
Customers also view us as one of the best value IT service management software products on the market. At a more operational level, <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span>’s IT service management software helps customers to: Improve their quality of service delivery and IT support capabilities
</p>
<ul class="list-style-four">
    <li>Increase the efficiency of ITSM and IT operations
</li>
<li>Save money in terms of IT service management software costs, and Improve the customer experience for end users and customers
</li>
</ul>
<p style="font-weight:bold; font-style:italic">In particular, <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span>’s IT service management software can help customers through:
</p>
<p><a style="font-weight:bold; ">1. Supplying the ITSM foundation that you need. <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span></a> IT service management software delivers functionality that you can build on. An initial implementation of help desk capabilities can be followed by expansion into other ITSM capabilities such as configuration management, problem management, and more.
</p>
<p><a style="font-weight:bold; ">2. Versatile data capture.</a> The <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span>ork IT service management software 
receives input data from as wide a range of sources as you need. This covers traditional service desk, end-user self-service, automated monitoring, email capture, 
and more. <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> is also easy to integrate with other IT management and business systems – 
either through pre-built integrations or via the <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> API.
</p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                            <div class="slide">
                            
                                <div class="news-block-two">
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            
                                            <div class="content-column col-lg-12 col-md-8 col-sm-12">
                                                <div class="inner-content">
											<p><a style="font-weight:bold; ">3. The experiences and support of a wide customer base<a/>. Knowing that many other organizations are happy with their 
											choice of <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span>’s IT service management software means that you can be sure you will be happy too. 
											Thanks to the <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> Online Community these customers are also there to help as needed.</p>
                                       <p><a style="font-weight:bold; ">4. Platform versatility.</a> <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span>’s IT service management software is as happy running on your own in-house hardware or in the Cloud via SaaS. You decide what suits you better. If circumstances or opinions change, then so can you.</p>
                                                   <p><a style="font-weight:bold; ">5. Improved visibility and reporting.</a> The data within the <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> IT service management software is there for you to use as you wish. A wide range of reporting possibilities lets you build the reports, dashboards, and alerts that you need.</p>
                                                   <p><a style="font-weight:bold; ">6. Offering the ability to buy for now, and to build for the future.</a> With <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> ’s pricing structure you can buy what you need for now, confident that you can add more as you expand in size and ITSM coverage in the future.</p>
                                                    <p><a style="font-weight:bold; ">7. Ease-of-use and its intuitive nature.</a> Designed to be used, <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> ’s IT service management software is
                                                    easy to learn and even easier to use. In an age when the upcoming generations expect their applications to be intuitive,
                                                    <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span>’s IT service management software does not disappoint them.</p>
                                                    <p><a style="font-weight:bold; ">8. 21st century features.</a> New, expected concepts, such as on-line chat and self-service, are already mainstream
                                                    within <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span>’s IT service management software. SysAid follows its customers’ lead as to what capabilities should be added next.</p>
                                                    <p><a style="font-weight:bold; ">9. Consistency.</a> When your IT service management software delivers a range of services, then commonality of use 
                                                    is important. <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> delivers a common, easy to learn, user interface across all of its ITSM capabilities.</p>
                                                    <p><a style="font-weight:bold; ">10. Best-practice alignment.</a> Designed with the ITIL framework in mind, the <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> IT service management software will fit, facilitate, and support expansion of your service management processes in 
                                                    line with the industry’s most popular ITSM best-practice framework.</p>
                                                    <div class="text"></div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                              <div class="slide">
                            
                                <div class="news-block-two">
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            
                                            <div class="content-column col-lg-12 col-md-8 col-sm-12">
                                                <div class="inner-content">
										           <h6><a>IT and Business Benefits from <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> ITSM: </a></h6>
                                                    <div class="text"></div>
                                                    <p>Imagine an awkward party where two groups, who don’t always get along, are hanging out. One group includes the IT professionals who serve a company.
                                                    The other group includes the end users who depend on IT for services. End users could be employees of the company, partners, or customers. 
                                                    The silence is painful. Someone asks about the weather. No one is having that much fun. Then ITSM arrives and fixes all the awkwardness. 
                                                    Done right, it achieves the following benefits:</p>
                                                    <p style="font-weight:bold">Benefits for IT:</p>
                                                    <ul class="list-style-four">
                                                        <li>Better understanding of what the business needs and why (i.e. “business alignment”)</li>
                                                        <li>Repeatable and scalable processes</li>
                                                        <li>Defined roles and responsibilities</li>
                                                        <li>Increased productivity</li>
                                                        <li>Satisfied end users with realistic expectations</li>
                                                        <li>Shorter gaps between detecting incidents and solving them</li>
                                                        <li>Prevention of IT issues before they happen</li>
                                                        <li>Ability to identify and address repeat problems</li>
                                                        <li>Analytics to measure and improve IT’s performance</li>
                                                    </ul>
                                                    <p style="font-weight:bold">Benefits for the Business:</p>
                                                    <ul class="list-style-four">
                                                        <li>IT can react quickly to change and innovation in the market</li>
                                                        <li>Better IT availability and performance means employees get more done</li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                            <div class="slide">
                            
                                <div class="news-block-two">
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            
                                            <div class="content-column col-lg-12 col-md-8 col-sm-12">
                                                <div class="inner-content">
                                                    <div class="text"></div>
                                                    
                                                    <ul class="list-style-four">
                                                        
                                                        <li>IT issues are less common, less impactful, and less costly</li>
                                                        <li>Employees know what services are available and how to use them</li>
                                                        <li>IT provides better service at a lower cost</li>
                                                        <li>Business complies with regulatory requirements no one wants to think about</li>
                                                        <li>When ITSM runs smoothly, that once-awkward party becomes one of those epic evenings that ought to be memorialized with stone tablets (or impulsive tattoos). It’s that good.</li>
                                                    </ul>
                                                    <h6><a><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> – ITSM – Takeaway </a></h6>
                                                    <p>ITSM is a wide-ranging craft that can benefit your IT organization and company. Simply put:</p>
                                                    <ul class="list-style-four">
                                                        <li>ITSM increases the speed, cost-efficiency, and effectiveness of IT service</li>
                                                        <li>ITSM reduces IT incidents and prevents them from happening in the first place</li>
                                                        <li>By ensuring IT is available and performing, ITSM enables employees to be productive</li>
                                                        <li>When business must evolve, ITSM modernizes technology without disrupting work.</li>
                                                        <li>ITSM reduces risk by enforcing compliance with regulations</li>
                                                        
                                                    </ul>
                                                    <p>A powerful but less concrete benefit of ITSM is how it changes the relationship between IT and the business. 
                                                    Too often, IT’s raison d'être is doing damage control when things inevitably malfunction.
                                                    With ITSM, the IT group becomes more of an internal service provider and consultant.
                                                    It learns what the business seeks to achieve and strives to introduce technology that can bring those goals to fruition.</p>
                                                    <p style="font-weight:bold">ITSM is the art of making a business run…….</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                              <div class="slide">
                            
                                <div class="news-block-two">
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            
                                            <div class="content-column col-lg-12 col-md-8 col-sm-12">
                                                <div class="inner-content">
                                                    <div class="text"></div>
                                                    
                                                    <h6><p style="font-weight:bold">CHALLENGES WE SOLVE</p></h6>
                                                    <p>Companies may face plentiful ITSM-related challenges. They can be general or specific. But regardless of that, we can help you tackle any of them, for instance:</p>
                                                   <p><span style="font-weight:bold">1.Inefficiency of IT support across distributed business units</span>
                                                   Giving a single view on the IT processes and infrastructure, an ITSM solution will speed up IT support processes across a distributed IT environment.</p>
                                                   <p><span style="font-weight:bold">2.Complexity of monitoring vendors’ performance</span>
                                                   DigitoWork’s team can configure a vendor assessment functionality to make vendor evaluation and ranking easy, convenient and compliant with your company’s workflows. This way, you can benefit from a better monitoring and ensure a high quality of IT services you deliver to users.</p>
                                                   <p><span style="font-weight:bold">3.Failure to manage multiple IT service vendors with different SLAs and overlapping areas of responsibility</span>Integrating your ITSM solution with those of your vendors’ as well as configuring Service Level Management functionality and creating different task workflows for different vendors can help your 
                                                   company successfully manage your cooperation with multiple vendors. With <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span>’s ITSM knowledge, your company can deal with overlapping areas of responsibility through establishing systematic problem management and paying extra attention to finding the root cause.</p>
                                                   <p><span style="font-weight:bold">4.Inability to assess IT employees’ performance</span>We can help you exploit IT employee performance information to measure KPIs for IT employees, assignment groups and regional units. It’ll make it easier to visualize performance trends and react to them.</p>
                                                   <p><span style="font-weight:bold">5.Disorganization of Financial management for IT services</span>With Financial Management functionality integrated into your ITSM solution,
                                                   you can gain visibility into IT service costs, make the sources of IT costs evident, and reveal whether they stay within budget.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                             
                              <div class="slide">
                            
                                <div class="news-block-two">
                                    <div class="inner-box">
                                        <div class="row clearfix">
                                            
                                            <div class="content-column col-lg-12 col-md-8 col-sm-12">
                                                <div class="inner-content">
                                                    <div class="text"></div>
                                                   <p><span style="font-weight:bold">6.Lack of preventive efforts in IT service management</span>
                                                      By designing and implementing Problem Management, our specialists can help your IT support analyze and root out the causes of similar incidents to prevent such incidents from occurring again. They can also implement and tune Event Management to help your ITSM specialists monitor your IT infrastructure health, uncover alarming events in it and prevent outages these events may cause. Problem and Event Management will help you achieve both high IT service availability and cost effectiveness.
                                                   <p><span style="font-weight:bold">7.Difficulty in solving ITSM problems caused by merges and acquisitions</span>
                                                   We can help you import users, groups, companies, departments and locations into your instance, which will enable you
                                                   to manage merges and acquisitions in an easy and convenient way. In case you need the scope of merges or acquisitions
                                                   to be more comprehensive, <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> can perform required migrations or integrations to create a balanced
                                                   ITSM-ecosystem for your companies.
                                                   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                               
                            
                          
                            
                        </div>
                        
                    </div>
                </div>
                        
                    </div>
                </div>
            
    </section>  -->


       <!--End Default Section-->
       <!--Subscribe Section-->
       <?php include 'footer.php'; ?>
   <!--Main Footer-->
   

 