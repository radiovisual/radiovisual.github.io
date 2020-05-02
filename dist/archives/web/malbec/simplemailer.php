<?
// simplemailer.php
// Flash MX Studio - Steve Webster

// Set recipient for email
$recipient = "wuergler@gmail.com, ryan@worldsend.com";


// Remove methods from data...
unset($HTTP_POST_VARS['onLoad']);
unset($HTTP_POST_VARS['clear']);

// Setup body text
$body = "The following was sent from the Malbec Website...\n\n";

// Add each key/value pair to the body text
foreach($HTTP_POST_VARS as $key => $value) {
	$key = substr($key, 0, -4);
	$body .= "$key: $value\n";
}

// Set from address
$from = $HTTP_POST_VARS['name_txt'] . " <" . $HTTP_POST_VARS['email_txt'] . ">";

// Send email
mail($recipient, $HTTP_POST_VARS['subject_txt'], $body, "From: $from");

?>