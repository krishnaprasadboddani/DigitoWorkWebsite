<?php
include('include/header.php');
?>
<?php
include('dbcon.php');
$id = $_GET['id'];
$sqlqry = "select * from home where id='$id'";
$rs = mysqli_query($con, $sqlqry);
$row = mysqli_fetch_assoc($rs);
?>
<script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
<script type="text/javascript" src="js/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Home Page</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Home</li>
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

                                    </div>>
                                    <div class="form-group">
                                        <h6>temple 9</h6>
                                        <textarea class="form-control" name="p18" rows="3"> <?php echo $row['p18']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>temple 10</h6>
                                        <textarea class="form-control" name="p19" rows="3"> <?php echo $row['p19']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>temple 11</h6>
                                        <textarea class="form-control" name="p20" rows="3"> <?php echo $row['p20']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>Last Heading</h6>
                                        <textarea class="form-control" name="p21" rows="3"> <?php echo $row['p21']; ?></textarea>

                                    </div>
                                    <div class="form-group">
                                        <h6>Description</h6>
                                        <textarea class="form-control" name="p22" rows="3"> <?php echo $row['p22']; ?></textarea>

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

                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>

                                        <input type="file" name="image4">
                                        <image src="../images/<?php echo $row['image4']; ?>" alt="" style="width: 80px; margin-left: 165px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>

                                        <input type="file" name="image5">
                                        <image src="../images/<?php echo $row['image5']; ?>" alt="" style="width: 80px; margin-left: 165px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>

                                        <input type="file" name="image6">
                                        <image src="../images/<?php echo $row['image6']; ?>" alt="" style="width: 80px; margin-left: 165px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>

                                        <input type="file" name="image7">
                                        <image src="../images/<?php echo $row['image7']; ?>" alt="" style="width: 80px; margin-left: 165px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>

                                        <input type="file" name="image8">
                                        <image src="../images/<?php echo $row['image8']; ?>" alt="" style="width: 80px; margin-left: 165px;">
                                    </div>
                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>

                                        <input type="file" name="image9">
                                        <image src="../images/<?php echo $row['image9']; ?>" alt="" style="width: 80px; margin-left: 165px;">
                                    </div>

                                    <div class="form-group">
                                        <label for="About" class="col-form-label">Image</label>

                                        <input type="file" name="image10">
                                        <image src="../images/<?php echo $row['image10']; ?>" alt="" style="width: 80px; margin-left: 165px;">
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
        $p19 = $_POST['p19'];
        $p20 = $_POST['p20'];
        $p21 = $_POST['p21'];
        $p22 = $_POST['p22'];




        $f1 = $_FILES['image1']['name'];
        $f2 = $_FILES['image2']['name'];
        $f3 = $_FILES['image3']['name'];
        $f4 = $_FILES['image4']['name'];
        $f5 = $_FILES['image5']['name'];
        $f6 = $_FILES['image6']['name'];
        $f7 = $_FILES['image7']['name'];
        $f8 = $_FILES['image8']['name'];
        $f9 = $_FILES['image9']['name'];
        $f10 = $_FILES['image10']['name'];


        move_uploaded_file($_FILES['image1']['tmp_name'], "../images/$f1");
        move_uploaded_file($_FILES['image2']['tmp_name'], "../images/$f2");
        move_uploaded_file($_FILES['image3']['tmp_name'], "../images/$f3");
        move_uploaded_file($_FILES['image4']['tmp_name'], "../images/$f4");
        move_uploaded_file($_FILES['image5']['tmp_name'], "../images/$f5");
        move_uploaded_file($_FILES['image6']['tmp_name'], "../images/$f6");
        move_uploaded_file($_FILES['image7']['tmp_name'], "../images/$f7");
        move_uploaded_file($_FILES['image8']['tmp_name'], "../images/$f8");
        move_uploaded_file($_FILES['image9']['tmp_name'], "../images/$f9");
        move_uploaded_file($_FILES['image10']['tmp_name'], "../images/$f10");
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






        $id = $_POST['id'];
        $sql_update = "update home set p1='$p1', p2='$p2', p3='$p3',p4='$p4',p5='$p5',p6='$p6',p7='$p7', p8='$p8', p9='$p9',p10='$p10',p11='$p11',p12='$p12',p13='$p13',p14='$p14',p15='$p15',p16='$p16',p17='$p17',p18='$p18',p19='$p19',p20='$p20',p21='$p21',p22='$p22' where id='$id'";
        $update = mysqli_query($con, $sql_update);


        if ($_FILES['image1']['name']) {;
            $update = mysqli_query($con, "update home set image1='" . $_FILES['image1']['name'] . "' where id=" . $id);
        }
        if ($_FILES['image2']['name']) {
            $update = mysqli_query($con, "update home set image2='" . $_FILES['image2']['name'] . "' where id=" . $id);
        }
        if ($_FILES['image3']['name']) {
            $update = mysqli_query($con, "update home set image3='" . $_FILES['image3']['name'] . "' where id=" . $id);
        }
        if ($_FILES['image4']['name']) {
            $update = mysqli_query($con, "update home set image4='" . $_FILES['image4']['name'] . "' where id=" . $id);
        }
        if ($_FILES['image5']['name']) {
            $update = mysqli_query($con, "update home set image5='" . $_FILES['image5']['name'] . "' where id=" . $id);
        }
        if ($_FILES['image6']['name']) {
            $update = mysqli_query($con, "update home set image6='" . $_FILES['image6']['name'] . "' where id=" . $id);
        }
        if ($_FILES['image7']['name']) {
            $update = mysqli_query($con, "update home set image7='" . $_FILES['image7']['name'] . "' where id=" . $id);
        }
        if ($_FILES['image8']['name']) {
            $update = mysqli_query($con, "update home set image8='" . $_FILES['image8']['name'] . "' where id=" . $id);
        }
        if ($_FILES['image9']['name']) {
            $update = mysqli_query($con, "update home set image9='" . $_FILES['image9']['name'] . "' where id=" . $id);
        }
        if ($_FILES['image10']['name']) {
            $update = mysqli_query($con, "update home set image10='" . $_FILES['image10']['name'] . "' where id=" . $id);
        }
        if ($update) {
    ?>
            <script>
                alert('Data Updated Successfully');
                window.open('admin_home.php', '_self');
            </script>
    <?php
        }
    }



    ?>