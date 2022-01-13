         <?php include 'header.php'; ?>

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg)">
    	<div class="auto-container">
        	
           <h2 style="text-align:center;color:white">Blog</h2> 
          
        </div>
    </section>
   <?php

    include('dbcon.php');
$id=$_GET['id'];
$id=$level1;
    $result = mysqli_query($con, "SELECT * FROM bloger where url='$id'");
    $row = mysqli_fetch_assoc($result);
   


    ?>

      <section>
        <div class="container">
        <div class="row mt-5">
        <div class="col-md-8">
           <div class="card" >
                
                  <div class="card-body">
                 <h2 class="card-title text-center"><?php  echo $row['heading']; ?></h2>

                  <p><?php echo htmlspecialchars_decode( $row['description'], ENT_QUOTES); ?></p>
                <b>Posted By:<?php  echo $row['email']; ?> </b>
            </div>
          </div>
      </div>

       
        <div class="col-md-4">
           <div class="recent" style="padding: 10px;">
                
                 
                 <h5 class="card-title text-center" style="color:#fff;background: #000">Recent Post</h5>

                 <ul style="text-align:left; line-height: 40px;background: #d64141;color:#fff" >
                     <?php

include('dbcon.php');


$result = mysqli_query($con, "SELECT * FROM bloger ORDER BY id DESC");


 while ($row1 = mysqli_fetch_assoc($result)) { ?>


                  <li><i class="fa fa-arrow-circle-right"></i> <a href="<?php echo $row['url']; ?>; ?>" style="color:#000"><?php  echo $row1['heading']; ?></a></li>
                    <?php } ?>
                 </ul>

                 
               
          </div>
      </div>


</div>
      </div>
      </section>>
        
        
        
        
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
     
	 
    
      
 <?php include('footer.php') ?>
