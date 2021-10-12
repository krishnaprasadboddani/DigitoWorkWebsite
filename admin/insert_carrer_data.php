<?php

include('dbcon.php');

$raju = "heading";
$laltu = "collapse";
$defaultraju = "1";
$defaullaltu = "2";

if(isset($_POST['submit']))
{
$heading=$_POST['heading'];
$description=$_POST['description'];
$description1=$_POST['description1'];
$description2=$_POST['description2'];
$description3=$_POST['description3'];
$description4=$_POST['description4'];


$sql_qry="INSERT INTO `career`(`heading`, `description`, `description1`, `description2`, `description3`, `description4`, `status`) VALUES ('$heading','$description','$description1','$description2','$description3','$description4', 'Enable')";
$res=mysqli_query($con, $sql_qry);
$getlastid = mysqli_insert_id($con);

$heading_unique = $getlastid+$defaultraju;
$heading_auto = $raju.$heading_unique;

$collapse_unique = $getlastid+$defaullaltu;
$collapse_auto = $laltu.$collapse_unique;

$update_query = "UPDATE career SET one = '$heading_auto', two= '$collapse_auto' WHERE id = '$getlastid' ";
$update_data = mysqli_query($con, $update_query);

if($update_data)
{
   ?>
    <script>
      alert('New Career Category Added Successfully....');
      window.open('career.php','_self');
    </script>
    <?php
}


}




?>