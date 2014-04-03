<?php
require_once('api/PHPMailer_5.2.4/class.phpmailer.php');
require_once('api/phpincludes/db_connection.php');
require_once('api/GeneralFunctions.php');
$senderName = $_REQUEST['senderName'];
$senderEmail=$_REQUEST['senderEmail'];
$message = $_REQUEST['message'];
$senderEmail="raju.prasad21@gmail.com";

if(!empty($senderName)&& !empty($message))
{
			$smtp_username = SMTP_USER;
			$smtp_email = SMTP_EMAIL;
			$smtp_password = SMTP_PASSWORD;
			$smtp_name = SMTP_NAME;		
			$subjectMail = 'Roomvine Contact';
			$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
			
			$mail->IsSMTP(); // telling the class to use SMTP
			
			try {
			  $mail->Host       = SMTP_HOST; // SMTP server
			  
			  $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
			  $mail->SMTPAuth   = true;                  // enable SMTP authentication
			  
			 // $mail->SMTPSecure = "tls";
			  $mail->Host       = SMTP_HOST; // sets the SMTP server
			  $mail->Port       = SMTP_PORT;                    // set the SMTP port for the GMAIL server
				
			
			  $mail->Username   = $smtp_username; // SMTP account username
			  $mail->Password   = $smtp_password;        // SMTP account password
			  $mail->AddAddress($senderEmail, '');     // SMTP account password
			  $mail->SetFrom($smtp_email, $smtp_name);
			  $mail->AddReplyTo($smtp_email, $smtp_name);
					  
			$mail->Subject = 'subject';
			$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; 
				
				
		
			  $mail->MsgHTML($message) ;
			  
			 
			  
			  if(!$mail->Send())
				{
				
					header('location:index.php?send=notsend');
				
				} 				
				else 
				{

					echo "success";	

				}
			  
			  
			  
			//  echo "Message Sent OK</p>\n";
			} catch (phpmailerException $e) {
			  echo $e->errorMessage(); //Pretty error messages from PHPMailer
			} catch (Exception $e) {
			  echo $e->getMessage(); //Boring error messages from anything else!
			}


}
else
{
	
	header('location:index.php?send=failure');
}
		

?>