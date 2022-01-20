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
$url=str_replace(' ', '-', $heading);

$description=htmlspecialchars($description, ENT_QUOTES);
$id=$_GET['id'];
$sql_update="update bloger set heading='$heading', description='$description', email='$email', url='$url' where id = '$id' ";
// print_r($sql_update);
        $update = mysqli_query($con, $sql_update);

   if ($_FILES['f_image']['name']) {;
      $img =rand().$_FILES['f_image']['name'];
$tmp_dir = $_FILES['f_image']['tmp_name'];
$upload_dir = 'blog/'; // upload directory
move_uploaded_file($tmp_dir,$upload_dir.$img);
   
          $sql_update="update bloger set image='$img'  where id = '$id' ";
// print_r($sql_update);
        $update = mysqli_query($con, $sql_update);
        }

if($update)
{
        ?>
        <script>
        alert('List Updated Successfully');
        window.open('blog_view.php','_self');
        </script>
        <?php
    }
    }



?>

<?php
include('dbcon.php');
$id = $_GET['id'];
$sqlqry = "select * from bloger where id='$id'";
$rs = mysqli_query($con, $sqlqry);
$row = mysqli_fetch_assoc($rs);
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
                                        <textarea class="form-control" name="heading" rows="3"> <?php echo $row['heading']; ?></textarea>

                                    </div>
                                  




                                    <div class="form-group">
                                        <h6>Description</h6>
                                        <textarea class="form-control" name="description" rows="3" id="summernote"> <?php echo htmlspecialchars_decode( $row['description'], ENT_QUOTES); ?></textarea>

                                    </div>
                                   
                                    
                                    
                                   
                                    
                                    
                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>
                                       
                                       <input type="file" name="f_image" >
                                         <image src="blog/<?php echo $row['image']; ?>" alt="blog_digitowork" style="width: 80px; margin-left: 165px;">
                                    </div>

                                  <div class="form-group">
                                        <label for="About" class="col-form-label">Posted By</label>

                                       <input type="email" name="email" requiredplaceholder="Email" value="<?php echo $row['email']; ?>">
                                       
                                    </div>
                                     <div class="form-group">
                                        <h6>SEO Title</h6>
                                        <textarea class="form-control" name="seo_title" rows="3"><?php echo $row['seo_title']; ?> </textarea>

                                    </div>
                                    
                                       <div class="form-group">
                                        <h6>SEO Description</h6>
                                        <textarea class="form-control" name="seo_description" rows="3"> <?php echo $row['seo_description']; ?></textarea>

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


    
