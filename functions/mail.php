<?php

$name=$_POST['name'];
$mail=$_POST['mail'];
$object=$_POST['object'];
$message=$_POST['message'];

//text format defined
$headers= "Content-type: text/plain; charset=iso-8859-1\r\n";

//order of send
$headers= "From: $name <$mail>\r\nReply-to : $name <$mail>\nX-Mailer:PHP";

$subject="$object";
$mailTo="dylan.leporcq7@gmail.com";
$body="$message";
if (mail($mailTo,$subject,$body,$headers)) {
    echo "Votre mail a bien été envoyé";
    header("location: index.php" . $_SERVER['HTTP_REFERER']);
} else {
    echo "Une erreur s'est produite";
}

