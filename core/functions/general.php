<?php
function contact_us($contact_data) {
	array_walk($contact_data, 'array_sanitize');
	$fields = '`' . implode('`, `', array_keys($contact_data)) . '`';
	$data = '\'' . implode('\', \'', $contact_data) . '\'';
	
	mysql_query("INSERT INTO `contactus` ($fields) VALUES ($data)");
	//email('rajsuraj78@gmail.com', 'Contact us mail', "Name:" . $contact_data['name'] . "<br><br>Email:" . $contact_data['email'] . "<br><br>Phone No:" . $contact_data['phone_no'] . "<br><br>Message:" .$contact_data['message'] . "");
}

/*function email($to, $subject, $body){
	require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'teachinitiate@gmail.com';                 // SMTP username
$mail->Password = 'Teachme12345';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('tiltedslate@gmail.com', 'Tilted Slate');
$mail->addAddress($to);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('tiltedslate@gmail.com', 'Tilted Slate');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $body;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
}

/*function emailvhost($to, $subject, $body){
	mail($to, $subject, $body);
}*/
/*
function logged_in_redirect() {
	if((logged_in() === true) or (logged_in_agency() === true)) {
		header("Location: index.php");
		exit();
	}
}

function protect_page() {
	if(logged_in() === false) {
		header("Location: loginhome.php");
		exit();
	}
}
function protect_page_agency() {
	if(logged_in_agency() === false) {
		header("Location: loginagency.php");
		exit();
	}
}
*/
function array_sanitize(&$item) {
	$item = mysql_real_escape_string($item);
}

function sanitize($data){
	return mysql_real_escape_string($data);
}
function output_errors($errors) {
	$output = array();
	foreach($errors as $error){
		$output[] = '<li>' . $error . '</li>';
	}
	return '<ul>' . implode('', $output) . '</ul>';
}


?>