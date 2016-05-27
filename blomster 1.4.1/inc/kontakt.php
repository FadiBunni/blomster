<?php
session_start();

require_once '../assets/libs/phpmailer/PHPMailerAutoload.php';
require_once '../assets/libs/phpmailer/class.phpmailer.php';

//Create variables:
$errors    = [];
$emailsent = [];

//Is the name, email, message set? if so create array:
if (isset($_POST['name'], $_POST['email'], $_POST['message'])) {

	$fields = [
		'Navn'    => $_POST['name'],
		'Email'   => $_POST['email'],
		'Besked' => $_POST['message']
	];
	//If data is empty print out an error:
	foreach ($fields as $field => $data) {
		if(empty($data)) {
			$errors[] = '' . $field . ' feltet er påkrævet.';
		}
	}
	//Validate the email adrres, if not valid error print "not valid"
	if(!empty($fields['Email'])) {

		if(!filter_var($fields['Email'], FILTER_VALIDATE_EMAIL)) {

			$errors[] = 'En gyldig email adresse er påkrævet.';
		}
	}

	//Connect to SMTP server:
	if(empty($errors)) {

		$mail = new PHPMailer;

		$mail->isSMTP();
		$mail->isHTML();
		$mail->SMTPAuth = true;
		$mail->SMTPDebug  = 0;
		$mail->CharSet = 'UTF-8';
		/*
		for hotmail/outlook = smtp.live.com
		for gmail = smtp.gmail.com
		*/
		$mail->Host       = 'web47.meebox.net';
		$mail->Port       = '465';
		$mail->SMTPSecure = 'ssl';
		$mail->Username   = 'soeborgblomster@xn--sborgblomster-bnb.dk';
		$mail->Password   = '231194aF';

		$mail->Subject    = 'Din besked er modtaget.';
		$mail->Body       = 'From: ' . $fields['Navn'] . ' (' . $fields['Email'] . ')<p>' . $fields['Besked'] . '</p>';
		$mail->FromName   = 'Søborgblomster';
		$mail->AddReplyTo($fields['Email'], $fields['Navn']);

		$mail->AddAddress('soeborgblomster@xn--sborgblomster-bnb.dk', 'Søborgblomster');

		//Thanks, the mail has been sent succesfully, if not try again later:

		if($mail->send()) {
			$emailsent[] = 'Tak! Vi har modtaget din besked, vi vil svare tilbage inden længe, hvis nødvendigt.';
			echo '<script type="text/javascript">
           			window.location = "http://soeborgblomster@xn--sborgblomster-bnb.dk/inc/kontakt_view.php"
     		 	 </script>';
		} else {
			$errors[] = 'Unskyld, kunne ikke sende en besked, prøv igen senere.';
		}
	}

} else {
	//You tried to enter 'contact.php' without permission, I sense a hacker here, bad boy!
	$errors[] = 'Noget gik galt, kontakt support.';
}
//Superglobal session create:
$_SESSION['errors']    = $errors;
$_SESSION['fields']    = $fields;
$_SESSION['emailsent'] = $emailsent;
header('Location: kontakt_view.php');
?>