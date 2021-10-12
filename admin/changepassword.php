
<?php
include('include/header.php');
 ?>
	    
	    <div class="content-wrapper">
	                    


<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<style type="text/css">
fieldset {
	width:500px;
	border:5px dashed #CCCCCC;
	margin-left:0 auto;
	border-radius:5px;
}
 
legend {
	color: blue;
	font-size: 25px;
}
 
dl {
	float: right;
	width: 390px;
}
 
dt {
	width: 180px;
	color: brown;
	font-size: 19px;
}
 
dd {
	width:200px;
	float:left;
}
 
dd input {
	width: 200px;
	border: 2px dashed #DDD;
	font-size: 15px;
	text-indent: 5px;
	height: 28px;
}
 
.btn {
	color: #fff;
	background-color: dimgrey;
	height: 38px;
	border: 2px solid #CCC;
	border-radius: 10px;
	float: right;
}
 
</style>
</head>
 
<body>
	<fieldset>
		<legend>Change Password</legend>
	

	<?php 
		


		if(isset($_POST['re_password']))
		{
		include('dbcon.php');

		$old_pass=@$_POST['old_pass'];
		$new_pass=@$_POST['new_pass'];
		$re_pass=@$_POST['re_pass'];
		
		$query="select password from admin where id='1'";
		$result=mysqli_query($con, $query);
		while($row=mysqli_fetch_array($result)){
			$pass=$row['password'];
			if($pass==$old_pass){

				if($new_pass==$re_pass){
					$q="update admin set password='$re_pass' where id='1'";
					$update=mysqli_query($con, $q);

					if($update){
						echo "<script>alert('Password Update Sucessfully'); </script>";
					}
					else{
						echo "<script>alert('Password denied');</script>";
					}

				}else{
					echo "<script>alert('Your new and Retype Password is not match');</script>";
				
				}
			}else{
						echo "<script>alert('Old password do not match');</script>";
				}
		}
		
}


?>
 
	<form method="post">
		<dl>
			<dt>
				Old Password
			</dt>
				<dd>
					<input type="password" name="old_pass" placeholder="Old Password..." value="" required />
				</dd>
		</dl>
		<dl>
			<dt>
				New Password
			</dt>
				<dd>
					<input type="password" name="new_pass" placeholder="New Password..." value="" required />
				</dd>
		</dl>
		<dl>
			<dt>
				Confirm Password
			</dt>
				<dd>
					<input type="password" name="re_pass" placeholder="Retype New Password..." value="" required />
				</dd>
		</dl>
 
		<p align="center">
			<input type="submit" class="btn" value="Reset Password" name="re_password" />
		</p>
	</form>
	</fieldset>
</body>
</html>
 

	    <?php
include('include/footer.php');
 ?>
	                        
</body>
 
</html>