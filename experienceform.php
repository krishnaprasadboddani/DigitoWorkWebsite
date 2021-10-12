<?php include 'header.php';?>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/2.jpg)">
       <div class="auto-container">
           <h4 style="text-align:center;color:white">Achieve Goals</h4>

       </div>
   </section>
    <!--End Page Title-->

       <!--================End Career Area =================-->
<section class="career_area p_30">
<div class="container">
    <div class="container-inner">
    	<div class="positions" style="text-align: center;">
        	<!-- <h3>Fill form to apply</h3> -->
        	<h2 style="text-align:center">Experienced Professionals Form</h2>
        </div>
		<section class="get_touch_form_area contact_page p_30" style="
    margin-top: -46px;
">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-12">
        				<form class="row call_back_form" action="php/contact.php" method="post" id="contactForm" enctype="multipart/form-data" >
							<div class="form-group col-lg-4">
							    <label for="name">First Name</label>
					            <span class="star">*</span>
							<div class="form-group name-group">
					          <!--<div class="palceholder">
					            <label for="name">First Name</label>
					          </div> -->
         
								<input type="text" class="form-control" onkeypress="return (event.charCode > 64 && 
								event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" id="name" name="name" placeholder="First Name" required>
														</div>
											</div>
												<div class="form-group col-lg-4">
												    <label for="name">Middle Name</label>
							<div class="form-group name-group">
					          <!--<div class="palceholder">
					            <label for="name">Middle Name</label>
					          </div> -->
													<input type="text" class="form-control" onkeypress="return (event.charCode > 64 && 
						event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" id="name" name="middlename" placeholder="Middle Name" >
												</div>
											</div>
												<div class="form-group col-lg-4">
												    <label for="name">Last Name</label>
					            <span class="star">*</span>
							<div class="form-group name-group">
					          <!--<div class="palceholder">
					            <label for="name">Last Name</label>
					          </div> -->
							<input type="text" class="form-control" onkeypress="return (event.charCode > 64 && 
						event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" id="name" name="lastname" placeholder="Last Name" required >
												</div>
						</div>
							<div class="form-group col-lg-6">
							    <label>Date of Birth <span class="star">*</span></label>
								<!--<input type="text" class="form-control input-lg js-date--west" id="dobUk" name="dateofbirth" placeholder="DD/MM/YYYY" required >-->
								
								<input type="date" class="form-control" name="dateofbirth" placeholder="DD/MM/YYYY" required >
								
							</div>
							<div class="form-group col-lg-6">
							    <label>Gender <span class="star">*</span></label>
								<select class="discuss" name="gender" style="display: block;" >
								<option value="">--Select Gender--</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="Denial to Disclose">Denial to Disclose</option>
								</select>
							</div>
							<div class="form-group col-lg-6">
								<label>Enter your email ID carefully as it will be used for all communications from Digitowork</label> <span class="star">*</span>
		<div class="form-group name-group">
          <!--<div class="palceholder">
            <label for="name">Email Id</label>
           
          </div> -->
								<input type="email" class="form-control" pattern=".+@gmail.com" id="email" name="email" placeholder="Email Id" required >
							</div>
						</div>
							<div class="form-group col-md-6">
								<label>Enter Mobile Number</label><span class="star">*</span>
			<div class="form-group name-group">
         <!-- <div class="palceholder">
            <label for="name">Mobile Number</label>
            
          </div>
								
							<!--	<input class="form-control" name="phone" type="tel" value=""  pattern="^\d{10}$" placeholder="format: xxxxxxxxxxx" id="example-datetime-local-input">-->
								<input type="text" name="phone"  class="form-control" onkeypress="return isNumber(event)" maxlength="10" placeholder="Mobile Number" required >
							</div>
						</div>
							<div class="form-group col-md-12 col-sm-4">
								<label>Academic background (Complete educational background starting from Class 10 till current) <span class="star">*</span></label>
				<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_fields">
							<tr>
								<td>
								     <label for="name">Degree/Qualification</label>
            <span class="star">*</span>
									<select class="discuss" name="qualification[]" style="display: block;" required >
    								<option value="">Degree/Qualification</option> 
    								<option value="tenth">Std 10th</option>
    								<option value="inter">Std 12th</option>
    								<option value="Diploma">Diploma</option>
    								<option value="Bachelor">Bachelor</option>
    								<option value="Post_Graduate">Post Graduate</option>
    								<option value="Master">Master</option>
    								<option value="Certificate">Certificate</option>
    								<option value="Post_Graduate_Diploma">Post Graduate Diploma</option>
    								<option value="Research">Research</option>
    								<option value="Others">Others</option>
									</select>
								</td>
								<td>
								     <label for="name">Course Name</label>
            <span class="star">*</span>
			<div class="form-group name-group">
         <!-- <div class="palceholder">
            <label for="name">Course Name</label>
          </div> -->
									<input type="text" class="form-control"  id="inputTextBox" name="coursename[]" placeholder="Course Name" required >
								</div>
								</td>
								<td>
								    <label for="name">Select Year of Passing</label>
            <span class="star">*</span>
								<select class="discuss" name="lal[]" style="display: block;" > 
								<option value="">Select Year of Passing <span class="star"></span></option> 
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<!--<option value="2020">2020</option>-->
								<!--<option value="2021">2021</option>-->
								<!--<option value="2022">2022</option>-->
								<!--<option value="2023">2023</option>-->
								<!--<option value="2024">2024</option>-->
								<!--<option value="2025">2025</option> -->
									</select>
								</td>
								<td>
								    <label for="name">Percentage / GPA</label>
            <span class="star">*</span>
		<div class="form-group name-group">
		    
			<!--<div class="palceholder">
            <label for="name">Percentage / GPA</label>
            
          </div> -->
									<input type="text" class="form-control" onkeypress="return Validate(event);" id="company" name="per[]" maxlength="4" placeholder="Percentage / GPA" required>
								</div>
								</td>
								<td><button type="button" name="add" id="adds" class="btn btn-success"><b> + </b></button></td>
							</tr>
						</table>	
							</div>
						</div>

							<!-- <div class="form-group col-md-6">
								<input type="text" class="form-control" id="" name="instname" placeholder="Institute Name">
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="company" name="university" placeholder="University">
							</div>

							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="company" name="qualification" placeholder="Qualification">
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="company" name="company" placeholder="Year of Passing (for highest qualification)">
							</div>
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="company" name="pom" placeholder="Percentage of Marks">
							</div> -->
							<div class="form-group col-md-6">
							    
								<label>Please mention 5 Critical Skills</label> 
            <span class="star">*</span>
								<textarea id="skills" class="form-control" name="critical" rows="1" placeholder="Skill (100 words)"></textarea>
							</div>
							<div class="form-group col-md-6">
								<label>Please mention 5 Primary Technologies</label> 
            <span class="star">*</span>
								<textarea id="skills" class="form-control" name="primarys" rows="1" placeholder="Technology (100 Words)"></textarea>
							</div>
							<div class="form-group col-md-6">
							     <label for="name">Current Location</label>
            <span class="star">*</span>
								<select class="discuss" name="cl" style="display: block;">
								<option value="">--Current Location --</option>
								<option value="Andhra_Pradesh">Andhra Pradesh</option>
								<option value="Arunachal_Pradesh">Arunachal Pradesh</option>
								<option value="Assam">Assam</option>
								<option value="Bihar">Bihar</option>
								<option value="Chhattisgarh">Chhattisgarh</option>
								<option value="Goa">Goa</option>
								<option value="Gujarat">Gujarat</option>
								<option value="Haryana">Haryana</option>
								<option value="Himachal_Pradesh">Himachal Pradesh</option>
								<option value="Jammu_and_Kashmir">Jammu and Kashmir</option>
								<option value="Jharkhand">Jharkhand</option>
								<option value="Karnataka">Karnataka</option>
								<option value="Kerala">Kerala</option>
								<option value="Madhya_Pradesh">Madhya Pradesh</option>
								<option value="Maharashtra">Maharashtra</option>
								<option value="Manipur">Manipur</option>
								<option value="Meghalaya">Meghalaya</option>
								<option value="Mizoram">Mizoram</option>
								<option value="Nagaland">Nagaland</option>
								<option value="Odisha">Odisha</option>
								<option value="Punjab">Punjab</option>
								<option value="Rajasthan">Rajasthan</option>
								<option value="Sikkim">Sikkim</option>
								<option value="Tamil_Nadu">Tamil Nadu</option>
								<option value="Telangana">Telangana</option>
								<option value="Tripura">Tripura</option>
								<option value="Uttar_Pradesh">Uttar Pradesh</option>
								<option value="Uttarakhand">Uttarakhand</option>
								<option value="West_Bengal">West Bengal</option>
								</select>
							</div>
							<div class="form-group col-md-6">
							    <label for="name">Preferred Location</label>
            <span class="star">*</span>
								<input type="text" class="form-control" id="currentcompanyexp" name="pl" placeholder="Preferred Location" required>
							</div>
							<!-- <div class="form-group col-md-6">
								<input type="text" class="form-control" id="company" name="totalexp" placeholder="Total Experience (in Year)">
							</div> -->
							
							<!-- <div class="form-group col-md-6">
								<input type="text" class="form-control" id="company" name="totalexp" placeholder="Company name">
								<input type="text" class="form-control" id="company" name="totalexp" placeholder="Start (MM/YY)">
								<input type="text" class="form-control" id="company" name="totalexp" placeholder="End (MM/YY)">
							</div> -->
							
							<div class="form-group col-md-12">
								<label>Total Experience <span class="star">*</span></label>
				<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_fielde">
							<tr>
								<td><input type="text" class="form-control" id="company" name="company_name[]" placeholder="Company name" required></td>
								<td><input type="text" class="form-control" id="company" name="start[]" placeholder="Start (MM/YY)" required></td>
								<td><input type="text" class="form-control" id="company" name="end[]" placeholder="End (MM/YY)" required></td>
								<td><input type="text" class="form-control" id="company" name="skills[]" placeholder="Skills" required></td>
								<td><input type="text" class="form-control" id="company" name="domain_experiece[]" placeholder="Domain Experiece" required></td>
								<td><button type="button" name="add1" id="adde" class="btn btn-success"><b> + </b></button></td>
							</tr>
						</table>	
							</div>
						</div>
							<!--<div class="form-group col-md-12">-->
							<!--	<select class="discuss" style="display: none;">-->
							<!--		<option value="1">Subject</option>-->
							<!--		<option value="2">Subject 02</option>-->
							<!--		<option value="3">Subject 03</option>-->
							<!--	</select><div class="nice-select discuss" tabindex="0"><span class="current">Subject</span><ul class="list"><li data-value="1" class="option selected">Subject</li><li data-value="2" class="option">Subject 02</li><li data-value="3" class="option">Subject 03</li></ul></div>-->
							<!--</div>-->
							<!--<div class="form-group col-md-12">-->
							<!--	<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>-->
							<!--</div>-->
							<div class="form-group col-md-6 ">
								<div class="upload-main-wrapper">
                <div class="upload-wrapper">
                        <input type="file" name="file" id="upload-file" required>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid meet" viewBox="224.3881704980842 176.8527621722847 221.13266283524905 178.8472378277154" width="221.13" height="178.85"><defs><path d="M357.38 176.85C386.18 176.85 409.53 204.24 409.53 238.02C409.53 239.29 409.5 240.56 409.42 241.81C430.23 246.95 445.52 264.16 445.52 284.59C445.52 284.59 445.52 284.59 445.52 284.59C445.52 309.08 423.56 328.94 396.47 328.94C384.17 328.94 285.74 328.94 273.44 328.94C246.35 328.94 224.39 309.08 224.39 284.59C224.39 284.59 224.39 284.59 224.39 284.59C224.39 263.24 241.08 245.41 263.31 241.2C265.3 218.05 281.96 199.98 302.22 199.98C306.67 199.98 310.94 200.85 314.93 202.46C324.4 186.96 339.88 176.85 357.38 176.85Z" id="b1aO7LLtdW"></path><path d="M306.46 297.6L339.79 297.6L373.13 297.6L339.79 255.94L306.46 297.6Z" id="c4SXvvMdYD"></path><path d="M350.79 293.05L328.79 293.05L328.79 355.7L350.79 355.7L350.79 293.05Z" id="b11si2zUk"></path></defs><g><g><g><use xlink:href="#b1aO7LLtdW" opacity="1" fill="#ffffff" fill-opacity="1"></use></g><g><g><use xlink:href="#c4SXvvMdYD" opacity="1" fill="#363535" fill-opacity="1"></use></g><g><use xlink:href="#b11si2zUk" opacity="1" fill="#363535" fill-opacity="1"></use></g></g></g></g></svg>
                        <span class="file-upload-text">Upload Resume</span>
                        <div class="file-success-text">
                         <svg version="1.1" id="check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 100 100"  xml:space="preserve">
                <circle style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-miterlimit:10;" cx="49.799" cy="49.746" r="44.757"/>
                <polyline style="fill:rgba(0,0,0,0);stroke:#ffffff;stroke-width:10;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" points="
                    27.114,51 41.402,65.288 72.485,34.205 "/>
                </svg> <span>Resume Uploaded</span></div>
                    </div>
                    <p id="file-upload-name"></p>
        </div>
							</div>
							<div class="form-group col-md-6" style="text-align:center;">
								<button type="submit" value="submit" name="submit" class="btn submit_btn form-control" onclick="ValidateNo();" >Submit Now</button>
							</div>
						</form>
        			</div>
        		</div>
        	</div>
        </section>
        			
        			<!-- <div class="download_box justify-content-between d-flex">
        				<h4>Download Application Form online</h4>
        				<a class="main_btn" href="#">download application</a>
        			</div> -->
        		</div>
        	</div>
        </section>
        <!--================End Career Area =================-->
        
        
         <script>
$(document).ready(function(){
	var i=1;
	$('#adds').click(function(){
		i++;
		$('#dynamic_fields').append('<tr id="row'+i+'"><td><select class="discuss" name="qualification[]" style="display: block;"><option value="">Degree/Qualification *</option><option value="tenth">Std 10th</option><option value="inter">Std 12th</option><option value="Diploma">Diploma</option><option value="Bachelor">Bachelor</option><option value="Post_Graduate">Post Graduate</option><option value="Master">Master</option><option value="Certificate">Certificate</option><option value="Post_Graduate_Diploma">Post Graduate Diploma</option><option value="Research">Research</option><option value="Others">Others</option></select></td><td><input type="text" class="form-control" id="company" name="coursename[]" placeholder="Course Name *"></td><td><select class="discuss" name="lal[]" style="display: block;"><option value="">Select Year of Passing *</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option></select></td><td><input type="text" class="form-control" id="company" name="per[]" placeholder="Percentage"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	



	$('#adde').click(function(){
		i++;
		$('#dynamic_fielde').append('<tr id="row'+i+'"><td><input type="text" class="form-control" id="company" name="company_name[]" placeholder="Company name"></td><td><input type="text" class="form-control" id="company" name="start[]" placeholder="Start (MM/YY)"></td><td><input type="text" class="form-control" id="company" name="end[]" placeholder="End (MM/YY)"></td><td><input type="text" class="form-control" id="company" name="skills[]" placeholder="Skills"></td><td><input type="text" class="form-control" id="company" name="domain_experiece[]" placeholder="Domain Experiece"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
	});

</script>
    
    <script type="text/javascript">
   function isNumber(evt) {
  evt = (evt) ? evt : window.event;
  var charCode = (evt.which) ? evt.which : evt.keyCode;
  if (charCode > 31 && (charCode < 48 || charCode > 57)) {
    alert("Please enter only Numbers.");
    return false;
  }

  return true;
}

function ValidateNo() {
  var phoneNo = document.getElementById('txtPhoneNo');

  if (phoneNo.value == "" || phoneNo.value == null) {
    alert("Please enter your Mobile No.");
    return false;
  }
  if (phoneNo.value.length < 10 || phoneNo.value.length > 10) {
    alert("Mobile No. is not valid, Please Enter 10 Digit Mobile No.");
    return false;
  }


}
</script>    
<script type="text/javascript">
    function Validate(event) {
        var regex = new RegExp("^[0-9-.]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }       
</script>

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

/* Career Area css
============================================================================================ */
.career_inner {
  max-width: 970px;
  margin: auto;
  padding-left: 40px;
  padding-right: 40px;
}

.career_calling .career_img {
  margin-left: -40px;
  margin-right: -40px;
}

.calling_text {
  margin-top: -40px;
  padding-left: 40px;
  padding-right: 40px;
  text-align: center;
  background: #eceff3;
  padding-top: 75px;
  padding-bottom: 70px;
  padding-left: 50px;
  padding-right: 50px;
  z-index: 2;
  position: relative;
}

.calling_text h4 {
  font-size: 40px;
  font-weight: bold;
  color: #9e1b1b;
  margin-bottom: 25px;
}

.calling_text p {
  margin-bottom: 25px;
}

.about_process {
  padding-top: 75px;
  padding-bottom: 75px;
}

.about_process h3 {
  color: #9e1b1b;
  margin-bottom: 16px;
  font-size: 32px;
}

.about_process p {
  margin-bottom: 20px;
}

.quality {
  padding-top: 75px;
}

.quality h4 {
  color: #9e1b1b;
  font-size: 28px;
  margin-bottom: 15px;
}

.quality p {
  margin-bottom: 20px;
}

.quality .nav li {
  margin-bottom: 12px;
}

.quality .nav li:last-child {
  margin-bottom: 0px;
}

.quality .nav li a {
  position: relative;
  padding-left: 25px;
  color: #9e1b1b;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
  display: block;
}

.quality .nav li a i {
  position: absolute;
  left: 0px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  color: #000;
}

.quality .nav li a:hover {
  color: #000;
}

.positions {
  margin-top: -55px;
}

.positions h3 {
  color: #9e1b1b;
  margin-bottom: 30px;
}

.positions .accordion .card {
  border: none;
  margin-bottom: 20px;
  border-radius: 0px;
}

.positions .accordion .card:last-child {
  margin-bottom: 0px;
}

.positions .accordion .card .card-header {
  padding: 0px;
  border-radius: 0px;
  border: none;
  margin-bottom: 0px;
}

.positions .accordion .card .card-header button {
  border: 1px solid #9e1b1b;
  display: block;
  width: 100%;
  text-align: left;
  padding: 10.5px 18px;
  font-size: 18px;
  font-weight: 600;
  color: #9e1b1b;
  border-radius: 0px;
  background: #9e1b1b;
  text-decoration: none;
  color: #fff;
}

.positions .accordion .card .card-header button i {
  float: right;
  margin-top: 4px;
}

.positions .accordion .card .card-header button.collapsed {
  background: #fafafa;
  color: #9e1b1b;
  border-color: #e5e5e5;
}

.positions .accordion .card .collapse {
  border: none;
}

.positions .accordion .card .card-body {
  border: 1px solid #e5e5e5;
  border-top: 0px;
  padding-top: 30px;
  padding-bottom: 70px;
  padding-left: 40px;
  padding-right: 60px;
}

.positions .accordion .card .card-body h4 {
  font-size: 20px;
  font-family: "Poppins", sans-serif;
  color: #242424;
  font-weight: 600;
  margin-bottom: 12px;
}

.positions .accordion .card .card-body p {
  margin-bottom: 0px;
}

.download_box {
  margin-top: 45px;
  background: #9e1b1b;
  padding: 26px 50px 26px 50px;
  color: #fff;
}

.download_box h4 {
  margin-bottom: 0px;
  font-size: 24px;
  font-weight: 600;
  vertical-align: middle;
  -ms-flex-item-align: center;
  -ms-grid-row-align: center;
  align-self: center;
}

.download_box .main_btn {
  height: 48px;
  line-height: 48px;
  padding: 0px 33px;
}

.download_box .main_btn:hover {
  background: #fff;
  color: #000;
}

/* End Career Area css
============================================================================================ */
/* Get Touch Form Area css
============================================================================================ */
.get_touch_form_area {
  background: #eceff3;
}

.get_touch_form_area .call_back_form .form-group {
  margin-bottom: 20px;
}

.get_touch_form_area .call_back_form .form-group input {
  color: rgba(0, 0, 0, 0.7);
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area .call_back_form .form-group input.placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area .call_back_form .form-group input:-moz-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area .call_back_form .form-group input::-moz-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 35px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area .call_back_form .form-group input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area .call_back_form .form-group label {
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
  color: #000000;
}

.get_touch_form_area .call_back_form .form-group textarea {
  color: rgba(0, 0, 0, 0.7);
  font-size: 15px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area .call_back_form .form-group textarea.placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 15px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area .call_back_form .form-group textarea:-moz-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 15px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area .call_back_form .form-group textarea::-moz-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 15px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area .call_back_form .form-group textarea::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 15px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area .call_back_form .form-group .discuss span {
  color: rgba(0, 0, 0, 0.7);
  font-size: 15px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area .call_back_form .form-group .submit_btn {
  height: 58px;
  padding: 0px 52px;
  width: auto;
  margin-top: 20px;
}

.get_touch_form_area .call_back_form .form-group .submit_btn:hover {
  background: #9e1b1b;
  color: #fff;
}

.get_touch_form_area.contact_page {
  background: #fff;
}

.get_touch_form_area.contact_page .single_title {
  margin-bottom: 45px;
}

.get_touch_form_area.contact_page .call_back_form .form-group {
  margin-bottom: 15px;
}

.get_touch_form_area.contact_page .call_back_form .form-group input {
  color: rgba(0, 0, 0, 0.7);
  font-size: 14px;
  font-family: "Open Sans", sans-serif;
  border: 1px solid #9a9090;
}

.get_touch_form_area.contact_page .call_back_form .form-group input.placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area.contact_page .call_back_form .form-group input:-moz-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area.contact_page .call_back_form .form-group input::-moz-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area.contact_page .call_back_form .form-group input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area.contact_page .call_back_form .form-group textarea {
  color: rgba(0, 0, 0, 0.7);
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
  border: 1px solid #d8d8d8;
}

.get_touch_form_area.contact_page .call_back_form .form-group textarea.placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area.contact_page .call_back_form .form-group textarea:-moz-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area.contact_page .call_back_form .form-group textarea::-moz-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 15px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area.contact_page .call_back_form .form-group textarea::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.7);
  font-size: 15px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area.contact_page .call_back_form .form-group .discuss {
  border: 1px solid #9a9090;
}

.get_touch_form_area.contact_page .call_back_form .form-group .discuss span {
  color: rgba(0, 0, 0, 0.7);
  font-size: 15px;
  font-family: "Open Sans", sans-serif;
}

.get_touch_form_area.contact_page .call_back_form .form-group .submit_btn {
  border-radius: 10px;
  height: 58px;
  padding: 0px 52px;
  /* width: auto; */
  width:215px;
  margin-top: -1px;
}

.get_touch_form_area.contact_page .address_area {
  background: #eceff3;
  margin-left: 70px;
  height: 100%;
}

.get_touch_form_area.contact_page .address_area .address_text .tel {
  margin-bottom: 15px;
}

.get_touch_form_area.contact_page .address_area .address_text .tel:last-child {
  margin-bottom: 0px;
}

.get_touch_form_area.contact_page .address_area .address_text .tel a {
  display: block;
  margin-top: 0px;
}

.address_area {
  background: #fff;
  height: calc(100% - 90px);
  -webkit-box-shadow: 0px 0px 38px -42px rgba(0, 0, 0, 0.48);
  -moz-box-shadow: 0px 0px 38px -42px rgba(0, 0, 0, 0.48);
  box-shadow: 0px 0px 38px -42px rgba(0, 0, 0, 0.48);
}

.address_area .address_text {
  border-bottom: 1px solid #d1d8e1;
  padding: 35px 50px;
  margin-bottom: 0px;
}

.address_area .address_text:last-child {
  border: none;
}

.address_area .address_text .add {
  color: #9e1b1b;
  font-size: 20px;
  margin-bottom: 7px;
  font-weight: bold;
}

.address_area .address_text p {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 12px;
}

.address_area .address_text .tel {
  color: #9e1b1b;
  font-size: 16px;
  font-weight: 600;
  font-family: "Open Sans", sans-serif;
  margin-bottom: 0px;
}

.address_area .address_text .tel:last-child {
  margin-bottom: 0px;
}

.address_area .address_text .tel a {
  color: #797979;
  font-weight: normal;
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
}

/* End Get Touch Form Area css
============================================================================================ */
/* Call Back Area css
============================================================================================ */
.call_back_area {
  background: #202034;
}

.call_back_form {
  margin-bottom: -30px;
}

.call_back_form .form-group {
  margin-bottom: 30px;
}

.call_back_form .form-group input {
  height: 50px;
  background: #fff;
  border-radius: 0px;
  border: 1px solid #fff;
  padding: 0px 20px;
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  color: #999;
  font-weight: normal;
  -webkit-box-shadow: 0px 0px 38px -42px rgba(0, 0, 0, 0.48);
  -moz-box-shadow: 0px 0px 38px -42px rgba(0, 0, 0, 0.48);
  box-shadow: 0px 0px 38px -42px rgba(0, 0, 0, 0.48);
}

.call_back_form .form-group input.placeholder {
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  color: #999;
  font-weight: normal;
}

.call_back_form .form-group input:-moz-placeholder {
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  color: #999;
  font-weight: normal;
}

.call_back_form .form-group input::-moz-placeholder {
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  color: #999;
  font-weight: normal;
}

.call_back_form .form-group input::-webkit-input-placeholder {
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  color: #999;
  font-weight: normal;
}

.call_back_form .form-group label {
  font-size: 13px;
  font-family: "Open Sans", sans-serif;
  color: #fff;
}

.call_back_form .form-group textarea {
  height: 250px;
  background: #fff;
  border-radius: 0px;
  border: 1px solid #fff;
  padding: 20px 20px;
  outline: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  color: #999999;
  font-weight: normal;
  resize: none;
  -webkit-box-shadow: 0px 0px 38px -42px rgba(0, 0, 0, 0.48);
  -moz-box-shadow: 0px 0px 38px -42px rgba(0, 0, 0, 0.48);
  box-shadow: 0px 0px 38px -42px rgba(0, 0, 0, 0.48);
}

.call_back_form .form-group textarea.placeholder {
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  color: #999999;
  font-weight: normal;
}

.call_back_form .form-group textarea:-moz-placeholder {
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  color: #999999;
  font-weight: normal;
}

.call_back_form .form-group textarea::-moz-placeholder {
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  color: #999999;
  font-weight: normal;
}

.call_back_form .form-group textarea::-webkit-input-placeholder {
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  color: #999999;
  font-weight: normal;
}

.call_back_form .form-group .discuss {
  height: 50px;
  border: 1px solid #fff;
  width: 100%;
  border-radius: 0px;
  line-height: 50px;
  padding: 0px 20px;
  background: #79797900;
  color: #080808;
}

.call_back_form .form-group .discuss span {
  font-size: 16px;
  font-family: "Open Sans", sans-serif;
  color: #999999;
  font-weight: normal;
  opacity: 1;
}

.call_back_form .form-group .discuss:after {
  content: "\f0d7";
  font: normal normal normal 16px/1 FontAwesome;
  border: none;
  -webkit-transform: rotate(0);
  -ms-transform: rotate(0);
  transform: rotate(0);
  margin-top: -6px;
  right: 20px;
}

.call_back_form .form-group .discuss .list {
  width: 100%;
  border-radius: 0px;
}

.call_back_form .form-group .submit_btn {
  border: none;
  height: 50px;
  line-height: 50px;
}

.call_back_form .form-group .submit_btn:hover {
  background: #fff;
  color: #000;
}
.submit_btn {
  background: #000;
  color: #fff;
  line-height: 48px;
  display: inline-block;
  padding: 0px 25px;
  text-transform: uppercase;
  font-size: 15px;
  font-weight: 600;
  letter-spacing: .65px;
  -webkit-transition: all 300ms linear 0s;
  -o-transition: all 300ms linear 0s;
  transition: all 300ms linear 0s;
  border: 1px solid #e8e6ee;
  border-radius: 0px;
  outline: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
}

.submit_btn:hover {
  background: #9e1b1b;
  color: #fff;
}
/* End Call Back Area css
============================================================================================ */

.p_30 {
    padding:80px 0 60px;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #000000;
}
</style>
<?php include 'footer.php';?>