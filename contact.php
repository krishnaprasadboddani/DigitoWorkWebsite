   <?php include 'header.php'; ?>

   <!--Page Title-->
   <section class="page-title" style="background-image:url(images/background/2.jpg)">
       <div class="auto-container">
           <h2 style="text-align:center;color:white">We’d love to hear from you</h2>

       </div>
   </section>
   <!--End Page Title-->

   <?php

    include('dbcon.php');


    $result = mysqli_query($con, "SELECT * FROM contact");
    while ($row = mysqli_fetch_assoc($result)) {


    ?>


       <!--Contact Page Info Section-->
       <div class="contact-page-info-section">

           <div class="auto-container">
               <div class="row clearfix">

                   <!--Info Column-->
                   <div class="info-column col-lg-6 col-md-12 col-sm-12">
                       <div class="inner-column">
                           <div class="sec-title">
                         
                               <h2>Get in Touch</h2>
                           </div>


                           <ul class="list-style-two">
                               <li><span class="icon fa fa-phone"></span>+91 830 939 6730</li>
                               <li><span class="icon fa fa-envelope"></span>sales@digitowork.com</li>
                               <li><span class="icon fa fa-clock-o"></span>Open Hours 09:00 am - 06:00 pm</li>
                               <li><span class="icon fa fa-map-marker"></span>Level 3, Plot No.264, <br/>Lotus Heights, Inani House,<br/>Behind D'Mart Lane, Madhapur, <br/>Hyderabad,Telangana, <br/> India 500033.  
</li>
                           </ul>
                           <ul class="social-icon-two">
                               <li class="follow">Follow us on : </li>
                               <li><a href="https://www.youtube.com/channel/UCaORXUUvEp5sm_dnRd9CGww"><span class="fa fa-youtube btn btn-danger"></span></a></li>
                               <li><a href="https://www.linkedin.com/company/digitowork/"><span class="fa fa-linkedin btn btn-info"></span></a></li>
                           </ul>
                       </div>
                   </div>

                   <!--Map Column-->
                   <div class="map-column col-lg-6 col-md-12 col-sm-12">
                       <div class="inner-column">
                           <div class="contact-form">
                               <form method="post" action="php4/contact.php" id="contact-form">
                                   <div class="row clearfix">
                                       <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                           <input type="text" name="name" value="" placeholder="Your Name" required>
                                       </div>

                                       <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                           <input type="email" name="email" value="" placeholder="Your Business Email" required>
                                       </div>
                                       <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                           <input type="text" name="phone" value="" placeholder="Phone Number" required>
                                       </div>
                                       <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                           <input type="text" name="subject" value="" placeholder="Subject" required>
                                       </div>
                                       <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                           <textarea name="message" placeholder="Your Message"></textarea>
                                       </div>

                                       <div class="form-group text-center col-lg-12 col-md-12 col-sm-12">
                                           <button type="submit" name="submit" class="theme-btn message-btn" style="color: white;">Send Message</button>
                                       </div>
                                   </div>
                               </form>
                           </div>
                           <!--End Contact Form-->


                       </div>
                   </div>

               </div>
           </div>
       </div>
       <!-- End Contact Page Info Section -->
       <!--Contact Form Section-->
       <section class="contact-page-info-section">
           <div class="map-column col-lg-12 col-md-12 col-sm-12">
               <div class="inner-column">
                   <!--Map Outer-->
                   <div class="map-outer">
                       <div class="map">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.309840117653!2d78.38146091435398!3d17.444878205737357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93e00f5c5ab7%3A0x64cd5411c783d6d!2sMelange%20Tower!5e0!3m2!1sen!2sin!4v1585202365482!5m2!1sen!2sin" width="100%" height="330" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   <?php
    }
    ?>
   <!--End Contact Form Section-->

   <?php include 'footer.php'; ?>
