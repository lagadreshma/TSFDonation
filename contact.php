<?php
   
  if(isset($_POST["submit"])){
     $username = $_POST["username"];
     $email = $_POST["email"];
     $message = $_POST["messages"];

     $to = "reshmalagad27@gmail.com";
     $subject = "Contact with Us";

     $message = "Name : {$username}
                 Email : {$email}
                 Message : {$message}";

// Always set content-type when sending HTML email
     $headers = "MIME-Version: 1.0" . "\r\n";
     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
     $headers .= 'From: reshmalagad27@gmail.com';
     
     $mail = mail($to,$subject,$message,$headers);

     if($mail){
       echo "<script>alert($message sent sucessfully)</script>";
     }
     else{
       echo "<script>alert($message not sent)</script>";
     }
  }

?>
