<?php
error_reporting(0);
if(isset($_POST['submit']))
{
    include ('../dbcon.php');
    
   
  //print_r($_POST);
 // EXIT();
  $qualification  = $_POST['qualification'];
   $coursename=@$_POST['coursename'];
   $lal = $_POST['passyear'];
   $per=@$_POST['per'];
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
    	'cl' => $_POST['cl'],
    	'aoi' => $_POST['aoi']
    	 
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
 	//print_r($qui);
 	

	


    $coursename=@$_POST['coursename'];
	
 	 $coursenm = implode(', ',$coursename);
	   



 	$lal = $_POST['passyear'];

 	    $year = implode(', ',$lal);
 



    $per=@$_POST['per'];
	
	   $percen = implode(', ',$per);
	

	$cl = $_POST['cl'];
	$aoi = $_POST['aoi'];




	
	
	
	
	 
	 $file = $_FILES['file']['name'];
     $tempname=$_FILES['file']['tmp_name'];

     move_uploaded_file($tempname, "../file-fresher/$file");
     
/*
   
/*
 * ------------------------------------
 * Registration Form Configuration
 * ------------------------------------
 */
 
$to    = "careers@digitowork.com"; // <--- Your email ID here  navaneethas26@gmail.com

$server_email = 'careers@digitowork.com';  // Your server email to authenticate outgoing emails. eg: name@yourdomain.com

/*
 * ------------------------------------
 * END CONFIGURATION
 * ------------------------------------
 */
 
$name     = $_POST["name"];
$email    = $_POST["email"];
$website  = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$website = dirname($website);
$website = dirname($website);

if (isset($email) && isset($name)) {

  $subject  = "Contact form : $name"; // <--- Contact for Subject here.
 
  $msg      = 'Hello Admin, <br/> <br/> Here are new application from the Fresher Form details:';
  $msg     .= ' <br/> <br/> <table border="1" cellpadding="6" cellspacing="0" style="border: 1px solid  #eeeeee;">';
  foreach ($email as $label => $value) {
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
$mail->Port = 587;
//Set who the message is to be sent from
$mail->setFrom($server_email, $name);
//Set an alternative reply-to address
$mail->addReplyTo($email, $name);

$mail->addAttachment("../file-fresher/".$_FILES['file']['name']);
//Set who the message is to be sent to
$mail->addAddress($to);
//Set the HTML True
$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $msg;

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} if ($mail->send()) {
    date_default_timezone_set('Asia/Kolkata');
    $timestamp = date("Y-m-d H:i:s");

$insert_query = "INSERT INTO career_form(name, middlename, lastname, dateofbirth, gender, email, phone, qualification, coursename, yop, per, cl, aoi, file, upload_date) VALUES('$name', '$middlename', '$lastname', '$dateofbirth', '$gender', '$email', '$phone', '$qui', '$coursenm', '$year', '$percen', '$cl', '$aoi', '$file', '$timestamp')";
//print_r($insert_query); exit();
$result = mysqli_query($con, $insert_query);
if($result == 1)
  {
     $to = "$email";
     $subject = "Thanks for Apply";
     $txt = "Thanks for Registration with Us....!";
     //$headers = "From: farm@digitohub.com";
     
     $headers = "From: farm@navaneetha.co" . "\r\n" .
     "CC: farm@navaneetha.co";
     
     mail($to,$subject,$txt,$headers);
     
    ?>
    <script type='text/javascript'>alert('Successfully...!');
    window.location.href='../career.php'</script>
    <?php
    }
    else
    {
        echo "error";
    }

}
}
}
?>