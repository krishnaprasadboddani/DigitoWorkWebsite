<?php
include ('../dbcon.php');
if (isset($_POST['submit']))
{
     $name=$_POST['name'];
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
     $critical=$_POST['critical'];
     $primarys=$_POST['primarys'];
     $cl=$_POST['cl'];
     $pl=$_POST['pl'];
     $company_name=$_POST['company_name'];
     $start=$_POST['start'];
     $end=$_POST['end'];
     $skills=$_POST['skills'];
     $domain_experiece=$_POST['domain_experiece'];

     $file=$_FILES['file']['name'];
     $tempname=$_FILES['file']['tmp_name'];

  move_uploaded_file($tempname, "../img/$file");

  $sql_qry = "INSERT INTO experienceform(`name`, `middlename`, `lastname`, `dateofbirth`, `gender`, `email`, `phone`, `qualification`,`coursename`,`yop`,`per`,`critical`,`primarys`,`cl`,`pl`,`company_name`,`start`,`end`,`skills`,`domain_experiece`,`file`)VALUES('$name','$middlename','$lastname','$dateofbirth','$gender','$email','$phone','$qualification','$coursename','$yop','$per','$critical','$primarys','$cl','$pl','$company_name','$start','$end','$skills','$domain_experiece','$file')";

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