<?php
include ('../dbcon.php');
if (isset($_POST['submit']))
{
     $name = $_POST['name'];
     $middlename=$_POST['middlename'];
     $lastname=$_POST['lastname'];
     $dateofbirth=$_POST['dateofbirth'];
     $gender=$_POST['gender'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $qualification=$_POST['qualification'];
     $coursename=$_POST['coursename'];
     $yop=$_POST['yop'];
     $per=$_POST['per'];
     $cl=$_POST['cl'];
     $aoi=$_POST['aoi'];

     $file=$_FILES['file']['name'];
     $tempname=$_FILES['file']['tmp_name'];

  move_uploaded_file($tempname, "../img/$file");

  $sql_qry = "INSERT INTO intertform(`name`, `middlename`, `lastname`, `dateofbirth`, `gender`, `email`, `phone`, `qualification`,`coursename`,`yop`,`per`,`cl`,`aoi`,`file`)VALUES('$name','$middlename','$lastname','$dateofbirth','$gender','$email','$phone','$qualification','$coursename','$yop','$per','$cl','$aoi','$file')";

   $result =mysql_query($sql_qry);

   

   if ($result) 
   {
     ?>
          <script>
          alert('Form Filled Successfully');
          window.open('../intentform.php','_self');
          </script>
        <?php
   }
}

?>