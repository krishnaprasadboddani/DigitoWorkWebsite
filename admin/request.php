<?php
include('include/header.php');
 ?>
 <?php
include ('dbcon.php');
$sql= "select * from request";
$result = mysqli_query($con, $sql);


?>
<?php
include('dbcon.php');

if(isset($_GET['del']))
{
    $id=intval($_GET['del']);
    $delqry="delete from request where id=$id";
        $del=mysqli_query($con, $delqry);
    if($del)
    {
        ?>
        <script>
        alert('Message Deleted Successfully');
        window.open('request.php','_self');
        </script>
        <?php
}
}
?>



        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title">Request </h1>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="dashboard.php"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Request</li>
                </ol>
                 
            </div>
            
           

            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                       
                      
                        <div class="table-responsive row" style="overflow-x: scroll;">
                            <table class="table table-bordered table-hover" id="datatable">
                                <thead class="thead-default thead-lg">
                                    <tr>
                                         <th>Id</th>
                                         <th>Name</th>
                                         <th>Phone.no</th>
                                         <th>Email</th>
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
                                        <td><?php echo $row['phone'];?></td>
                                        <td><?php echo $row['email'];?></td>
                                        <td><?php echo $row['upload_date'];?></td>
                                        

                                        
                                          
                                        
                                        
                                         <td><a href="request.php?del=<?php echo $row['id'];?>" onclick="return confirm(' Do you want to delete');"><i class="fa fa-trash"></i> Delete</a></td>
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
    
</body>


<!-- Mirrored from admincast.com/adminca/preview/admin_1/html/datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 May 2019 10:54:00 GMT -->
</html>