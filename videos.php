         <?php include 'header.php'; ?>

	<!--Page Title-->
      <section class="page-title" style="background-image:url(images/background/2.jpg)">
       <div class="auto-container">
           <h4 style="text-align:center;color:white">Videos</h4>

       </div>
   </section>
   <!--End Page Title-->
<?php

include('dbcon.php');

$result = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");




?>

      <section>
        <div class="container">
        <div class="row mt-5">
		<div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/P2Y6tleXaSU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#"DigitoWork IT Asset Patch Management</a></h5>
                 </div>
            </div>
		</div>
		<div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/WLYJUZtqVto" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">DigitoWork IT Security Operations Center</a></h5>
                 </div>
            </div>
		</div>
		<div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/nEizLqCpxDc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">DigitoWork Data Loss Prevention</a></h5>
                 </div>
            </div>
		</div>		
		 <div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/rpjFuyQy3MU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">DigitoWork - Cyber Threat Intelligence</a></h5>
                 </div>
            </div>
          </div>
		 <div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/C2VX07IIum4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">DigitoWork IT Security Management Vulnerability Assessment & Penetration Testing (VAPT)</a></h5>
                 </div>
            </div>
          </div>
		
                       <div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/fdJKaz62bTg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">ITAM for Merger & Acquisition</a></h5>
                
            </div>
          </div>
      </div>
              <div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/KB3JR1sU-QI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">DigitoWork GRIT - Delivery Excellence</a></h5>
                
            </div>
          </div>
      </div>
              <div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/dHhxkne6bmc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">ITAM Software Reconciliation by Digitowork</a></h5>
                
            </div>
          </div>
      </div>
              <div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/T_PAI6RJ0vs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">ITAM Life Cycle Management</a></h5>
                
            </div>
          </div>
      </div>
              <div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/1wFjT-_YyFs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">DigitoWork IT Software Compliance</a></h5>
                
            </div>
          </div>
      </div>
              <div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/t4qXABJBgrU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">DigitoWork IT Security Management</a></h5>
                
            </div>
          </div>
      </div>
              <div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/KdeTRn0dg4U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">Digitowork ITSM</a></h5>
                
            </div>
          </div>
      </div>
              <div class="col-md-4">
           <div class="card" >
                <iframe width="350" height="315" src="https://www.youtube.com/embed/E6hfPv4X6oA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <div class="card-body">
                 <h5 class="card-title text-center"><a href="#">ITAM Digitowork</a></h5>
                
            </div>
          </div>
      </div>
      
     
      
      
      
      

       
      


</<div>
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
