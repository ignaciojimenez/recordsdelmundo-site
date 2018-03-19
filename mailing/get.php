<?

/////////////////////////////////////////////////////////////////////////////////////////////INICIO MAIL A ENTRADAS
$from = "entradas@estoescasa.com";
$namefrom = "Estoescasa Entradas";
$to = "";
$subject = "Reserva Entradas concierto AT! [automatico]";
$message = "";
$smtpServer = "mail.estoescasa.com";   //ip address of the mail server.  This can also be the local domain name
$port = "25";                     // should be 25 by default, but needs to be whichever port the mail server will be using for smtp
$timeout = "45";                 // typical timeout. try 45 for slow servers
$username = "entradas@estoescasa.com"; // the login for your smtp
$password = "estosontickets";            // the password for your smtp
$localhost = "www.estoescasa.com";       // Defined for the web server.  Since this is where we are gathering the details for the email
$newLine = "\r\n";             // aka, carrage return line feed. var just for newlines in MS

$to= $_GET['email'];
$message = $to;

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

print_r($to . " dado de alta");
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////FIN TO ENTRADAS

?>
