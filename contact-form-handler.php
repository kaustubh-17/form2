<?php
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$no = $_POST['no'];
	$profession = $_POST['profession'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];

	$email_from = 'kaustubh765@gmail.com';
	$email_subject = "Estah Form Submission";
	
	$email_body = "User First Name: $first.\n".
			"User Last Name: $last.\n".
			"User email: $email.\n".
			"User Number: $no.\n".
			"User Profession: $profession.\n".
			"User City: $city.\n".
			"User Gender: $gender.\n"

	$to = "kaustubh@gmail.com";

	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $email \r\n";
	mail($to, $email_subject, $email_body, $headers);
	header("Location: index.html");

?>