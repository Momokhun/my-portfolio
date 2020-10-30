お問い合わせいただきありがとうございました！


<?php
	// $to = "nichkhun0304@yahoo.co.jp";
	// $subject = "Email from my website";
	// $body = "the user typed in: " . $_POST['email'];
    // mail($to, $subject, $body);
    $userName 		= $_POST['name'];
	$userEmail	 	= $_POST['email'];
	$userMessage 		= $_POST['message'];

	$to 			= "nichkhun0304@yahoo.co.jp";
	$subject 		= "Email from my website";
	$body 			= "Information Submitted:";

	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;

	mail($to, $subject, $body);
?>