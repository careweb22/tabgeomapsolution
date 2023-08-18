<?php

if(isset($_POST['email'])) {			// CHANGE THE TWO LINES BELOW	$mail->Host = "mail.globalfpo.com.com";//mail server hostname$mail->SMTPAuth = true;//$mail->SMTPSecure = "ssl";$mail->Port = 587;$mail->Username = "noreply@globalfpo.com";//email account$mail->Password = "globalfpo@123";//above email account's password

	

	// CHANGE THE TWO LINES BELOW

	$email_to = "info@tabgeo-mapsolution.co.in";

	

	$email_subject = "website Email Contact form Submitted ";

	

	

	function died($error) {

		// your error code can go here

		echo "We're sorry, but there's errors found with the form you submitted.<br /><br />";

		echo $error."<br /><br />";

		echo "Please go back and fix these errors.<br /><br />";

		die();

	}

	

	// validation expected data exists

	if(!isset($_POST['name']) ||

		!isset($_POST['email']) ||

		!isset($_POST['phone']) ||

		!isset($_POST['address']) ||

		!isset($_POST['message'])) {

		died('We are sorry, but there appears to be a problem with the form you submitted.');		

	}

	

	$name = $_POST['name']; // required

	$email = $_POST['email']; // required

		$phone = $_POST['phone']; // required

		$address = $_POST['address']; // required

	$message = $_POST['message']; // required

	

	

	$error_message = "";

	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email)) {

  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';

  }

	$string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$name)) {

  	$error_message .= 'The Name you entered does not appear to be valid.<br />';

  }

  if(!preg_match($string_exp,$message)) {

  	$error_message .= 'The message you entered do not appear to be valid.<br />';

  }

  $email_message = "Form details below.\n\n";

	

	function clean_string($string) {

	  $bad = array("content-type","bcc:","to:","cc:","href");

	  return str_replace($bad,"",$string);

	}

	

	$email_message .= "Name: ".clean_string($name)."\n";

	$email_message .= "Email: ".clean_string($email)."\n";

	$email_message .= "Phone: ".clean_string($phone)."\n";

	$email_message .= "Address: ".clean_string($address)."\n";

	$email_message .= "Message: ".clean_string($message)."\n";

	







	

	

// create email headers

$from = "tabgeo-mapsolution.co.in ";

$headers = "From:" . $from;

'Reply-To: '.$email."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);  

?>



<!-- place your own success html below -->



<meta http-equiv="refresh" content="0; url=http://tabgeo-mapsolution.co.in">



<?php

}

die();

?>