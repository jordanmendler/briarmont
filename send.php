<?php

require_once "Mail.php"; // Requires PHP PEAR Mail package (php-mail on debian wheezy)


$email_to = "webmaster@thevelozgroup.com"; // change with your email
$name = $_POST['name']; 
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = $name . ' <' . $email . '>';



$host = "ssl://smtp.gmail.com";
$port = "465";
$username = "contact@thevelozgroup.com";
$password = "897189al!@#!kjasdf$@!$";


$headers = array ('From' => $from,
'To' => $email_to,
'Reply-To:' => $from,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array (	'host' => $host,
	'port' => $port,
	'auth' => true,
	'username' => $username,
	'password' => $password)
);

$mail = $smtp->send($email_to, $headers, $message);

if (PEAR::isError($mail))
{
	echo "failed"; 
}
else
{
	echo "success"; 
}

?>
