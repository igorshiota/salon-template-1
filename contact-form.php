<?php 

	
	if (isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$message = $_POST['message'];

		$mailTo = "igor@igorshiota.com";
		$headers = "From: " . $email;
		$txt = "You have received an e-mail from " . $name . ".\n\n" . $message;

		mail($mailTo, $txt, $headers);
		header("Location: index.php?mailsend");



	}

