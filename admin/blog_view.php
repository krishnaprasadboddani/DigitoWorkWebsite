<?php
include('include/header.php');
?>
<?php
include('dbcon.php');
$sql = "select * from bloger";
$result = mysqli_query($con, $sql) or die("Bad Insert:$sql");

?>

<!-- END SIDEBAR-->
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-heading">
        <h1 class="page-title">Home </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="dashboard.php"><i class="la la-home font-20"></i></a>
            </li>

            <li class="breadcrumb-item">Home Page</li>
        </ol>
    </div>


    <!--   <button class="btn btn-gradient-blue2 btn-rounded btn-fix"><a href="addpost.php">Add New Post</a></button> -->
    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-body">


                <div class="table-responsive row">
                    <table class="table table-bordered table-hover" id="datatable">
                        <thead class="thead-default thead-lg">
                            <tr>
                                <th>Id</th>
                                <th>Heading</th>
                                
                               
                                <th>Action</th>

                            </tr>
                        </thead>

                        <?php
                        // echo mysqli_num_rows($result); die;
                        while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['heading']; ?></td>
                                  
                                  
                                    <td><a href="blog_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit/Add Details</a></td>





                                </tr>
                            <?php

                        }
                            ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>






        <!-- <a href="edithome.php"><i class="fa fa-edit">Update</i></a> -->



        <!-- END PAGE CONTENT-->
        <?php
        include('include/footer.php');
        ?>
        <!-- PAGE LEVEL SCRIPTS-->

        </body>



        </html>