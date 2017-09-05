<?php
ob_start();
$recapValidation;
$response_recapcha = $_POST['g-recaptcha-response'];
	if(isset($response_recapcha)&& $response_recapcha){
		$secret = "6LcAJS0UAAAAAAxBlebpbpx132eGG8HIEADE1M52";
		$ip = $_SERVER['REMOTE_ADDR'];
		$validation_server = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response_recapcha&remoteip=$ip");

		//var_dump($validation_server);

		$readJson = json_decode($validation_server,TRUE);

		$recapValidation =  $readJson["success"];

	}
require 'PHPMailerAutoload.php';
$nombre = $_POST["nombre"];
$email = $_POST["email"];
// $spam= $_POST["spam"];
$telefono = $_POST["telefono"];
// $consulta = $_POST["consulta"];
// $organizacion = $_POST["organizacion"];
$perfil = $_POST["perfil"];
$cargo = $_POST["cargo"];
$archivo = $_FILES['archivo'];
$validation_file = true;


//echo $asunto2;

$asunto .="Nueva solicitud de contacto";
$mailing .="Se ha recibido una nueva solicitud de contacto de: ".$nombre." <br> Número de Contacto: ".$telefono. " <br> Email: ".$email."  <br> Cargo: ".$cargo."  <br> Perfil: ".$perfil." \n";

if($archivo['size'] > 5000000)
{
	header ("Location: ./workWithUs.php?res=size");
	$validation_file = false;
}
if($archivo['type'] != "application/pdf" && $archivo['type'] !=  "application/vnd.openxmlformats-officedocument.wordprocessingml.document" )
{
	header ("Location: ./workWithUs.php?res=type");
	$validation_file = false;
}

$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->IsHTML(true);
$mail->Host = "smtp.gmail.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Definmos la seguridad como TLS
$mail->SMTPSecure = 'ssl';
//Username to use for SMTP authentication
$mail->Username = "correo@casilla.com"; // correo que va a enviar los mails
//Password to use for SMTP authentication
$mail->Password = "password";
//Set who the message is to be sent from
$mail->setFrom('camigolden@osom.digital'); // correo que va a enviar los mails
//Set an alternative reply-to address
$mail->addReplyTo('camigolden@osom.digital', 'Team'); // correo que va a recibir los mails
//Set who the message is to be sent to
$mail->addAddress('camigolden@osom.digital', 'Team'); // correo que va a recibir los mails
//Set the subject line
$mail->Subject = $asunto;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('<html><body>'.$mailing.'</body></html>');
//Replace the plain text body with one created manually
$mail->AltBody = 'Se ha recibido una nueva solicitud de contacto de: ".$nombre." Número de Contacto: ".$telefono. " Email: ".$email. " Perfil: ".$perfil';
//now Attach all files submitted
//loop the Attachments to be added ...
$mail->AddAttachment($archivo['tmp_name'], $archivo['name']);

if($validation_file)
{
//send the message, check for errors
	if($recapValidation)
	{
		if (!$mail->send()) {
			ob_end_clean();
			header ("Location: ./workWithUs.php?res=err");
		    // echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
			ob_end_clean();
		    header ("Location: ./workWithUs.php?res=ok");
			// echo $archivo['name'];
		}
	}
	else {
		header ("Location: ./workWithUs.php?res=recap");
		// echo "eso no es idiota";
	}
}



?>
