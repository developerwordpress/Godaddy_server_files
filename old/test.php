<?php
$to = "devtestkr123@gmail.com";
$subject = "Test Mail";
$message = "This is a test";
$from = "Tyler@titleleader.com";
$headers = "From:".$from;
if(mail($to, $subject, $message, $headers)){
    echo "Mail sent.";
}
else{
    echo "Error";
}
?