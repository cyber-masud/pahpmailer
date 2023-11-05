<?php
   include('./smtp/PHPMailerAutoload.php'); //call php mailer
   
   // send otp/code mail function
	function smtp_mailer(){
		
		$mail = new PHPMailer();
		$mail->SMTPDebug  = 3;
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = "smtp.gmail.com";
		$mail->Port = "465";
		$mail->IsHTML(true);
		$mail->CharSet = 'UTF-8';
		$mail->Username = "mrmason.in@kosuriers.com";
		$mail->Password = "BabuMekanik24@";
		$mail->SetFrom("mrmason.in@kosuriers.com");
		$mail->Subject = "Test Mail";
		$mail->Body = "Test Message";
		$mail->AddAddress("masud537851@gmail.com");
		$mail->SMTPOptions=array('ssl'=>array(
			'verify_peer'=>false,
			'verify_peer_name'=>false,
			'allow_self_signed'=>true
		));
				
		if(!$mail->Send()){
			echo 'failed';
		}else{
			echo 'sent';
		}
	}
	
	smtp_mailer();
?>