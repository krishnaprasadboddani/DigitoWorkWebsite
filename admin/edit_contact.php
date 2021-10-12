<?php
include('include/header.php');
?>
<?php
include('dbcon.php');
$id = $_GET['id'];
$sqlqry = "select * from contact where id='$id'";
$rs = mysqli_query($con, $sqlqry);
$row = mysqli_fetch_assoc($rs);
?>
<script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
<script type="text/javascript" src="js/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Contact Page</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Contact desk</li>
        </ol>
    </div>

    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">

                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="section-block" id="basicform">


                        </div>
                        <div class="card">

                            <div class="card-body">
                                <form method="post" action="" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <h6>Heading</h6>
                                        <textarea class="form-control" name="p1" rows="3"> <?php echo $row['p1']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>Description</h6>
                                        <textarea class="form-control" name="p2" rows="3"> <?php echo $row['p2']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>Heading</h6>
                                        <textarea class="form-control" name="p3" rows="3"> <?php echo $row['p3']; ?></textarea>

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


    </html>


    <?php
    include('dbcon.php');
    if (isset($_POST['submit'])) {
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $p3 = $_POST['p3'];









        $p1 = str_replace("'", "\'", $p1);
        $p2 = str_replace("'", "\'", $p2);
        $p3 = str_replace("'", "\'", $p3);






        $id = $_POST['id'];
        $sql_update = "update contact set p1='$p1', p2='$p2', p3='$p3' where id='$id'";
        $update = mysqli_query($con, $sql_update);



        if ($update) {
    ?>
            <script>
                alert('Data Updated Successfully');
                window.open('admin_contact.php', '_self');
            </script>
    <?php
        }
    }



    ?>