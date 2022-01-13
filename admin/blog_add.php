<?php
include('include/header.php');
?>

<script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
<script type="text/javascript" src="js/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Add Blog</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Blog</li>
        </ol>
    </div>

    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">

 <?php


include('dbcon.php');
if(isset($_POST['submit']))
{
extract($_POST);
 $date=date('y-m-d');
    $url=str_replace(' ', '-', $heading),
  $img =rand().$_FILES['f_image']['name'];
$tmp_dir = $_FILES['f_image']['tmp_name'];
$upload_dir = 'blog/'; // upload directory
$description=htmlspecialchars($description, ENT_QUOTES);
move_uploaded_file($tmp_dir,$upload_dir.$img);
/*$sql_qry="INSERT INTO `bloger`(`crdate`,`heading`) VALUES ('$heading')";*/
$sql = "INSERT INTO `bloger`(`crdate`,`heading`,`description`,`image`, `email`, `url`)
VALUES ('$date','$heading','$description','$img', '$email', '$url')"


$res=mysqli_query($con, $sql);
//$res=$con->query($sql_qry);
if($res)
{
   ?>
    <script>
      alert('Item Added Successfully....');
      window.open('blog_view.php','_self');
    </script>
    <?php
}else{
echo "<p> There was an error when creating the
subject </p>";
"<p>". mysql_error()."</p>" ;
}
}





?>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">


                        </div>
                        <div class="card">

                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <h6>Heading</h6>
                                        <textarea class="form-control" name="heading" rows="3"> </textarea>

                                    </div>
                                  




                                    <div class="form-group">
                                        <h6>Description</h6>
                                        <textarea class="form-control" name="description" rows="3" id="summernote"> </textarea>

                                    </div>
                                   
                                    
                                    
                                   
                                    
                                    
                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>

                                       <input type="file" name="f_image" required>
                                       
                                    </div>
                                   <div class="form-group">
                                        <label for="About" class="col-form-label">Posted By</label>

                                       <input type="email" name="email" requiredplaceholder="Email">
                                       
                                    </div>
                                    
                                   
                                    
                                       
                                  
                                    <hr class="my-4">
                                    <input type="submit" name="submit" Value="Submit" class="btn btn-gradient-blue2 btn-rounded btn-fix">

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


    </html>


    
