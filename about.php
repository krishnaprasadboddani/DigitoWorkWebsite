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
   
   <div id="getsitecontrol">
   <style>/* stylelint-disable */@font-face{font-family:emoji;src:local('Apple Color Emoji'),local('Android Emoji'),local('Segoe UI'),local(EmojiSymbols),local(Symbola);
  /* Emoji unicode blocks */unicode-range:U+1F300-1F5FF,U+1F600-1F64F,U+1F680-1F6FF,U+2600-26FF}@media print{#getsitecontrol{display:none!important}}#getsitecontrol{all:initial!important;contain:style size!important;direction:ltr!important;margin:0!important;padding:0!important;border:0!important;box-sizing:border-box!important;box-shadow:none!important;background-clip:padding-box!important;line-height:1.2!important;vertical-align:middle!important;text-align:left!important;font-weight:normal!important;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif!important;font-style:normal!important;letter-spacing:normal!important;text-shadow:none!important;text-transform:none!important;float:none!important;z-index:2147483635!important;-webkit-font-smoothing:subpixel-antialiased!important;-webkit-tap-highlight-color:rgba(0,0,0,0)!important;filter:none!important}#getsitecontrol *,
#getsitecontrol *:before,
#getsitecontrol *:after{box-sizing:inherit!important}#getsitecontrol span,
#getsitecontrol a,
#getsitecontrol form,
#getsitecontrol label,
#getsitecontrol div,
#getsitecontrol u,
#getsitecontrol i,
#getsitecontrol em,
#getsitecontrol b,
#getsitecontrol strong,
#getsitecontrol p,
#getsitecontrol h1,
#getsitecontrol ul,
#getsitecontrol ol,
#getsitecontrol li,
#getsitecontrol img{margin:0!important;padding:0!important;border:0!important;border-radius:0!important;vertical-align:baseline!important;
  /*text-align: left;*/width:auto!important;height:auto!important;min-width:auto!important;min-height:auto!important;max-width:none!important;max-height:none!important;text-shadow:none!important;box-shadow:none!important;font-family:inherit!important;line-height:inherit!important;letter-spacing:normal!important;color:inherit!important;background-color:transparent!important;position:static!important;font-size:inherit!important;font-weight:inherit!important;font-style:inherit!important;text-transform:inherit!important;text-decoration:inherit!important;text-align:inherit!important;float:none!important;outline:none!important;-webkit-tap-highlight-color:rgba(0,0,0,0)!important}#getsitecontrol a,
#getsitecontrol a:focus,
#getsitecontrol a:active{-webkit-tap-highlight-color:rgba(0,0,0,0)!important;text-decoration:none!important}#getsitecontrol img{display:block!important}#getsitecontrol .getsitecontrol-html{vertical-align:baseline!important;line-height:1.35!important}#getsitecontrol .getsitecontrol-html b,
#getsitecontrol .getsitecontrol-html strong{font-weight:bold!important}#getsitecontrol .getsitecontrol-html i,
#getsitecontrol .getsitecontrol-html em{font-style:italic!important}#getsitecontrol .getsitecontrol-html u{text-decoration:underline!important}#getsitecontrol .getsitecontrol-html p{margin:0 0 8px 0!important}#getsitecontrol .getsitecontrol-html a{text-decoration:underline!important}#getsitecontrol .getsitecontrol-html.getsitecontrol-html-inline{display:inline!important;white-space:nowrap!important;margin:0!important;padding:0!important}#getsitecontrol .getsitecontrol-html.getsitecontrol-html-inline *{white-space:nowrap!important;display:inline!important;margin:0!important;padding:0!important}#getsitecontrol ::-webkit-input-placeholder{color:inherit!important;text-overflow:ellipsis!important;opacity:1;overflow:hidden!important;white-space:nowrap!important;vertical-align:middle!important;font-size:inherit!important;text-align:inherit!important;font-weight:normal!important;position:static!important}#getsitecontrol :-moz-placeholder,
#getsitecontrol ::-moz-placeholder{color:inherit!important;text-overflow:ellipsis!important;opacity:1;overflow:hidden!important;white-space:nowrap!important;vertical-align:middle!important;font-size:inherit!important;text-align:inherit!important;font-weight:normal!important;position:static!important}#getsitecontrol input:-ms-input-placeholder{color:inherit!important;text-overflow:ellipsis!important;opacity:1;overflow:hidden!important;white-space:nowrap!important;vertical-align:middle!important;font-size:inherit!important;text-align:inherit!important;font-weight:normal!important;position:static!important}#getsitecontrol [placeholder]{text-overflow:ellipsis!important}#getsitecontrol input::-moz-placeholder,
#getsitecontrol input:-moz-placeholder,
#getsitecontrol input:-ms-input-placeholder{text-overflow:ellipsis!important}#getsitecontrol input,
#getsitecontrol button{-webkit-appearance:none!important;appearance:none!important}#getsitecontrol input,
#getsitecontrol input:focus,
#getsitecontrol textarea,
#getsitecontrol textarea:focus,
#getsitecontrol select,
#getsitecontrol select:focus{margin:0!important;padding:0!important;border:0!important;text-align:left!important;border-radius:0!important;background:none!important;vertical-align:middle!important;width:auto!important;height:auto!important;min-width:0!important;min-height:0!important;max-width:none!important;max-height:none!important;text-shadow:none!important;box-shadow:none!important;font-family:inherit!important;background-clip:padding-box!important;line-height:1!important;letter-spacing:normal!important;outline:0 none!important;font-size:inherit!important;float:none!important}#getsitecontrol a,
#getsitecontrol a *,
#getsitecontrol input[type='submit'],
#getsitecontrol input[type='button'],
#getsitecontrol input[type='radio'],
#getsitecontrol input[type='checkbox'],
#getsitecontrol select,
#getsitecontrol button{cursor:pointer!important}#getsitecontrol button,
#getsitecontrol input[type='submit']{margin:0!important;padding:0!important;border:0!important;background:none!important;width:auto!important;height:auto!important;text-shadow:none!important;box-shadow:none!important;font-family:inherit!important;font-size:inherit!important;line-height:1!important;letter-spacing:normal!important;float:none!important;font-weight:bold!important;outline:initial!important}#getsitecontrol svg{cursor:inherit!important;color:currentColor!important;fill:none!important;stroke:currentcolor!important}#getsitecontrol textarea{line-height:1.2!important;overflow:auto!important;resize:none!important}#getsitecontrol input:-webkit-autofill,
#getsitecontrol textarea:-webkit-autofill,
#getsitecontrol select:-webkit-autofill{background-color:transparent!important;-webkit-box-shadow:0 0 0 1000px white inset!important}#getsitecontrol *{filter:none!important}#getsitecontrol label,
#getsitecontrol button,
#getsitecontrol button:focus,
#getsitecontrol button:active,
#getsitecontrol button:hover,
#getsitecontrol span,
#getsitecontrol div,
#getsitecontrol input,
#getsitecontrol textarea,
#getsitecontrol a,
#getsitecontrol input:focus,
#getsitecontrol input:active,
#getsitecontrol textarea:focus,
#getsitecontrol textarea:active,
#getsitecontrol a:focus,
#getsitecontrol a:hover,
#getsitecontrol a:active{color:inherit!important}#getsitecontrol b{font-weight:bold!important}#getsitecontrol u{text-decoration:underline!important}#getsitecontrol i{font-style:italic!important}</style><div><style>:root{-webkit-text-size-adjust:100%!important}#getsitecontrol #getsitecontrol56507{-webkit-text-size-adjust:100%!important;z-index:2147483635!important;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif!important;font-size:16px!important}#getsitecontrol #getsitecontrol56507{position:fixed!important;width:95%!important;max-width:400px!important;min-height:0!important;left:0!important;right:0!important;bottom:10px!important;margin:0 auto!important}@media screen and (min-width: 960px){#getsitecontrol #getsitecontrol56507{width:95%!important;max-width:400px!important;left:32px!important;right:auto!important;bottom:32px!important;margin:0!important}}#getsitecontrol #getsitecontrol56507 .getsitecontrol-container{position:relative!important;overflow:visible!important;border-radius:8px!important;padding-top:170px!important;padding-right:40px!important;padding-bottom:40px!important;padding-left:40px!important;background-image:none!important;background-repeat:no-repeat!important;background-size:initial!important;background-position:initial!important;background-color:#2b3cb7!important;color:rgba(255,255,255,1)!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-back,
#getsitecontrol #getsitecontrol56507 .getsitecontrol-close,
#getsitecontrol #getsitecontrol56507 .getsitecontrol-caret{padding:20px!important;position:absolute!important;z-index:1!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-back{padding-right:10px!important;top:0!important;right:41px!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-close{top:0!important;right:0!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-back +  .getsitecontrol-close{padding-left:10px!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-content{position:relative!important;display:flex!important;flex-direction:column!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-title,
#getsitecontrol #getsitecontrol56507 .getsitecontrol-description{margin-bottom:20px!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-note{margin-top:20px!important}
#getsitecontrol #getsitecontrol56507 .getsitecontrol-title{white-space:normal!important;overflow-wrap:break-word!important;word-wrap:break-word!important;word-break:normal!important;color:rgba(255,255,255,1)!important;font-weight:bold!important;cursor:inherit!important}
#getsitecontrol #getsitecontrol56507 .getsitecontrol-title{font-size:20px!important;line-height:1.4!important}
#getsitecontrol #getsitecontrol56507 .getsitecontrol-title a{vertical-align:baseline!important;text-decoration:underline!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-description{white-space:normal!important;overflow-wrap:break-word!important;word-wrap:break-word!important;word-break:normal!important;line-height:1.5!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-description a{vertical-align:baseline!important;text-decoration:underline!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-form{display:flex!important;flex-direction:column!important;flex-wrap:nowrap!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-fields{width:100%!important;display:flex!important;flex-direction:column!important;margin-bottom:20px!important}
#getsitecontrol #getsitecontrol56507 .getsitecontrol-field{width:100%!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-field + .getsitecontrol-field{margin:16px 0 0 0!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-text{width:100%!important;max-width:100%!important;line-height:1.5!important;border:solid 1px transparent!important;padding:11px 15px!important;color:rgba(255,255,255,1)!important;border-radius:4px!important;background:rgba(255,255,255,0.15)!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-text::placeholder{color:rgba(255,255,255,0.5)!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-buttons{display:flex!important;flex-direction:row!important;
  flex-wrap:wrap!important
  }#getsitecontrol #getsitecontrol56507 .getsitecontrol-buttons .getsitecontrol-button.getsitecontrol-icon{flex-shrink:0!important;flex-grow:0!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-primary{color:rgba(24,24,24,1)!important;background:rgba(255,255,255,1)!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-primary:hover,
#getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-primary:focus,
#getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-primary:active{background:rgba(242,242,242,1)!important;color:rgba(24,24,24,1)!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-button{text-decoration:none!important;display:block!important;border:solid 1px transparent!important;white-space:nowrap!important;outline:0!important;font-family:inherit!important;font-weight:bold!important;border-radius:4px!important;transition:background-color 0.2s ease-out!important;line-height:1.5!important;padding:11px 23px!important;position:relative!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-button > span{display:block!important;word-wrap:normal!important;overflow:hidden!important;text-overflow:ellipsis!important;white-space:nowrap!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-button > *{min-width:0!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-button::-moz-focus-inner{padding:0!important;border:0!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-button:hover,
#getsitecontrol #getsitecontrol56507 .getsitecontrol-button:focus,
#getsitecontrol #getsitecontrol56507 .getsitecontrol-button:active,
#getsitecontrol #getsitecontrol56507 .getsitecontrol-button:disabled{outline:0!important;text-decoration:none!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-close{color:inherit!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-close::before{display:block!important;content:''!important}#getsitecontrol #getsitecontrol56507 .getsitecontrol-close::before{width:11px!important;height:11px!important;background-image:url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="rgba(0,0,0,1)" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M1.458 1.458l21.084 21.084m0-21.084L1.458 22.542" /></svg>')!important;background-position:center!important;background-repeat:no-repeat!important;transform-origin:center center;transition:transform 300ms,opacity 200ms!important;opacity:0.5}#getsitecontrol #getsitecontrol56507 .getsitecontrol-close:hover::before{opacity:1;transform:rotate(90deg)}@import url('https://fonts.googleapis.com/css?family=Sora:400,700,900&display=swap');
@keyframes getsitecontrol-getsitecontrol56507-slide-in-bottom {
	0% {
    transform: translateY(150%);
  }
  100% {
    transform: translateY(0);
  }
}
@keyframes getsitecontrol-getsitecontrol56507-slide-out-bottom {
	0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(150%);
  }
}
@keyframes getsitecontrol-getsitecontrol56507-shake {
	100% {
    transform: none;
  }
  0%,
  99% {
    transform: translate(0, 0);
  }
  20% {
    transform: translateX(-10px);
  }
  60% {
    transform: translateX(-5px);
  }
  40% {
    transform: translateX(10px);
  }
  80% {
    transform: translateX(5px);
  }
}
@keyframes getsitecontrol-getsitecontrol56507-sent-backdrop {
	0%,
  100% {
    opacity: 0;
    background-color: rgba(15, 15, 15, 0);
  }
  50%,
  75% {
    opacity: 0.6;
    background-color: #0f0f0f;
  }
}
@keyframes getsitecontrol-getsitecontrol56507-success-icon-scale {
	0% {
    opacity: 0;
    transform: translate(-50%, -50%) scale(0.8);
  }
  50% {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
  }
  75% {
    opacity: 1;
    transform: translate(-50%, -50%) scale(1);
  }
  100% {
    opacity: 0;
    transform: translate(-50%, -50%) scale(0.2);
  }
}
@keyframes getsitecontrol-getsitecontrol56507-success-icon-show-path {
	0% {
    opacity: 0;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes getsitecontrol-getsitecontrol56507-success-icon-draw-circle {
	0% {
    opacity: 1;
    stroke-dashoffset: 150.72;
  }
  25% {
    opacity: 1;
    stroke-dashoffset: 75.36;
  }
  50% {
    opacity: 1;
    stroke-dashoffset: 0;
  }
  100% {
    opacity: 0;
    stroke-dashoffset: 0;
  }
}
@keyframes getsitecontrol-getsitecontrol56507-success-icon-draw-check {
	0% {
    opacity: 1;
    stroke-dashoffset: 36;
  }
  25% {
    opacity: 1;
    stroke-dashoffset: 18;
  }
  50% {
    opacity: 1;
    stroke-dashoffset: 0;
  }
  100% {
    opacity: 0;
    stroke-dashoffset: 0;
  }
}
#getsitecontrol #getsitecontrol56507 {
	left: 0!important ;
	right: 0!important ;
	bottom: 10px!important ;
	margin: 0 auto!important ;

}

@media (min-width: 960px) {
	#getsitecontrol #getsitecontrol56507 {
		left: auto!important ;
	right: 32px!important ;
	bottom: 32px!important ;
	margin: 0!important ;

	}

}
#getsitecontrol #getsitecontrol56507 .getsitecontrol-buttons {
	flex-flow: column!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-container {
	font-family: Sora, "Helvetica Neue", Helvetica, Arial, sans-serif!important ;
	box-shadow: 0 11px 32px -5px rgba(54, 61, 77, 0.15)!important ;

}

@media (min-width: 960px) {
	#getsitecontrol #getsitecontrol56507 .getsitecontrol-container {
		box-shadow: 0 10px 24px 0 rgba(54, 61, 77, 0.15)!important ;

	}

}
#getsitecontrol #getsitecontrol56507 .getsitecontrol-title {
	font-weight: 900!important ;
	font-size: 20px!important ;
	line-height: 1.3333!important ;
	margin-bottom: 10px!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-description {
	font-size: 16px!important ;
	margin-bottom: 24px!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-no-fields .getsitecontrol-form {
	margin-top: 8px!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-fields {
	margin-bottom: 32px!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-field + .getsitecontrol-field {
	margin: 24px 0 0 0!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-field-title {
	margin: 0 0 12px 0!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-radio .getsitecontrol-field-title, #getsitecontrol #getsitecontrol56507 .getsitecontrol-checkbox .getsitecontrol-field-title {
	margin: 0 0 16px 0!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-buttons {
	margin: -6px!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-buttons .getsitecontrol-button {
	margin: 6px!important ;
	border-radius: 6px!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-normal, #getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-normal.getsitecontrol-icon {
	font-weight: normal!important ;
	background-color: transparent!important ;
	border-color: rgba(255, 255, 255, 0.1)!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-normal:hover, #getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-normal.getsitecontrol-icon:hover, #getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-normal:focus, #getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-normal.getsitecontrol-icon:focus {
	border-color: #ffffff!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-secondary, #getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-secondary.getsitecontrol-icon {
	padding-left: 0!important ;
	padding-right: 0!important ;
	color: rgba(255, 255, 255, 0.3)!important ;
	background-color: transparent!important ;
	font-weight: normal!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-secondary:hover, #getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-secondary.getsitecontrol-icon:hover, #getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-secondary:focus, #getsitecontrol #getsitecontrol56507 .getsitecontrol-button.getsitecontrol-secondary.getsitecontrol-icon:focus {
	color: rgba(255, 255, 255, 0.7)!important ;
	background-color: transparent!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-text, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-textarea, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-select {
	border: none!important ;
	border-bottom: solid 1px rgba(255, 255, 255, 0.25)!important ;
	border-radius: 0!important ;
	background-color: transparent!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-text::placeholder, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-textarea::placeholder, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-select::placeholder {
	color: rgba(255, 255, 255, 0.3)!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-text:hover, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-textarea:hover, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-select:hover, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-text:focus, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-textarea:focus, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-select:focus {
	border-color: rgba(255, 255, 255, 0.7)!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-text {
	padding: 0 0 11px 0!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-textarea {
	padding: 0!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-select select {
	padding: 0 24px 11px 0!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-select:after {
	top: 8px!important ;
	transform: none!important ;
	right: 0!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label {
	margin-bottom: 20px!important ;
	border-radius: 4px!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label span {
	padding-left: 36px!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label span:before {
	width: 24px!important ;
	height: 24px!important ;
	top: 0!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label input[type='radio'] + span:before, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label input[type='checkbox'] + span:before {
	background-color: transparent!important ;
	border: 1px solid rgba(255, 255, 255, 0.25)!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label input[type='radio'] + span:after, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label input[type='checkbox'] + span:after {
	left: 4px!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label input[type='radio']:checked + span:after, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label input[type='checkbox']:checked + span:after {
	left: 4px!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label:hover input[type='radio'] + span:before, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label:focus input[type='radio'] + span:before, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label:hover input[type='checkbox'] + span:before, #getsitecontrol #getsitecontrol56507 .getsitecontrol-input-check label:focus input[type='checkbox'] + span:before {
	border-color: #ffffff!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-input-rating label {
	width: 40px!important ;
	height: 32px!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-note {
	margin: 32px 0 0 0!important ;
	color: rgba(255, 255, 255, 0.3)!important ;

}

#getsitecontrol #getsitecontrol56507.getsitecontrol-enter {
	animation: getsitecontrol-getsitecontrol56507-slide-in-bottom 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94) both!important ;

}

#getsitecontrol #getsitecontrol56507.getsitecontrol-leave {
	animation: getsitecontrol-getsitecontrol56507-slide-out-bottom 0.35s cubic-bezier(0.25, 0.46, 0.45, 0.94) both!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-form.getsitecontrol-submit .getsitecontrol-invalid {
	animation: getsitecontrol-getsitecontrol56507-shake 600ms!important ;

}

#getsitecontrol #getsitecontrol56507.getsitecontrol-form-sending .getsitecontrol-content:before {
	content: ''!important ;
	display: block!important ;
	position: absolute!important ;
	top: 0!important ;
	right: 0!important ;
	bottom: 0!important ;
	left: 0!important ;
	z-index: 1!important ;
	animation: getsitecontrol-getsitecontrol56507-sent-backdrop 2s both!important ;

}

#getsitecontrol #getsitecontrol56507.getsitecontrol-form-sending .getsitecontrol-content .getsitecontrol-success-icon {
	display: block!important ;
	width: 100%!important ;
	height: 100%!important ;
	animation: getsitecontrol-getsitecontrol56507-success-icon-scale 1.8s linear both!important ;

}

#getsitecontrol #getsitecontrol56507.getsitecontrol-form-sending .getsitecontrol-content .getsitecontrol-success-icon path {
	animation: getsitecontrol-getsitecontrol56507-success-icon-show-path 1.2s linear both!important ;

}

#getsitecontrol #getsitecontrol56507.getsitecontrol-form-sending .getsitecontrol-content .getsitecontrol-success-icon circle {
	animation: getsitecontrol-getsitecontrol56507-success-icon-draw-circle 1.2s linear both!important ;

}

#getsitecontrol #getsitecontrol56507.getsitecontrol-form-sending .getsitecontrol-content .getsitecontrol-success-icon polyline {
	animation: getsitecontrol-getsitecontrol56507-success-icon-draw-check 1.2s linear both!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-body {
	overflow: scroll!important ;
	max-height: 57vh!important ;
	box-shadow: 0 11px 32px 5px rgba(54, 61, 77, 0.15)!important ;

}

#getsitecontrol #getsitecontrol56507 .getsitecontrol-body::-webkit-scrollbar {
	width: 0!important ;
	height: 0!important ;

}

@media screen and (min-width: 960px) {
	#getsitecontrol #getsitecontrol56507 .getsitecontrol-body {
		max-height: 53vh!important ;

	}

}
@media (max-width: calc(960px - 1px)) {
	#getsitecontrol #getsitecontrol56507 .getsitecontrol-title {
		font-size: 20px!important ;
	line-height: 32px!important ;

	}

}</style>
<div role="dialog" id="getsitecontrol56507" class="getsitecontrol-page-1 getsitecontrol-page-first" style=""><div class="getsitecontrol-container"><div class="getsitecontrol-images"><img src="images/white.png" class="getsitecontrol-image" style="position: absolute !important; object-fit: cover !important; object-position: 50% 100% !important; left: 0px !important; top: 0px !important; width: 100% !important; height: 135px !important;"><img src="images/logo.png" class="getsitecontrol-image" style="position: absolute !important; object-fit: contain !important; object-position: 50% 50% !important; left: 50% !important; transform: translateX(-50%) !important; top: -20px !important; width: 130px !important; height: 118px !important;"></div><div class="getsitecontrol-body"><div class="getsitecontrol-content getsitecontrol-no-label"><h3 class="getsitecontrol-title">Explore how DigitoWork helps to manage End to End IT Asset Management.</h3>
<form novalidate="" class="getsitecontrol-form getsitecontrol-valid getsitecontrol-pristine" method="post" action="php4/email.php"><div class="getsitecontrol-fields"><div class="getsitecontrol-field getsitecontrol-email getsitecontrol-first getsitecontrol-last getsitecontrol-valid"><input id="email" class="getsitecontrol-input-text" required="" type="email" name="email" placeholder="Enter your email"></div></div><div class="getsitecontrol-buttons"><button type="submit" name="submit" class="getsitecontrol-button getsitecontrol-primary"><span>Submit</span></button></div></form></div></div><button type="button" class="getsitecontrol-close" onclick="displayDate()"></button></div></div></div></div>
<script>
function displayDate() {
 
 document.getElementById("getsitecontrol56507").style.display = 'none';
  
}  
</script>
<?php include 'footer.php'; ?>
