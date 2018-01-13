<?php
    $emailTo="adityamomentum@gmail.com";
	$subject="Hi Aditya";
	$body="How are you Aditya?";
	$headers="From:aditya@localhost.com";
    if(mail($emailTo, $subject, $body, $headers))
		echo "e-mail was succesfully sent";
	else echo "e-mail not sent";
?>