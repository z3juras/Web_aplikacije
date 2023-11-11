<?php
echo '<!DOCTYPE HTML>
<html lang="hr">
	<head>
		<title>Primjeri</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Alen Šimec">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			body { margin: 1em; }
			form { width: 300px; }
		</style>
	</head>
	<body>
		<h1>Contact form</h1>
		<p>Firstname: '.$_POST['firstname'] . '</p>
		<p>Lastname: '.$_POST['lastname'] . '</p>
		<p>Email: '.$_POST['email'] . '</p>
		<p>Country: '.$_POST['country'] . '</p>
		<p>Message: '.$_POST['message'] . '</p>
		<p><a href="contactform.html">Back to form!</a></p>';

		$body = '<h1>Contact form</h1>
		<p>Firstname: '.$_POST['firstname'] . '</p>
		<p>Lastname: '.$_POST['lastname'] . '</p>
		<p>E-mail: '.$_POST['email'] . '</p>
		<p>Country: '.$_POST['country'] . '</p>
		<p>Message: '.$_POST['message'] . '</p>';

		
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: alen@tvz.hr' . "\r\n";
		mail($_POST['email'], 'My online form', $body, $headers);
	echo '</body>
</html>';
?>
