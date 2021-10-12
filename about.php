<?php include 'header.php'; ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/2.jpg)">
    <div class="auto-container">
        <h4 style="text-align:center;color:white">We bring you powerful advantages to execute your digital transformation</h4>
        <!--<ul class="page-breadcrumb">
            <li><a href="index.html">HOME</a></li>
                <li><a href="">About us</a></li>
            </ul> -->

    </div>
</section>
<!--End Page Title-->
<?php

include('dbcon.php');


$result = mysqli_query($con, "SELECT * FROM about");
while ($row = mysqli_fetch_assoc($result)) {


?>
    <!--About Section-->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="sec-title" style="margin-bottom: 35px;">
                    <div class="title"></div>
                    <h4>About Us</h4>
                    <!--<h2><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span>
                            
                            <span style="color:#222222">ork</span></h2>  -->
                    <div class="bold-text" style="font-style:italic;font-weight:bold;font-size: 18px;"><?php echo $row['p1']; ?>

                    </div>
                </div>

                <!--Content Column-->
                <div class="content-column col-lg-6 col-md-12 col-sm-12" style="margin-left: -13px; margin-bottom: 10px;">
                    <div class="inner-column" style="padding-top:0px;margin-top: -7px;">

                        <div class="text">
                            <p> <?php echo $row['p2']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column" style="padding-top: 1px;">
                        <div class="image wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="images/<?php echo $row['image1']; ?>" alt="digitowork_about" style="height:290px" />
                        </div>
                    </div>
                </div>
                <p style="color:#982121; font-size:19px;font-weight:bold;font-style: italic; "><?php echo $row['p3']; ?></p>

            </div>
        </div>

    </section>




    <!--About Section-->
    <section class="about-section-two" style="background: #efefef;">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Column-->
                <div class="content-column col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="inner-content">
                            <h2 style="text-align:center"><span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span> – Core Competency </h2>

                            <div class="text">

                                </p>
                                <p><?php echo $row['p5']; ?>
                                </p>
                                <p><?php echo $row['p6']; ?>
                                </p>
                                <p><?php echo $row['p7']; ?>
                                </p>
                                <p><?php echo $row['p8']; ?>
                                </p>
                                <p><?php echo $row['p9']; ?>
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
<!--End About Section-->


<!--Projects Single Section-->
<!--<section class="project-single-section">
    	<div class="auto-container">
        	<div class="upper-section">
            	
     <h2 style="text-align:center">WHY <span style="color:#c70000">D</span><span style="color:#222222">igito</span><span style="color:#c70000">W</span><span style="color:#222222">ork</span></h2>

<br>
                 
									<div class="row clearfix">
                                    	<div class="column col-lg-3 col-md-6 col-sm-12">
										<div class="award_item ">
										  <h6 style="color:#000000">You can relieve the burden and costs of account administration</h6>
										  <p>The resources required to support advisors’ management activities are time-consuming and costly. Offloading those tasks can save your staff for other activities like client engagement and networking.
</p>
									  
										   </div>
                                        </div>
										
                                        <div class="column col-lg-4 col-md-6 col-sm-12">
										<div class="award_item ">
										<h6 style="color:#000000">You can let financial advisors focus on value-added activities</h6>
                                         <p>Technology is already helping IT Asset Management, save significant money through outsourcing. 
                                         <span style="color:#c70000">D</span>igito<span style="color:#c70000">W</span>ork predicts that will free up managers to focus more on clients. </p>
                                        <p>“Client profiling, data analytics and operational flexibility will be increasingly critical to effectively target 
                                        and service an increasingly diverse client base,” says <span style="color:#c70000">D</span>igito<span style="color:#c70000">W</span>ork.</p>
                                        </div>
                                        </div>
                                    <div class="column col-lg-5 col-md-6 col-sm-12">
										<div class="award_item ">
										<h6 style="color:#000000">You can generate more revenue</h6>
										<p>According to BCG, a firm with AuM of $100 billion can save 15% to 20% of total costs through such initiatives as outsourcing — a $16 billion to $21 billion opportunity across the industry.</p>
                                          <p>According to another study, advisors who have more time to nurture clients and prospects bring in $1 million more in revenue over 10 years. That study also indicated that advisors who outsource add $14.5 million to their assets annually, double what in-house investment managers add.</p>
                                           <p>A recent study indicates that 84% of firms and advisors who outsourced operations to specialists reported that they’d had a successful experience. They reported that outsourcing:</p>
                                        	<ul class="list-style-five">
                                            	<li>Helped save time (77%)</li>
                                                <li>Helped increase productivity (66%)</li>
                                                <li>Helped optimize efficiency (57%)</li>
                                                <li>Allowed firm to deepen client relationships (53%)</li>
											</ul>
                                        </div>
                                        </div>
                     </div>
                </div>
             </div>

                    
    </section> -->
<!--End Projects Single Section-->
<!--Default Section-->
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
                                        <h2>Digital Transformation Consulting
 </h2>

                                                    <div class="text">
</div>


                                <p>There is a huge value in data and understandably a drive towards digital transformation initiated in every organization. More enterprises than ever are assessing the opportunities hidden in their treasure troves of data to supercharge their business and take the lead in their field.
</p><p>Organizations today can only be as successful as the data they can capture and integrate into their enterprise operations to make disruptive business decisions. Adopting the latest innovation in technology, like artificial intelligence (AI) and data science, is of little value if the data used is insufficient, partial or of poor quality.
</p>                   
<p>Enterprise data is distributed across many locations, from edge to core to multiple clouds. Maintaining control, protecting and securing data while maximizing business value is challenging for businesses to tackle alone. Fujitsu has a proven methodology, backed by an innovation rich environment and broad partner ecosystem, to co-create with organizations and transform them into a data-driven enterprise
</p>
<p><span style="color:#c70000">D</span>igito<span style="color:#c70000">W</span>ork empowers enterprises across multiple industries with most suitable IT solutions to build up new technology-based business models that meet the requirements of modern business environment. We help discover new approaches to digital talent and workforce management, upgrade your employee collaboration experience and enhance customer experience with IT solutions and, what is no less important, bring new digital opportunities in tune with your business strategy. We help embark on a course of digital transformation and bridge the gap between your current state of digital development and a higher level of digital maturity. For all-round support with digital transformation planning and implementation, our IT consultants collaborate with your IT team and business managers. In close cooperation with your team, we work out new ideas with the focus on your specific business knowledge.
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
												<h6><a href="#"><span style="color:#c70000">D</span>igito<span style="color:#c70000">W</span>ork– Four layer-approach to data-driven transformation</a></h6>
<ul class="list-style-four">
<li>Define your data transformation baseline - Take stock of your organization's 'data health', by inspecting the systems, applications and data distribution across IT environments and geographies. DigitoWork helps you achieve this by running an exhaustive discovery workshop to understand what data is available, where the data is stored and how it is used today. We discuss your current and future business strategy as well as desired business outcomes to build a data-driven strategy with you.
</li>
<li>Create your future data architecture - Data landscapes are increasingly distributed. The challenge is to build a data architecture that enables full access and control of data across edge, core and cloud. It takes extensive integration of both hardware and software, as well as cooperation with cloud providers, to make things happen. DigitoWork works with you to define what your future architecture should look like - analyzing the hybrid landscape in terms of platforms, storage, workloads and data management.
</li>
<li>
Protect and secure data - Digital transformation sharpens the focus on data protection and security requirements. It is not just a matter of backups, but rather about safeguarding data integrity and ensuring the availability of data for your business when you need it. DigitoWork works through these issues with you, helping to organize your data protection and security as a continuous life cycle to protect against external threats. Finally, the preservation of data needs to be realized in data collection platforms, in order to create the information sources to be used with analytics and AI.
</li>
<li>Deliver business value - The above 3 layers help ensure one of the biggest challenge in leveraging data science and AI - identifying the right data sets - is overcome. DigitoWork works with you to define data science and machine learning methods that cost-effectively support dynamic data models and data of all types and volumes, while also enabling real-time analysis of data at rest and in motion. This layer of the journey sets the scene for unlocking insights that were previously hidden in your data.

</li>
</ul>

                                                    <div class="text"></div>
                                                    
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
            
    </section>

	
    <section class="faq-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                	<div class="image">
                    	<img src="images/resource/faq.jpg" alt="" />
                    </div>
                </div>
                
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                        	<div class="title">STAGES OF DIGITAL TRANSFORMATION IMPLEMENTATION
</div>
                        </div>
                        
                        <ul class="accordion-box">
                            
                            <li class="accordion block">
                                <div class="acc-btn active-block"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>ANALYZING SITUATION</div>
                                <div class="acc-content current">
                                    <div class="content">
                                        <div class="text">Before defining the destination and building a roadmap to achieve it, we study the current level of your IT development and identify the degree of your digital maturity. Our IT consultants analyze the IT component of your business and uncover threats to avoid and strong sides to focus on.
</div>
                                    </div>
                                </div>
                            </li>
    
                            <li class="accordion block">
                                <div class="acc-btn"><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>SPOTTING AREAS WHERE RETURN ON DIGITAL TRANSFORMATION WILL BE MAXIMAL
</div>
                                <div class="acc-content">
                                    <div class="content">
                                        <div class="text">Considering the expected outcomes and various options of your IT development, we choose the best ways to maximize the profits digital transformation can provide for your business. At the same time, we center on realistic expectations and aim at devising sufficient digital support for your business ambitions.
</div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="accordion block ">
                                <div class="acc-btn "><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> ALIGNING BUSINESS STRATEGY AND DIGITAL TRANSFORMATION
</div>
                                <div class="acc-content ">
                                    <div class="content">
                                        <div class="text">To make digital transformation most effective, we help to align it with your business strategy working in close collaboration with your business representatives. We believe that digital transformation shouldn’t happen for the sake of implementing more and more software − IT solutions should back up business objectives and help uncover new growth opportunities.
</div>
                                    </div>
                                </div>
                            </li>
							<li class="accordion block ">
                                <div class="acc-btn "><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div>PROOF-OF-CONCEPT PROJECT

</div>
                                <div class="acc-content ">
                                    <div class="content">
                                        <div class="text">We can start with a pilot project to prove that an idea is worth investments. With a successful proof-of-concept project, we provide project estimation based on your requirements. Then, it takes us about 2-4 weeks to start (or even less if the project is urgent), and we can easily scale up and down at any time.

</div>
                                    </div>
                                </div>
                            </li>
							<li class="accordion block ">
                                <div class="acc-btn "><div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span> <span class="icon icon-minus fa fa-minus"></span></div> SERIES OF PROJECTS, EACH DELIVERS BUSINESS BENEFITS

</div>
                                <div class="acc-content ">
                                    <div class="content">
                                        <div class="text">
										With the experience in a wide range of technologies, we are happy to drive your digital transformation from various sides. As your enterprise grows and you come to new ideas how to enhance your business with IT, we can offer our support to your IT strategy and become your long-term business partner working with you side-by-side as your business develops and needs new or upgraded software products.

</div>
                                    </div>
                                </div>
                            </li>
                        
                        </ul>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
   
    <section class="about-section-two" style="background: #ffcfc40d;">
    	<div class="auto-container">
        	<div class="row clearfix">
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner-column">
                    	<div class="sec-title">
                        	<div class="title">AREAS OF DIGITAL TRANSFORMATION CONSULTING<br/><br/><span>Digital Customer Experience
</span>
</div>
                        </div>
                        <div class="text">We help businesses get real benefits focusing on the products and services their customers really need. Our IT consultants and engineering team will help to design and implement convenient IT solutions serving the purpose to meet and even exceed your customers’ expectations:
</div>
                        
                       <ul class="list-style-four">
					   <li>Customer mobile apps</li>
					   <li>Customer portals and websites</li>
					   <li>Ecommerce solutions
</li>
<li>Intelligent loyalty programs</li>
<li>Customer service
</li>
					   </ul>
					   <p>This is how DigitoWork enhance customer experience and contributes to customer loyalty:
</p>
<ul class="list-style-four">
<li>Deep personalization based on 360 degree view of a customer.
</li>
<li>Segmentation and product /service design based on segment needs.
</li>
</ul>
<p>Digital customer experience consistent in all channels and touch points.
</p>

                        
                    </div>
                </div>
                
                <div class="blocks-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner-column">
                    	
                        <div class="row clearfix">

                            	<div class="inner-box">
                                	
                                    <div class="lower-content">
									<h6><a href="#">Technology innovations increase technology-related risks</a></h6>
                         <p>It’s tempting to try new technologies and reap the benefits they can bring, but a new technology component always poses a certain degree of risk. We provide risk management that helps save time and costs and avoid pitfalls. Also, we can assist with selecting cutting-edge but already proven tools for risk management.</p>

                                    	<h6><a href="#">Digital workplace and digital collaboration</a></h6>
                                        <div class="text">We find best ways to upgrade a traditional workplace and transform employee experience with the IT solutions that improve employee wellness, help control work-life balance and drive performance.<br/>
										 With Microsoft Gold Collaboration and Content Competency, we apply our 13-year expertise in SharePoint consulting to deliver a full range of SharePoint solutions including intranets, web portals, web content management systems, solutions for document management, knowledge and innovation management, project management and more.</div>
                                    <h6><a href="#">CHALLENGES WE SOLVE</a></h6>
									<p>Alongside with business benefits, digital transformation brings security challenges.</p>
									<p>We deliver full-scale consulting services in information security and help our customers proactively identify security gaps. Our security experts specialize in:</p>
									<ul class="list-style-four">
									<li>IT security strategy consulting and implementation</li>
									<li>Penetration testing</li>
									<li>Security information and event management (SIEM)</li>
									<li>Identity and access management (IAM)</li>
									
									</ul>
									</div>
                                </div>
                           
                           
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

   -->
<?php include 'footer.php'; ?>