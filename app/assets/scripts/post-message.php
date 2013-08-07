<?php

	$name = trim($_REQUEST['name']);
	$email = trim($_REQUEST['email']);
	if(isset($_REQUEST['number']))
		$number = trim($_REQUEST['number']);
		
	$message = "Message from $name.\r\n";
	$message .= "Contact them via: $email\r\n";
	if($number) 
		$message .= "or call them: $number\r\n";	
	
	$message .= trim($_REQUEST['message']);
	
	$myEmail = "wildtangomedia@gmail.com";	
	$subject = "New message from " . $name;	
	
	
	
	$headers   = array();
	$headers[] = "MIME-Version: 1.0";
	$headers[] = "Content-type: text/plain; charset=iso-8859-1";
	$headers[] = "Reply-To: " . $email;
	$headers[] = "Subject: {$subject}";
	$headers[] = "X-Mailer: PHP/".phpversion();
 /*
	if there's no name entered...
 */
 if (empty($name)) {
   exit(
    json_encode(array(error=>"name is empty"))
   );
 }
 /* 
	or if there's no email entered
 */
 else if (empty($email)) {
     exit(
      json_encode(array(error=>"email is empty"))
     );
  }
  
  /* 
	or if they forgot the message...
  */
  else if (empty($message)) {
       exit(
        json_encode(array(error=>"message is empty"))
       );
    }

	/* 
		woo no errors, now lets actually send it maybe (\/){•m•}(\/)
	*/
	
	
	if (mail($myEmail, $subject, $message, implode("\r\n", $headers))) {
		exit(json_encode(array(success=>"message sent succesfully!")));
	} else {
		exit(json_encode(array(error=>"something went horribly wrong ;__;")));
	}
	
	

/* un-comment if a rendered page */
//?>
