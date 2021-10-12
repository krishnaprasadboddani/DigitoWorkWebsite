<?php
include('include/header.php');
 ?>
 <?php
include ('dbcon.php');
$sql= "select * from career";
$result = mysqli_query($con, $sql);


?>
<?php
if(isset($_GET['id']))
{
    $id=intval($_GET['id']);
    $delqry="delete from career where id=$id";
        $del=mysqli_query($con, $delqry);
    if($del)
    {
        ?>
        <script>
        alert('Deleted Successfully');
        window.open('career.php','_self');
        </script>
        <?php
}
}
?>



        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">career </h1>

                <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item">-->
                    <!--    <a href="dashboard.php"><i class="la la-home font-20"></i></a>-->
                    <!--</li>-->
                    <!--<li class="breadcrumb-item">career</li>-->
                    <!--<li class="breadcrumb-item">career</li>-->
                </ol>
                 <button class="btn btn-gradient-blue2 btn-rounded btn-fix"><a href="add_career.php">Add New</a></button>
            </div>
            
           

            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                       
                      
                        <div class="table-responsive row">
                            <table class="table table-bordered table-hover" id="datatable">
                                <thead class="thead-default thead-lg">
                                    <tr>
                                        <th>Id</th>
                                       
                                        <th>Title</th>
                                         <th>Description</th>
                                        <th>Skill set</th>
                                        <th>Roles & Responsibilities</th>
                                        <th>Technology track</th>
                                        <th>Experience</th>
                                       
                                         <th>Status</th>
                                          <th>Edit</th>
                                          <th>Delete</th>
                                       
                                       
                                       
                                      
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                       while ($row= mysqli_fetch_assoc($result)){

                        ?>
                                    <tr>
                                        <td><?php echo $row['id'];?></td>
                                       
										<td><?php echo $row['heading'];?></td>
                                        <td><?php echo $row['description'];?></td>
                                        <td><?php echo $row['description1'];?></td>
                                        <td><?php echo $row['description2'];?></td>
                                        <td><?php echo $row['description3'];?></td>
                                        <td><?php echo $row['description4'];?></td>
                                        
                                          
                                        <td><?php echo $row['status'];?></td>
										
                                        <td><a href="edit_career.php?id=<?php echo $row['id'];?>"><i class="fa fa-edit"></i> Edit</a></td>
                                         <td><a href="career.php?id=<?php echo $row['id'];?>" onclick="return confirm(' Do you want to delete');"><i class="fa fa-trash"></i> Delete</a></td>
                                     </tr>
                                     <?php
    
                                        }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>



            <!-- END PAGE CONTENT-->
        <?php
include('include/footer.php');
 ?>
    <!-- PAGE LEVEL SCRIPTS-->
    <script>
        $(function() {
            $('#datatable').DataTable({
                pageLength: 5,
                fixedHeader: true,
                responsive: true,
                "sDom": 'rtip',
                columnDefs: [{
                    targets: 'no-sort',
                    orderable: false
                }]
            });

            var table = $('#datatable').DataTable();
            $('#key-search').on('keyup', function() {
                table.search(this.value).draw();
            });
            $('#type-filter').on('change', function() {
                table.column(4).search($(this).val()).draw();
            });
        });
    </script>
    
</body>


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2019 10:54:00 GMT -->
</html>