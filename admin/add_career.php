<?php
include('include/header.php');
 ?>


 <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Career</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Career</li>
                </ol>
            </div>
         
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">

      <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">Career</h3>
                                  
                                </div>
                                <div class="card">
                                   
                                    <div class="card-body">
                                        <form method="post" action="insert_carrer_data.php" enctype="multipart/form-data">
                                             <div class="form-group">
                                                <label for="About" class="col-form-label">Title</label>
                                                <textarea class="form-control" name="heading" rows="5" required="required"></textarea>
                                                
                                            </div>
                                             <div class="form-group">
                                                <label for="About" class="col-form-label">Description</label>
                                                <textarea class="form-control" name="description" rows="3" required ></textarea>
                                                
                                            </div>
                                             <div class="form-group">
                                                <label for="About" class="col-form-label">Skill set</label>
                                                <textarea class="form-control" name="description1" rows="3" required ></textarea>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="About" class="col-form-label">Roles & Responsibilities</label>
                                                <textarea class="form-control" name="description2" rows="3" required ></textarea>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="About" class="col-form-label">Technology track</label>
                                                <textarea class="form-control" name="description3" rows="3" required ></textarea>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="About" class="col-form-label">Experience</label>
                                                <textarea class="form-control" name="description4" rows="3" required ></textarea>
                                                
                                            </div>
                                            
                                             
                                           
                                           
                                           
                                           
                                            
                                            
                                    <hr class="my-4">
                               <input type="submit" name="submit" Value="Add Item" class="btn btn-gradient-blue2 btn-rounded btn-fix">
                                           
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
  <?php
include('include/footer.php');
 ?>
    <!-- PAGE LEVEL SCRIPTS-->
    
</body>


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2019 10:54:00 GMT -->
</html>

<?php
$raju = "heading";
$laltu = "collapse";
$default = "1";
$getlastid_query = "SELECT * FROM career";
$getlastid_data = mysqli_query($con, $getlastid_query);
$getlastid_row = mysqli_num_rows($getlastid_data);
print_r($getlastid_query);
print_r($getlastid_data);
exit;


include('dbcon.php');
if(isset($_POST['submit']))
{
$heading=$_POST['heading'];
$description=$_POST['description'];
$description1=$_POST['description1'];
$heading=$_POST['heading'];
$collapse=$_POST['collapse'];

$sql_qry="INSERT INTO `career`(`heading`, `description`, `description1`, `one`, `two`, `status`) VALUES ('$heading','$description','$description1', '$heading', '$collapse', 'Enable')";
$res=mysqli_query($con, $sql_qry);
if($res)
{
   ?>
    <script>
      alert('Item Added Successfully....');
      window.open('career.php','_self');
    </script>
    <?php
}


}




?>