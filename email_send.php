<?php

$to = "ahmadnesar898@gmail.com";
$subject = "This is subject";
$message = "Hello! This is sample text message.";
$from = "my-domain@mithundev.xyz";
$headers = "From : $from";

mail ($to , $subject , $message , $headers);

echo "Mail sent...";

//  $header .= "Cc:afgh@somedomain.com \r\n";
//  $header .= "MIME-Version: 1.0\r\n";
//  $header .= "Content-type: text/html\r\n";

// $retval = mail ($to,$subject,$message,$headers);

// if($retval == true) {
//    echo "Message sent successfully...";
// }else {
//    echo "Message could not be sent...";
// }

?>