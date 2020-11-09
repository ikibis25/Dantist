<?php

$name=$_POST['first_name'];
$phone=$_POST['phone_number'];



$to = "support@templatebundle.net";
$subject = "My subject";
$txt = "Hello Admin: Usser Name: ".$name." Phone: ".$phone."";
$headers = "From: webmaster@example.com";

echo mail($to,$subject,$txt,$headers);
?>