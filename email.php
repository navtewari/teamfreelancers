<?php
session_cache_limiter( 'nocache' );
$subject = $_REQUEST['subject']; // Subject of your email
$to = "info@teamfreelancers.com";  //Recipient's E-mail

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['txtName'].'<'.$_REQUEST['txtEmail'] .'>'. "\r\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$message  = 'Name: ' . $_REQUEST['txtName'] . "<br>";
$message .= 'Email: ' . $_REQUEST['txtEmail'] . "<br>";
$message .= $_REQUEST['txtMsg'];

if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	header('Location:index.php');
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	header('Location:index.php');
}
?>