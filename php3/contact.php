<?php
error_reporting(0);
if(isset($_POST['submit']))
{
    include ('../dbcon.php');
   
     $name=$_POST['name'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     
/*
   
/*
 * ------------------------------------
 * Registration Form Configuration
 * ------------------------------------
 */
 
$to    = "careers@digitowork.com"; // <--- Your email ID here

$server_email = 'careers@digitowork.com';  // Your server email to authenticate outgoing emails. eg: name@yourdomain.com

/*
 * ------------------------------------
 * END CONFIGURATION
 * ------------------------------------
 */
$name=$_POST['name']; 
$email     = $_POST["email"];
$phone    = $_POST["phone"];
$website  = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$website = dirname($website);
$website = dirname($website);

if (isset($email) && isset($name)) {

  $subject  = "Contact form : $name"; // <--- Contact for Subject here.
 
  $msg      = 'Hello Admin, <br/> <br/> Here are the details of request in career page:';
  $msg     .= ' <br/> <br/> <table border="1" cellpadding="6" cellspacing="0" style="border: 1px solid  #eeeeee;">';
  foreach ($_POST as $label => $value) {
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
    //echo $timestamp;exit;
   //$sql_qry = "INSERT INTO request( `email`,`phone`,'upload_date')VALUES('$email','$phone','$timestamp')";
   $sql_qry ="INSERT INTO request(name,email,phone,upload_date) VALUES('$name','$email','$phone','$timestamp')";
   //echo $sql_qry; exit;
        $result=mysqli_query($con, $sql_qry);
if($result)
{
         ?>
        
    <script>
          alert('Request Sent Successfully. We will revert soon. Thank You.');
          window.open('../index.php','_self');
          </script>
    <?php
    }
    else
    {
        echo "error";
    }
}


} // END isset

 
}
?>
