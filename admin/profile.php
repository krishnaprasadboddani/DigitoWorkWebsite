<?php
include ('dbcon.php');
//$id= $_GET['id'];
$sqlqry= "select * from admin where id='1'";
$rs=mysqli_query($con, $sqlqry);
$row=mysqli_fetch_assoc($rs);
?>

<?php
include('include/header.php');
 ?>
	   <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
          
	                    
	                    <div class="row">
	                        <div class="col-lg-12">
	                            <div class="section-block">
	                                <h3 class="section-title">Admin Profile</h3>
	                            </div>
	                        </div>
	                        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
	                            <div class="card campaign-card text-center">
	                                <div class="card-body">
	                                    <form action="profileupdate.php" method="post" >
	                                          <div class="row">
                     
                                                <label for="validationCustom01">UserName</label>
                                                <input type="text" class="form-control" name="username" value="<?php echo $row['username']; ?>" >
                                                
                                                   <label for="validationCustomUsername">Email</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend"></span>
                                                    </div>
                                                    <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control" >
                                                   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            
                                           
                                            
                                            
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button class="btn btn-gradient-blue2 btn-rounded btn-fix" type="submit" name="submit">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                              </div>
                          </div>
                 
              
	                            <!-- ============================================================== -->
	               <?php
include('include/footer.php');
 ?>             <!-- footer -->
	                            <!-- ============================================================== -->
	                            
</body>
 
</html>