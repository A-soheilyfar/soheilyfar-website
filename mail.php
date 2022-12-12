<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "abolfazlsoheilyfar@gmail.com";
$subject = "Soheilyfar.ir contact";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Phone = " . $phone . "\r\n Message =" . $message;
$headers = "From: noreply@soheilyfar.ir" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
echo '<script type ="text/JavaScript">';  
echo 'alert("Thanks. we will response you soon !")';  
echo '</script>'; 

?>