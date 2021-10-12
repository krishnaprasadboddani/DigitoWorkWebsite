<?php
include('include/header.php');
 ?>
<?php
include ('dbcon.php');
$id= $_GET['id'];
$sqlqry= "select * from career where id='$id'";
$rs=mysqli_query($con, $sqlqry);
$row=mysqli_fetch_assoc($rs);
?>

 <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">career</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">career</li>
                </ol>
            </div>
         
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">

      <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title">career Details</h3>
                                  
                                </div>
                                <div class="card">
                                   
                                    <div class="card-body">
                                        <form method="post" action="" enctype="multipart/form-data">
                                             <div class="form-group">
                                                <label for="About" class="col-form-label">Title</label>
                                                <textarea class="form-control" name="heading" rows="3" required> <?php echo $row['heading']?></textarea>
                                                
                                            </div>
                                             <div class="form-group">
                                                <label for="About" class="col-form-label">Description</label>
                                                <textarea class="form-control" name="description" rows="3" required> <?php echo $row['description']?></textarea>
                                                
                                            </div>
                                             <div class="form-group">
                                                <label for="About" class="col-form-label">Skill set</label>
                                                <textarea class="form-control" name="description1" rows="3" required> <?php echo $row['description1']?></textarea>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="About" class="col-form-label">Roles & Responsibilities</label>
                                                <textarea class="form-control" name="description2" rows="3" required> <?php echo $row['description2']?></textarea>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="About" class="col-form-label">Technology track</label>
                                                <textarea class="form-control" name="description3" rows="3" required> <?php echo $row['description3']?></textarea>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="About" class="col-form-label">Experience</label>
                                                <textarea class="form-control" name="description4" rows="3" required> <?php echo $row['description4']?></textarea>
                                                
                                            </div>
                                            
                                            
                                             <div class="form-group">
                                                <input class="form-control" type="hidden" name="one" value="<?php echo $row['one']?>" readonly >
                                                
                                            </div>
                                            
                                            
                                             <div class="form-group">
                                                <input class="form-control" type="hidden" name="two" value="<?php echo $row['two']?>" readonly> 
                                                
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                <label for="About" class="col-form-label">Status </label>
                                                <input type="radio" name="status" value="Enable" checked> Enable
                                                <input type="radio" name="status" value="Disable"> Disable<br>
                                            </div>
                                           
                                           
                                           
                                           
                                            
                                             <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <hr class="my-4">
                               <input type="submit" name="submit" Value="Update" class="btn btn-gradient-blue2 btn-rounded btn-fix">
                                           
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
include('dbcon.php');
if(isset($_POST['submit']))
{
$heading=$_POST['heading'];
$description=$_POST['description'];
$description1=$_POST['description1'];
$description2=$_POST['description2'];
$description3=$_POST['description3'];
$description4=$_POST['description4'];
$one=trim($_POST['one']);
$two=trim($_POST['two']);
$status = $_POST['status'];

$id=$_POST['id'];
$sql_update="update career set heading='$heading', description='$description', description1='$description1', description2='$description2', description3='$description3', description4='$description4', one = '$one', two = '$two', status = '$status' where id = '$id' ";
// print_r($sql_update);
        $update=mysql_query($sql_update);

if($update)
{
        ?>
        <script>
        alert('List Updated Successfully');
        window.open('career.php','_self');
        </script>
        <?php
    }
    }



?>