<?php

$name_error = $email_error = $subject_error = $message_error = $caught_error = $success = "";
$name = $email = $message = $subject = $captcha = "";

if($_SERVER['REQUEST_METHOD'] === "POST"){
	if(empty($_POST["_name"])){
		$name_error = "Name is required.";
		$caught_error = "Message not sent.";
	} 
	else {
		$name = clean_input($_POST["_name"]);
		//Check is name contains only letters and spaces
		if (!preg_match("/^[a-z 'A-Z]*$/", $name)){
			$name_error = "Only letters and spaces allowed.";
			$caught_error = "Message not sent.";
		}
	}

	if(empty($_POST["_email"])){
		$email_error = "Email is required.";
		$caught_error = "Message not sent.";
	} 
	else {
		$email = clean_input($_POST["_email"]);
		//Check is namclean_inpute contains only letters and spaces
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$email_error = "Invalid email format";
			$caught_error = "Message not sent.";
		}
	}


	$subject = clean_input($_POST["_subject"]);
	

	if(empty($_POST["_message"])){
		$message_error = "Message is empty.";
		$caught_error = "Message not sent.";
	} 
	else {
		$message = clean_input($_POST["_message"]);
	}

	if($caught_error == "" and $name != "" and $email != "" and $message != ""){
		if(isset($_POST['recaptcha_response'])){
			//recaptcha verification variables
			$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    	$recaptcha_secret = '6LeJ3NsZAAAAAIUdwh1FzM2_yWNa4iGrQDlVbxdK';
			$recaptcha_response = $_POST['recaptcha_response'];
			
			$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    	$recaptcha = json_decode($recaptcha);

			if ($recaptcha->score >= 0.5) {
				$message_body = "";
				unset($_POST['submit']);
				foreach($_POST as $key => $value){
					$message_body .= "$key: $value\n";
					$to = 'austinpoulson@gmail.com';
				}
				if(mail($to, $subject, $message_body)){
					$success = "Message sent. Thank you for contacting me. I'll get back to you as soon as possible.";
					$name = $email = $message = $subject = "";
				}
			}
		}
	}
}

function clean_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}



?>