<?php

 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $number = $_REQUEST['number'];
 $message = $_REQUEST['message'];

 if (empty($name)) {
   exit(
    json_encode(array(error=>"name is empty"))
   );
 }
 else if (empty(trim($email))) {
     exit(
      json_encode(array(error=>"email is empty"))
     );
  }
  else if (empty($message)) {
       exit(
        json_encode(array(error=>"message is empty"))
       );
    }



/* un-comment if a rendered page */
//?>
