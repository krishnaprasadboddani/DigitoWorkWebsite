<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$sql_update="update admin set username='$username', email='$email' where id='1'";
		$update=mysqli_query($con, $sql_update);
if($update)
{
		?>
		<script>
		alert('Profile Updated Successfully');
		window.open('profile.php','_self');
		</script>
		<?php
	}
	}



?>