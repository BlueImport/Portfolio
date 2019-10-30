<?php

if($_POST["submit"]) {
    $recipient="kristian.claire.101@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Kristian Claire</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>



<form method="post" action="contact.php">
											<div class="fields">
												<div class="field half">
													<label for="the_name">Name</label>
													<input type="text" name="sender" id="name" />
												</div>
												<div class="field half">
													<label for="the_email">Email</label>
													<input type="email" name="senderEmail" id="email" />
												</div>
												<div class="field">
													<label for="the_message">Message</label>
													<textarea name="the_text_message" id="message" rows="4"></textarea>
												</div>
											</div>
											<ul class="actions">
												<li><input type="submit" name="the_submit" value="Send Message" class="button primary" /></li>
											</ul>
										</form>