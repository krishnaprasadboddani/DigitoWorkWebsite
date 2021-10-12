<?php
include('include/header.php');
?>
<?php
error_reporting(1);
include('dbcon.php');
$id = $_GET['id'];
$sqlqry = "select * from itsm_services where id='$id'";
$rs = mysqli_query($con, $sqlqry);
$row = mysqli_fetch_assoc($rs);
?>
<script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
<script type="text/javascript" src="js/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">itsm services Page</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">itsm services</li>
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
                                    <div class="form-group">
                                        <h6>Description</h6>
                                        <textarea class="form-control" name="p4" rows="3"> <?php echo $row['p4']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>Description</h6>
                                        <textarea class="form-control" name="p5" rows="3"> <?php echo $row['p5']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>Heading</h6>
                                        <textarea class="form-control" name="p6" rows="3"> <?php echo $row['p6']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <h6>Description</h6>
                                        <textarea class="form-control" name="p7" rows="3"> <?php echo $row['p7']; ?></textarea>

                                    </div>
                                    <div class="form-group">

                                        <h6>Heading</h6>
                                        <textarea class="form-control" name="p8" rows="3"> <?php echo $row['p8']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>Description</h6>
                                        <textarea class="form-control" name="p9" rows="3"> <?php echo $row['p9']; ?></textarea>

                                    </div>

                                    <div class="form-group">
                                        <h6>temple 1</h6>
                                        <textarea class="form-control" name="p10" rows="3"> <?php echo $row['p10']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>temple 2</h6>
                                        <textarea class="form-control" name="p11" rows="3"> <?php echo $row['p11']; ?></textarea>

                                    </div>

                                    <div class="form-group">
                                        <h6>temple 3</h6>
                                        <textarea class="form-control" name="p12" rows="3"> <?php echo $row['p12']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>temple 4</h6>
                                        <textarea class="form-control" name="p13" rows="3"> <?php echo $row['p13']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>temple 5</h6>
                                        <textarea class="form-control" name="p14" rows="3"> <?php echo $row['p14']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>temple 6</h6>
                                        <textarea class="form-control" name="p15" rows="3"> <?php echo $row['p15']; ?></textarea>

                                    </div>

                                    <div class="form-group">
                                        <h6>temple 7</h6>
                                        <textarea class="form-control" name="p16" rows="3"> <?php echo $row['p16']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>temple 8</h6>
                                        <textarea class="form-control" name="p17" rows="3"> <?php echo $row['p17']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>temple 9</h6>
                                        <textarea class="form-control" name="p18" rows="3"> <?php echo $row['p18']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>

                                        <input type="file" name="image1">
                                        <image src="../images/<?php echo $row['image1']; ?>" alt="" style="width: 80px; margin-left: 165px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>

                                        <input type="file" name="image2">
                                        <image src="../images/<?php echo $row['image2']; ?>" alt="" style="width: 80px; margin-left: 165px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>

                                        <input type="file" name="image3">
                                        <image src="../images/<?php echo $row['image3']; ?>" alt="" style="width: 80px; margin-left: 165px;">
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
        $p4 = $_POST['p4'];
        $p5 = $_POST['p5'];
        $p6 = $_POST['p6'];
        $p7 = $_POST['p7'];
        $p8 = $_POST['p8'];
        $p9 = $_POST['p9'];
        $p10 = $_POST['p10'];
        $p11 = $_POST['p11'];
        $p12 = $_POST['p12'];
        $p13 = $_POST['p13'];
        $p14 = $_POST['p14'];
        $p15 = $_POST['p15'];
        $p16 = $_POST['p16'];
        $p17 = $_POST['p17'];
        $p18 = $_POST['p18'];





        $f1 = $_FILES['image1']['name'];
        $f2 = $_FILES['image2']['name'];
        $f3 = $_FILES['image3']['name'];



        move_uploaded_file($_FILES['image1']['tmp_name'], "../images/$f1");
        move_uploaded_file($_FILES['image2']['tmp_name'], "../images/$f2");
        move_uploaded_file($_FILES['image3']['tmp_name'], "../images/$f3");
        $p1 = str_replace("'", "\'", $p1);
        $p2 = str_replace("'", "\'", $p2);
        $p3 = str_replace("'", "\'", $p3);
        $p4 = str_replace("'", "\'", $p4);
        $p5 = str_replace("'", "\'", $p5);
        $p6 = str_replace("'", "\'", $p6);
        $p7 = str_replace("'", "\'", $p7);
        $p8 = str_replace("'", "\'", $p8);
        $p9 = str_replace("'", "\'", $p9);
        $p10 = str_replace("'", "\'", $p10);
        $p11 = str_replace("'", "\'", $p11);
        $p12 = str_replace("'", "\'", $p12);
        $p13 = str_replace("'", "\'", $p13);
		$p14 = str_replace("'", "\'", $p14);
        $p15 = str_replace("'", "\'", $p15);
		$p16 = str_replace("'", "\'", $p16);
        $p17 = str_replace("'", "\'", $p17);
		$p18 = str_replace("'", "\'", $p18);






        $id = $_POST['id'];
        $sql_update = "update itsm_services set p1='$p1', p2='$p2', p3='$p3',p4='$p4',p5='$p5',p6='$p6',p7='$p7', p8='$p8', p9='$p9',p10='$p10',p11='$p11',p12='$p12',p13='$p13',p14='$p14',p15='$p15',p16='$p16',p17='$p17',p18='$p18' where id='$id'";
        $update = mysqli_query($con, $sql_update);



        if ($_FILES['image1']['name']) {
            $update = mysqli_query($con, "update itsm_services set image1='" . $_FILES['image1']['name'] . "' where id=" . $id);
        }
        if ($_FILES['image2']['name']) {
            $update = mysqli_query($con, "update itsm_services set image2='" . $_FILES['image2']['name'] . "' where id=" . $id);
        }
        if ($_FILES['image3']['name']) {
            $update = mysqli_query($con, "update itsm_services set image3='" . $_FILES['image3']['name'] . "' where id=" . $id);
        }

        if ($update) {
    ?>
            <script>
                alert('Data Updated Successfully');
                window.open('admin_itsm_services.php', '_self');
            </script>
    <?php
        }
    }



    ?>