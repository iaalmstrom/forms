<?php
  
	$fname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$country = $_POST['country'];
	$subject = $_POST['subject'];

  $subject.= "\r\n--------------\r\n";
  $subject.= " Firstname=" . $fname .  "\r\n";
  $subject.= " Lastname=" . $lastname .  "\r\n";
  $subject.= " Country=" . $country .  "\r\n";
	
$from = $_POST['from'];
 
if (isset($_POST['to'])){
	$to = $_POST['to'];
	
	$headers = "From:" . $from .  "\r\n";
	$headers.= "Content-Type: text/plain;charset=UTF-8";
	
	if ( mail($to, "Mail from your form", $subject, $headers)) {
      echo("Email successfully sent to: " . $to . "...");
   } else {
      echo("Email sending FAILED...to: " . $to);
   }
} 
else {
	echo("Missing email adress to send email to");
}

?>