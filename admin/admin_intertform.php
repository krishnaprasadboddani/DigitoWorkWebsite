<?php
include('include/header.php');
 ?>
 <?php
include ('dbcon.php');
$sql= "select * from intertform";
$result = mysqli_query($con, $sql);


?>
<?php
include('dbcon.php');

if(isset($_GET['del']))
{
    $id=intval($_GET['del']);
    $delqry="delete from intertform where id=$id";
        $del=mysqli_query($con, $delqry);
    if($del)
    {
        ?>
        <script>
        alert('Message Deleted Successfully');
        window.open('admin_intertform.php','_self');
        </script>
        <?php
}
}
?>



        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Internship Form Details </h1>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Internship Form Details</li>
                </ol>
                 
            </div>
            
           

            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                       
                      
                        <div class="table-responsive row" style="overflow-x: scroll;">
                            <table class="table table-bordered table-hover" id="table_id">
                                <thead class="thead-default thead-lg">
                                    <tr>
                                         <th>Id</th>
                                         <th>Name</th>
                                         <th>Middle Name</th>
                                         <th>Last Name</th>
                                         <th>D.O.B</th>
                                         <th>Gender</th>
                                         <th>Email</th>
                                         <th>Phone.no</th>
                                         <th>Qualification</th>
                                         <th>Course</th>
                                         <th>Year Of Passing</th>
                                         <th>Percentage</th>
                                         <th>Current Location</th>
                                         <th>Area Of Interest</th>
                                         <th>Resume</th>
                                         <th>Update On</th>
                                       
                                         <th>Action</th>
                                       
                                       
                                       
                                      
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                       while ($row= mysqli_fetch_assoc($result)){

                        ?>
                                    <tr>
                                        <td><?php echo $row['id'];?></td>
                                       
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['middlename'];?></td>
                                        <td><?php echo $row['lastname'];?></td>
                                        <td><?php echo $row['dateofbirth'];?></td>
                                        <td><?php echo $row['gender'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['phone'];?></td>
                                        <td><?php echo $row['qualification'];?></td>
                                        <td><?php echo $row['coursename'];?></td>
                                        <td><?php echo $row['yop'];?></td>
                                        <td><?php echo $row['per'];?></td>
                                        <td><?php echo $row['cl'];?></td>
                                        <td><?php echo $row['aoi'];?></td>
                                        
                                        <td><a target="_blank" href="../file-internship/<?php echo $row['file'];?>"><?php echo $row['file'];?></a></td>
                                        <td><?php echo $row['upload_date'];?></td>
                                          
                                        
                                        
                                         <td><a href="admin_intertform.php?del=<?php echo $row['id'];?>" onclick="return confirm(' Do you want to delete');"><i class="fa fa-trash"></i> Delete</a></td>
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
                // responsive: true,
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
    <script type="text/javascript">
    $(document).ready( function () {
    $('#table_id').DataTable({
         dom: 'Bfrtip',
        buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
    });
} );
</script>
    
</body>


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2019 10:54:00 GMT -->
</html>