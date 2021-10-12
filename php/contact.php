<?php
error_reporting(0);
if(isset($_POST['submit']))
{
    include ('../dbcon.php');
   
   $qualification  = $_POST['qualification'];
   $coursename=@$_POST['coursename'];
   $lal = $_POST['lal'];
   $per=@$_POST['per'];
   
   $company_name=@$_POST['company_name'];
   $start=@$_POST['start'];
   $end=@$_POST['end'];
   $skills=@$_POST['skills'];
  $emailll=array(
        'name'=>$_POST['name'],
        'middlename' => $_POST['middlename'],
    	'lastname' => $_POST['lastname'],
    	'dateofbirth' => $_POST['dateofbirth'],
    	'gender' => $_POST['gender'],
    	'email' => $_POST['email'],
    	'phone' => $_POST['phone'],
        'qui' => implode(', ',$qualification),
        'coursenm' => implode(', ',$coursename),
        'year' => implode(', ',$lal),
        'percen' => implode(', ',$per),
        'company_name' => implode(', ',$company_name),
        'start' => implode(', ',$start),
        'end' => implode(', ',$end),
        'skills' => implode(', ',$skills),
    	'cl' => $_POST['cl'],
    	'pl' => $_POST['pl']
    	 
      );
  
     $name = $_POST['name'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$dateofbirth = $_POST['dateofbirth'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];


	$qualification  = $_POST['qualification'];
	
	$qui = implode(', ',$qualification);

	


    $coursename=$_POST['coursename'];
	
	 $coursenm = implode(', ',$coursename);
	   



 	$lal = $_POST['lal'];

 	    $year = implode(', ',$lal);
 



    $per=$_POST['per'];
	
	   $percen = implode(', ',$per);
	



	$critical = $_POST['critical'];
	$primarys = $_POST['primarys'];
	$cl = $_POST['cl'];
	$pl = $_POST['pl'];




    $company_name=$_POST['company_name'];

	   $companynm = implode(', ',$company_name);
	

    $start=$_POST['start'];

	   $starttm = implode(', ',$start);
	

    $end=$_POST['end'];

	   $endtm = implode(', ',$end);
	

    $skills=$_POST['skills'];

	   $allskills = implode(', ',$skills);
	

    $domain_experiece=@$_POST['domain_experiece'];

	   $domainexperiece = implode(', ',$domain_experiece);
	
	
	
	
	 
	 $file = $_FILES['file']['name'];
     $tempname=$_FILES['file']['tmp_name'];

     move_uploaded_file($tempname, "../file-experience/$file");
     
/*
   
/*
 * ------------------------------------
 * Registration Form Configuration
 * ------------------------------------
 */
 
$to    = "careers@digitowork.com"; // <--- Your email ID here navaneethas26@gmail.com

$server_email = 'careers@digitowork.com';  // Your server email to authenticate outgoing emails. eg: name@yourdomain.com

/*
 * ------------------------------------
 * END CONFIGURATION
 * ------------------------------------
 */
 
$name     = $_POST["name"];
$phone    = $_POST["phone"];
$website  = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$website = dirname($website);
$website = dirname($website);

if (isset($email) && isset($name)) {

  $subject  = "Contact form : $name"; // <--- Contact for Subject here.
 
  $msg      = 'Hello Admin, <br/> <br/> Here are new application from the Experience form details:';
  $msg     .= ' <br/> <br/> <table border="1" cellpadding="6" cellspacing="0" style="border: 1px solid  #eeeeee;">';
  foreach ($emailll as $label => $value) {
      $msg .= "<tr><td width='100'>". ucfirst($label) . "</td><td width='300'>" . $value . " </tr>";
  }
  $msg      .= " </table> <br> --- <br>This e-mail was sent from $website";
 
/*
 * ------------------------------------
 * Send Mail via PHP Mailer
 * ------------------------------------
 */

date_default_timezone_set('Etc/UTC');

require 'phpmailer/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;

//Using Aamazon AWS SES SMTP account
$mail->IsSMTP();
//$mailer->SMTPDebug = 2;
$mail->SMTPAuth   = true;
$mail->SMTPSecure = 'tls';
$mail->Host       = 'smtp.gmail.com';
$mail->Username   = 'digitowork0@gmail.com';
$mail->Password   = 'Digitowork@123';
$mailer->Port = 587;
//Set who the message is to be sent from
$mail->setFrom($server_email, $name);
//Set an alternative reply-to address
$mail->addReplyTo($email, $name);
//Set who the message is to be sent to
$mail->addAttachment("../file-experience/".$_FILES['file']['name']);
$mail->addAddress($to);
//Set the HTML True
$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $msg;
//send the message, check for errors
//echo $mail->send(); die;
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit;
} else if ($mail->send()) {
    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date("Y-m-d H:i:s");
 //  $insert_query = "INSERT INTO `experienceform`(`name`, `middlename`, `lastname`, `dateofbirth`, `gender`, `email`, `phone`, `qualification`, `coursename`, `yop`, `per`, `critical`, `primarys`, `cl`, `pl`, `company_name`, `start`, `end`, `skills`, `domain_experiece`, `file`,'upload_date') VALUES('$name', '$middlename', '$lastname', '$dateofbirth', '$gender', '$email', '$phone', '$qui', '$coursenm', '$year', '$percen', '$critical', '$primarys', '$cl', '$pl', '$companynm', '$starttm', '$endtm', '$allskills', '$domainexperiece', '$file', '$timestamp')";
   $insert_query = "INSERT INTO experienceform(name,middlename,lastname,dateofbirth,gender,email,phone,qualification,coursename,yop,per,critical,primarys,cl,pl,company_name,start,tmend,skills,domain_experiece,file,upload_date) VALUES('$name', '$middlename', '$lastname', '$dateofbirth', '$gender', '$email', '$phone', '$qui', '$coursenm', '$year', '$percen', '$critical', '$primarys', '$cl', '$pl', '$companynm', '$starttm', '$endtm', '$allskills', '$domainexperiece', '$file', '$timestamp')";
   //echo $insert_query; die;
$result = mysqli_query($con, $insert_query);


if($result == '1')
  {
     $to = "$email";
     $subject = "Thanks for Apply";
     $txt = "Thanks for Registration with Us....!";
     $headers = "From: ";
     mail($to,$subject,$txt,$headers);
     
    ?>
    <script type='text/javascript'>alert('Successfully...!');
    window.location.href='../experienceform.php'</script>
    <?php
    }
    else
    {
        echo "error";
    }

} // END isset

}
}
?>