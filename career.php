         <?php include 'header.php'; ?>

	<!--Page Title-->
   
     <section class="page-title" style="background-image:url(images/background/2.jpg)">
       <div class="auto-container">
           <h4 style="text-align:center;color:white">Grow With Us</h4>

       </div>
   </section>
    <!--End Page Title-->
    
    <!-- Inner Heading End --> 
 <section class="pad_topm">
        	<div class="container">
        		<div class="positions blog_title" style="text-align: center;">
        		<!-- <h2>Career Development</h2> -->
        	</div>
        	<br>
        	<?php

  include('dbcon.php');


  $result = mysqli_query($con, "SELECT * FROM career_cms");
  while ($row = mysqli_fetch_assoc($result)) {


  ?>
        		<div class="row">
        			<div class="col-lg-4">
        				<div class="h_blog_item">
        					<div class="blog_img"><img class="img-fluid" src="images/career/<?php echo $row['image1']; ?>" alt="" style="width:590px; height:330px"></div>
        					<div class="blog_text">
        						<h6><?php echo $row['p1']; ?></h6>
        						<p style="text-align:center"><?php echo $row['p2']; ?></p>
								<div class="row">
							 <div class="col-lg-2"></div>
							 <div class="col-lg-6" style="margin-left: 17px;text-align: center;">
							     
							<a class="product_btn cbtns" href="fresherform.php" target="_blank">Apply Now</a>
							 </div>
							 <div class="col-lg-4"></div>
							    </div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="h_blog_item">
        					<div class="blog_img"><img class="img-fluid" src="images/career/<?php echo $row['image2']; ?>" alt=""style="width:590px; height:330px"></div>
        					<div class="blog_text">
        						<h6><?php echo $row['p3']; ?></h6>
        						<p style="text-align:center"><?php echo $row['p4']; ?></p>
								<div class="row">
							 <div class="col-lg-2"></div>
							 <div class="col-lg-6" style="margin-left: 17px;text-align: center;">
							<a class="product_btn cbtns" href="intern.php" target="_blank">Apply Now</a>
							 </div>
							 <div class="col-lg-4"></div>
							    </div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="h_blog_item">
        					<div class="blog_img"><img class="img-fluid" src="images/career/<?php echo $row['image3']; ?>" alt="" style="width:590px; height:330px"></div>
        					<div class="blog_text">
        						<h6><?php echo $row['p5']; ?></h6>
        						<p style="text-align:center"><?php echo $row['p6']; ?></p>
								<div class="row">
							 <div class="col-lg-2"></div>
							 <div class="col-lg-6" style="margin-left: 17px;text-align: center;">
							<a class="product_btn cbtns" href="experienceform.php" target="_blank" style"text-align:center">Apply Now</a>
							 </div>
							 <div class="col-lg-4"></div>
							    </div>
        					</div>
        				</div>
        			</div>
        		</div>
        		<?php 
  }
  ?>
        	</div>
        </section>
        
        
        <section class="pad_topm">
        	<div class="container">
        		<div class="positions blog_title" style="text-align: center;">
        		<h2>Open Positions</h2>
        	</div>
        		
        		<div class="positions">
        				
						<div class="accordion" id="accordionExample">
						    <?php
        	            include ('dbcon.php');
        	            $get_all_data_q = "select * from career where status = 'Enable' ";
        	            $get_all_data_data = mysqli_query($con, $get_all_data_q);
        	            while($get_all_data_result=mysqli_fetch_assoc($get_all_data_data))
        	            {
        	            ?>
						    <div class="card tm">
								<div class="card-header tbm" id="<?php echo $get_all_data_result['one']; ?>">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#<?php echo $get_all_data_result['two']; ?>" aria-expanded="false" aria-controls="<?php echo $get_all_data_result['two']; ?>">
										<?php echo $get_all_data_result['heading']; ?>
										<i class="fa fa-caret-right" aria-hidden="true"></i>
									</button>
								</div>
								<div id="<?php echo $get_all_data_result['two']; ?>" class="collapse" aria-labelledby="<?php echo $get_all_data_result['one']; ?>" data-parent="#accordionExample">
									<div class="card-body">
									    <h5>Description:</h5>
										<p><?php echo $get_all_data_result['description']; ?></p>
										<h5>Skill set:</h5>
										<p><?php echo $get_all_data_result['description1']; ?></p>
										<h5>Roles & Responsibilities:</h5>
										<p><?php echo $get_all_data_result['description2']; ?></p>
										<h5>Technology track:</h5>
										<p><?php echo $get_all_data_result['description3']; ?></p>
										<h5>Experience:</h5>
										<p><?php echo $get_all_data_result['description4']; ?></p>
										<a class="product_btn cbtns" href="experienceform.php">Apply Now</a>
									</div>
								</div>
							</div>
							<?php
							}
							?>
						</div>
        			</div>

        	</div>
        </section>
        
        <style>
        
svg:not(:root) {
  overflow: hidden;
}

.main-wrapper {
  max-width: 1170px;
  margin: 0 auto;
  text-align: center;
}

.upload-main-wrapper {
  width: 210px;
  margin: 0 auto;
}

#file-upload-name {
  margin: 4px 0 0 0;
  font-size: 12px;
}

.upload-wrapper {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  margin: 0px auto 0;
  position: relative;
  cursor: pointer;
  background-color: #9e1b1b;
  padding: 8px 10px;
  border-radius: 10px;
  overflow: hidden;
  transition: 0.2s linear all;
  color: #ffffff;
}

.upload-wrapper input[type="file"] {
  width: 100%;
  position: absolute;
  left: 0;
  right: 0;
  opacity: 0;
  top: 0;
  bottom: 0;
  cursor: pointer;
  z-index: 1;
}

.upload-wrapper > svg {
  width: 50px;
  height: auto;
  cursor: pointer;
}

.upload-wrapper.success > svg {
  transform: translateX(-200px);
}

.upload-wrapper.uploaded {
  transition: 0.2s linear all;
  width: 60px;
  border-radius: 50%;
  height: 60px;
  text-align: center;
}

.upload-wrapper .file-upload-text {
  position: absolute;
  left: 80px;
  opacity: 1;
  visibility: visible;
  transition: 0.2s linear all;
  font-weight: 600;
}

.upload-wrapper.uploaded .file-upload-text {
  text-indent: -999px;
  margin: 0;
}

.file-success-text {
  opacity: 0;
  transition: 0.2s linear all;
  visibility: hidden;
  transform: translateX(200px);
  position: absolute;
  left: 0;
  right: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}

.file-success-text svg {
  width: 25px;
  height: auto;
}

.file-success-text span {
  margin-left: 15px;
}

.upload-wrapper.success .file-success-text {
  opacity: 1;
  visibility: visible;
  transform: none;
}

.upload-wrapper.success.uploaded .file-success-text {
  opacity: 1;
  visibility: visible;
  transform: none;
}

.upload-wrapper.success.uploaded .file-success-text span {
  display: none;
}

.upload-wrapper .file-success-text circle {
  stroke-dasharray: 380;
  stroke-dashoffset: 380;
  transition: 1s linear all;
  transition-delay: 1.4s;
}

.upload-wrapper.success .file-success-text circle {
  stroke-dashoffset: 0;
}

.upload-wrapper .file-success-text polyline {
  stroke-dasharray: 380;
  stroke-dashoffset: 380;
  transition: 1s linear all;
  transition-delay: 2s;
}

.upload-wrapper.success .file-success-text polyline {
  stroke-dashoffset: 0;
}

.upload-wrapper.success .file-upload-text {
  -webkit-animation-name: bounceOutLeft;
  animation-name: bounceOutLeft;
  -webkit-animation-duration: 0.2s;
  animation-duration: 0.2s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0);
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }
}
@keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0);
  }
  to {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0);
  }
}

/*star*/
.form-group {
  position: relative;
}
.form-group .palceholder {
  position: absolute;
  top: 9.5px;
  left: 8px;
  color: #B1B1B1;
  display: none;
}
.form-group label {
  font-weight: normal;
  color: #B1B1B1;
}
.form-group .star {
  color: red;
}
/*end star*/

select {
  font-size: 13px;
}
            </style>
     
	 
    
      
 <?php include 'footer1.php'; ?>
