<?php include 'dbcon.php'; 

$hms=$_GET['id'];
$res="select * from  bloger where id='$hms'"; 
$result = mysqli_query($con, $res);
$row1=mysqli_fetch_array($result);

$res="delete from bloger where id='$hms'";
$upload_dir = 'blog/'; // upload directory
unlink($upload_dir.$row1['s_image']);
$re=mysqli_query($con, $res);

if($re){
	header('Location:blog_view.php');
}


 ?>