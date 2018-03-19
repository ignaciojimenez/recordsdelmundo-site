<?

/////////////////////////////////////////////////////////////////////////////////////////////INICIO MAIL A ENTRADAS
$from = "entradas@estoescasa.com";
$namefrom = "Estoescasa Entradas";
$to = "entradas@estoescasa.com";
$subject = "Reserva Entradas concierto AT! [automatico]";
$message = "";
$smtpServer = "mail.estoescasa.com";   //ip address of the mail server.  This can also be the local domain name
$port = "25";                     // should be 25 by default, but needs to be whichever port the mail server will be using for smtp
$timeout = "45";                 // typical timeout. try 45 for slow servers
$username = "entradas@estoescasa.com"; // the login for your smtp
$password = "estosontickets";            // the password for your smtp
$localhost = "www.estoescasa.com";       // Defined for the web server.  Since this is where we are gathering the details for the email
$newLine = "\r\n";             // aka, carrage return line feed. var just for newlines in MS

$destinatario = "";


foreach ($_GET as $key => $value){
	if ($key != "Email"){
		$message .= $value . "<br>";
	}
	else{
		$destinatario .= $value;
	}
}

//connect to the host and port
$smtpConnect = fsockopen($smtpServer, $port, $errno, $errstr, $timeout);
$smtpResponse = fgets($smtpConnect, 4096);
if(empty($smtpConnect)) {
   //$output = "Failed to connect: $smtpResponse";
   $output = "Por alg&uacute;n problema interno no se ha podido realizar la reserva <br>Int&eacute;ntalo m&aacute;s tarde o a trav&eacute;s de correo electr&oacuteMnico a <a href =\"mailto:entradas@estoescasa.com\">entradas@estoescasa.com<br> Gracias";
   echo $output;
}
else {
   $logArray['connection'] = "<p>Connected to: $smtpResponse";
   //echo "<p />connection accepted<br>".$smtpResponse."<p />Continuing<p />";
}

//you have to say HELO again after TLS is started
   fputs($smtpConnect, "HELO $localhost". $newLine);
   $smtpResponse = fgets($smtpConnect, 4096);
   $logArray['heloresponse2'] = "$smtpResponse";

//request for auth login
fputs($smtpConnect,"AUTH LOGIN" . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['authrequest'] = "$smtpResponse";

//send the username
fputs($smtpConnect, base64_encode($username) . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['authusername'] = "$smtpResponse";

//send the password
fputs($smtpConnect, base64_encode($password) . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['authpassword'] = "$smtpResponse";

//email from
fputs($smtpConnect, "MAIL FROM: <$from>" . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['mailfromresponse'] = "$smtpResponse";

//email to
fputs($smtpConnect, "RCPT TO: <$to>" . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['mailtoresponse'] = "$smtpResponse";

//the email
fputs($smtpConnect, "DATA" . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['data1response'] = "$smtpResponse";

//construct headers
$headers = "MIME-Version: 1.0" . $newLine;
$headers .= "Content-type: text/html; charset=iso-8859-1" . $newLine;
$headers .= "To: <$to>" . $newLine;
$headers .= "From: $namefrom <$from>" . $newLine;
$headers .= "Date: ".date("D, d M Y H:i:s O") . $newLine;
$headers .= "Subject: $subject" . $newLine;

//observe the . after the newline, it signals the end of message
fputs($smtpConnect, "$headers\r\n\r\n" . $message . "\r\n.\r\n");

$smtpResponse = fgets($smtpConnect, 4096);
$logArray['data2response'] = "$smtpResponse";

// say goodbye
fputs($smtpConnect,"QUIT" . $newLine);
$smtpResponse = fgets($smtpConnect, 4096);
$logArray['quitresponse'] = "$smtpResponse";
$logArray['quitcode'] = substr($smtpResponse,0,3);
fclose($smtpConnect);
//a return value of 221 in $retVal["quitcode"] is a success

$gracias = "<p>Muchas Gracias!</p>";
$mensaje1 = "<p>Se han reservado las entradas para las siguientes personas:</p>";
$nombres = $message;
$mensaje2 = "<br><p>Si tienes cualquier problema o los nombres no son correctos ponte en contacto con <a href='mailto:entradas@estoescasa.com'>entradas@estoescasa.com</a></p>";
$mensaje3 = "<p>Recuerda que esta reserva s&oacute;lo te da derecho a contar con reducci&oacute;n en el precio de la entrada, pero que el acceso a la sala est&aacute; limitado por el aforo de la misma";

if ($destinatario != ""){
	$mensaje4 = "<p>Se ha enviado un correo electr&oacute;nico con los datos a <a href='mailto:$destinatario'>$destinatario</a></p>";
}
else{
	$mensaje4 = "";
}
$returnmessage = $gracias . $mensaje1 . $nombres . $mensaje2 . $mensaje3 . $mensaje4 ;
//print_r($logArray);
print_r($returnmessage);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////FIN TO ENTRADAS

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////START TO REMITENTE

if ($destinatario != ""){
	$to = $destinatario;
	$message = $gracias . $mensaje1 . $nombres . $mensaje2 . $mensaje3;

	//connect to the host and port
	$smtpConnect = fsockopen($smtpServer, $port, $errno, $errstr, $timeout);
	$smtpResponse = fgets($smtpConnect, 4096);
	if(empty($smtpConnect)) {
	   //$output = "Failed to connect: $smtpResponse";
	   $output = "Por alg&uacute;n problema interno no se ha podido realizar la reserva <br>Int&eacute;ntalo m&aacute;s tarde o a trav&eacute;s de correo electr&oacuteMnico a <a href =\"mailto:entradas@estoescasa.com\">entradas@estoescasa.com<br> Gracias";
	   echo $output;
	}
	else {
	   $logArray['connection'] = "<p>Connected to: $smtpResponse";
	   //echo "<p />connection accepted<br>".$smtpResponse."<p />Continuing<p />";
	}

	//you have to say HELO again after TLS is started
	   fputs($smtpConnect, "HELO $localhost". $newLine);
	   $smtpResponse = fgets($smtpConnect, 4096);
	   $logArray['heloresponse2'] = "$smtpResponse";

	//request for auth login
	fputs($smtpConnect,"AUTH LOGIN" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['authrequest'] = "$smtpResponse";

	//send the username
	fputs($smtpConnect, base64_encode($username) . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['authusername'] = "$smtpResponse";

	//send the password
	fputs($smtpConnect, base64_encode($password) . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['authpassword'] = "$smtpResponse";

	//email from
	fputs($smtpConnect, "MAIL FROM: <$from>" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['mailfromresponse'] = "$smtpResponse";

	//email to
	fputs($smtpConnect, "RCPT TO: <$to>" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['mailtoresponse'] = "$smtpResponse";

	//the email
	fputs($smtpConnect, "DATA" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['data1response'] = "$smtpResponse";

	//construct headers
	$headers = "MIME-Version: 1.0" . $newLine;
	$headers .= "Content-type: text/html; charset=iso-8859-1" . $newLine;
	$headers .= "To: <$to>" . $newLine;
	$headers .= "From: $namefrom <$from>" . $newLine;
	$headers .= "Date: ".date("D, d M Y H:i:s O") . $newLine;
	$headers .= "Subject: $subject" . $newLine;

	//observe the . after the newline, it signals the end of message
	fputs($smtpConnect, "$headers\r\n\r\n" . $message . "\r\n.\r\n");

	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['data2response'] = "$smtpResponse";

	// say goodbye
	fputs($smtpConnect,"QUIT" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['quitresponse'] = "$smtpResponse";
	$logArray['quitcode'] = substr($smtpResponse,0,3);
	fclose($smtpConnect);
	//a return value of 221 in $retVal["quitcode"] is a success
	
//////////////////////////////////////////////////////////////////////////////////////////////////FIN MAIL AL REMITENTE

///////////////////////////////////////////////////////////////////////////////////////INICIO MAIL PARA DAR DE ALTA EN EL MAILING LIST
	
	// If you are using an old version of php, remove the next set of lines.
	// or use $HTTP_POST_VARS["..."] instead.
	$Email 		= $_GET["Email"];
	// Replace special characters - you can remove the next 5 lines if wanted.
	$Email 		= ereg_replace("[^A-Za-z0-9 \@\.\-\/\']", "", $Email);
	// Remove slashes.
	$Email 		= stripslashes($Email);
	//quitar espacios en blanco
	$Email		= trim($Email);
	
	$from = "atenciontsunami@gmail.com";
	$namefrom = "Atención Tsunami [Automático]";
	$to = "atenciontsunami@gmail.com";
	$subject = "Alta mailing [Automático - Reserva Entradas]";
	$message = $Email;
	$smtpServer = "tls://smtp.gmail.com";   //ip address of the mail server.  This can also be the local domain name
	$port = "465";                     // should be 25 by default, but needs to be whichever port the mail server will be using for smtp
	$timeout = "45";                 // typical timeout. try 45 for slow servers
	$username = "atenciontsunami@gmail.com"; // the login for your smtp
	$password = "7017021200";            // the password for your smtp
	$localhost = "www.estoescasa.com";       // Defined for the web server.  Since this is where we are gathering the details for the email
	$newLine = "\r\n";             // aka, carrage return line feed. var just for newlines in MS
	
	//connect to the host and port
	$smtpConnect = fsockopen($smtpServer, $port, $errno, $errstr, $timeout);
	$smtpResponse = fgets($smtpConnect, 4096);
	if(empty($smtpConnect)) {
	   //$output = "Failed to connect: $smtpResponse";
	   $output = "Por algún problema no se ha podido realizar el alta en la lista de correo<br>Inténtalo más tarde o a través de correo electrónico a <a href =\"mailto:atenciontsunami@gmail.com\">atenciontsunami@gmail.com<br> Gracias";
	   echo $output;
	}
	else {
	   $logArray['connection'] = "<p>Connected to: $smtpResponse";
	   //echo "<p />connection accepted<br>".$smtpResponse."<p />Continuing<p />";
	}
	
	//you have to say HELO again after TLS is started
	   fputs($smtpConnect, "HELO $localhost". $newLine);
	   $smtpResponse = fgets($smtpConnect, 4096);
	   $logArray['heloresponse2'] = "$smtpResponse";
	
	//request for auth login
	fputs($smtpConnect,"AUTH LOGIN" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['authrequest'] = "$smtpResponse";
	
	//send the username
	fputs($smtpConnect, base64_encode($username) . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['authusername'] = "$smtpResponse";
	
	//send the password
	fputs($smtpConnect, base64_encode($password) . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['authpassword'] = "$smtpResponse";
	
	
	//email from
	fputs($smtpConnect, "MAIL FROM: <$from>" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['mailfromresponse'] = "$smtpResponse";
	
	//email to
	fputs($smtpConnect, "RCPT TO: <$to>" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['mailtoresponse'] = "$smtpResponse";
	
	//the email
	fputs($smtpConnect, "DATA" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['data1response'] = "$smtpResponse";
	
	//construct headers
	$headers = "MIME-Version: 1.0" . $newLine;
	$headers .= "Content-type: text/html; charset=iso-8859-1" . $newLine;
	$headers .= "To: <$to>" . $newLine;
	$headers .= "From: $namefrom <$from>" . $newLine;
	$headers .= "Date: ".date("D, d M Y H:i:s O") . $newLine;
	$headers .= "Subject: $subject" . $newLine;
	
	//observe the . after the newline, it signals the end of message
	fputs($smtpConnect, "$headers\r\n\r\n" . $message . "\r\n.\r\n");
	
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['data2response'] = "$smtpResponse";
	
	// say goodbye
	fputs($smtpConnect,"QUIT" . $newLine);
	$smtpResponse = fgets($smtpConnect, 4096);
	$logArray['quitresponse'] = "$smtpResponse";
	$logArray['quitcode'] = substr($smtpResponse,0,3);
	fclose($smtpConnect);
	//a return value of 221 in $retVal["quitcode"] is a success

/////////////////////////////////////////////////////////////////////////////////////////////FIN MAIL ALTA MAILING
	
}

?>
